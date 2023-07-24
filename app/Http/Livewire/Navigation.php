<?php

namespace App\Http\Livewire;

use App\Models\Gender;
use App\Models\Order;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {

        $genders = Gender::all();

        if (auth()->user()) {
            $pending = Order::where('status', 1)->where('user_id', auth()->user()->id)->count();
        } else {
            $pending = "";
        }

        return view('livewire.navigation', compact('genders', 'pending'));
    }
}
