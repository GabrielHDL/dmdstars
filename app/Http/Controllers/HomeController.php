<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {

        if (auth()->user()) {

            $pending = Order::where('status', 1)->where('user_id', auth()->user()->id)->count();

            if ($pending) {

                $message = "You have $pending pending order(s). <a class='font-bold' href='" . route('orders.index') ."?status=1'>Go to pay</a>";

                session()->flash('flash.banner', $message);
            }

        }

        $genders = Gender::all();

        $latestProducts = Product::where('status', Product::PUBLISHED)->take(8)->latest('id')->get();

        return view('home.index', compact('genders', 'latestProducts'));
    }
}
