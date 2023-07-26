<x-mail::message>
<div>
<h1>Hi, {{ $order->contact }}</h1>
</div>
@switch($order->status)
@case(2)
Your order status has changed to: Received
@break

@case(3)
Your order has been shipped.
@break

@case(4)
Your order has been delivered.
<br>
Enjoy it!
@break

@case(5)
Unfortunately your request could not be processed.
<br>
We invite you to generate a new order.
<br>
If you have problems with your order, you can contact us through our contact channels.
@break
@endswitch

<x-mail::button :url="route('orders.show', $order->id)">
See Order
</x-mail::button>

{{ config('app.name') }}
</x-mail::message>
