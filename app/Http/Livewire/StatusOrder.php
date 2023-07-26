<?php

namespace App\Http\Livewire;

use App\Mail\StatusOrderMailable;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class StatusOrder extends Component
{
    public $order, $status;

    public function mount(){
        $this->status = $this->order->status;
    }

    public function update(){
        $this->order->status = $this->status;
        $this->order->save();
        $this->sendConfirmationMail($this->order);

        $this->emit('render');
    }

    public function sendConfirmationMail($order) {

        $user = User::find($this->order->user_id);

        Mail::to($user->email)->send(new StatusOrderMailable($order));
    }

    public function render()
    {

        $items = json_decode($this->order->content);
        $envio = json_decode($this->order->envio);

        return view('livewire.status-order', compact('items', 'envio'));
    }
}
