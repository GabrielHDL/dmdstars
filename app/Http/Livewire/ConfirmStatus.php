<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class ConfirmStatus extends Component
{
    public $confirm;

    public $partner;

    public function mount($partner)
    {
        $partner = $this->partner;
        $confirm = $this->partner->confirm;
    }

    public function updateConfirm()
    {
        $partner = $this->partner;
        $partner->confirm = $this->confirm;
        $partner->save();
        $this->emit('updateStatus');
    }

    public function render()
    {
        return view('livewire.confirm-status');
    }
}
