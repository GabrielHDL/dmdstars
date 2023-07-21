<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function index(){

        $orders = Order::query()->where('user_id', auth()->user()->id);

        if (request('status')) {
            $orders->where('status', request('status'));
        }

        $orders = $orders->get();


        $pending = Order::where('status', 1)->where('user_id', auth()->user()->id)->count();
        $placed = Order::where('status', 2)->where('user_id', auth()->user()->id)->count();
        $shipped = Order::where('status', 3)->where('user_id', auth()->user()->id)->count();
        $delivered = Order::where('status', 4)->where('user_id', auth()->user()->id)->count();
        $nulled = Order::where('status', 5)->where('user_id', auth()->user()->id)->count();


        return view('orders.index', compact('orders', 'pending', 'placed', 'shipped', 'delivered', 'nulled'));
    }

    public function show(Order $order){

        $this->authorize('author', $order);

        $items = json_decode($order->content);
        $envio = json_decode($order->envio);

        return view('orders.show', compact('order', 'items', 'envio'));
    }


    public function pay(Order $order, Request $request){

        $this->authorize('author', $order);

        $payment_id = $request->get('payment_id');

        $response = Http::get("https://api.mercadopago.com/v1/payments/$payment_id" . "?access_token=APP_USR-2966754438242803-052115-15da96c087a2fc4d07794f08fe496606-763006654");

        $response = json_decode($response);

        $status = $response->status;

        if($status == 'approved'){
            $order->status = 2;
            $order->save();
        }

        return redirect()->route('orders.show', $order);
    }
}