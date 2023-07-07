<?php

namespace App\Http\Livewire;

use App\Models\Gender;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {

        $genders = Gender::all();

        return view('livewire.navigation', compact('genders'));
    }
}
