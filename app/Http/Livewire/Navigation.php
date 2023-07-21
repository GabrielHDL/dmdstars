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

        $pending = Order::where('status', 1)->where('user_id', auth()->user()->id)->count();

        return view('livewire.navigation', compact('genders', 'pending'));
    }
}
