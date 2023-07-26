<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class Navigation extends Component
{
    protected $listeners = ['render'];
    
    public function render()
    {
        $pendings = Order::where('status', Order::PLACED)->get();

        return view('livewire.admin.navigation', compact('pendings'));
    }
}
