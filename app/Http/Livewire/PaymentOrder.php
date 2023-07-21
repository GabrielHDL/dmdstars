<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class PaymentOrder extends Component
{
    use AuthorizesRequests;

    public $order;
    public $paymentMethodId;

    public function getDefaultPaymentMethodProperty() {
        return auth()->user()->defaultPaymentMethod();
    }

    public function mount(Order $order){
        $this->order = $order;

        if (auth()->user()->hasDefaultPaymentMethod()) {
            $this->paymentMethodId = $this->defaultPaymentMethod->id;
        }
    }

    public function purchase() {

        try {
            auth()->user()->charge($this->order->total * 100, $this->paymentMethodId);
            $this->order->status = 2;
            $this->order->save();

            return redirect()->route('orders.show', $this->order);

        } catch (\Exception $e) {
            $this->addError('paymentMethodId', $e->getMessage());

            return;
        }

    }

    public function addPaymentMethod($paymentMethod) {
        
        auth()->user()->addPaymentMethod($paymentMethod);

        if (!auth()->user()->hasDefaultPaymentMethod()) {
            auth()->user()->updateDefaultPaymentMethod($paymentMethod);
        }

        $this->paymentMethodId = $paymentMethod;

        $this->purchase();
    }

    public function render()
    {

        $this->authorize('author', $this->order);
        $this->authorize('payment', $this->order);

        $items = json_decode($this->order->content);
        $envio = json_decode($this->order->envio);

        return view('livewire.payment-order', [
            'items' => $items,
            'envio' => $envio,
            'paymentMethods' => auth()->user()->paymentMethods(),
            'intent' => auth()->user()->createSetupIntent(),
        ]);
    }
}
