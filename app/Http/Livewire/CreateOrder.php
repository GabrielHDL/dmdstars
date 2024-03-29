<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Order;
use App\Models\State;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CreateOrder extends Component
{
    public $envio_type = 1;

    public $contact, $phone, $zip, $address, $references, $shipping_cost = 0;

    public $states, $cities = [];

    public $state_id = "", $city_id = "";

    public $rules = [
        'contact' => 'required',
        'phone' => 'required',
        'state_id' => 'required',
        'city_id' => 'required',
        'zip' => 'required',
        'address' => 'required',
        'references' => 'required'
    ];

    public function mount(){
        $this->states = State::all();
    }


    public function updatedStateId($value){
        $this->cities = City::where('state_id', $value)->get();

        $this->reset('city_id');
    }


    public function updatedCityId($value){

        $city = City::find($value);

        $this->shipping_cost = $city->cost;
    }


    public function create_order(){

        $rules = $this->rules;

        $this->validate($rules);

        $order = new Order();

        $order->user_id = auth()->user()->id;
        $order->contact = $this->contact;
        $order->phone = $this->phone;
        $order->envio_type = $this->envio_type;
        $order->shipping_cost = 0;
        $order->total = $this->shipping_cost + Cart::subtotal();
        $order->content = Cart::content();

        $order->shipping_cost = $this->shipping_cost;

        $order->envio = json_encode([
            'state' => State::find($this->state_id)->name,
            'city' => City::find($this->city_id)->name,
            'address' => $this->address,
            'zip' => $this->zip,
            'references' => $this->references
        ]);

        $order->save();

        foreach (Cart::content() as $item) {
            discount($item);
        }

        Cart::destroy();

        return redirect()->route('orders.payment', $order);
    }

    public function render()
    {
        return view('livewire.create-order');
    }
}
