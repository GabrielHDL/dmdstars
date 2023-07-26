<x-mail::message>
<div>
<h1>Hi, {{$order->contact}}</h1>
</div>
Sorry, your order has been cancelled.

<x-mail::button :url="route('orders.show', $order->id)">
See Order
</x-mail::button>

{{ config('app.name') }}
</x-mail::message>