<x-mail::message>
<div>
    <h1>Hi, {{$order->contact}}</h1>
</div>

<p>Your order has been registered with the order number: {{$order->id}}</p>
<br>
<p>The order will be sent to {{$envio->address}}, {{$envio->department}}, {{$envio->city}}, {{$envio->district}}</p>
<br>
<h3>Summary of your purchase:</h3>

<x-mail::table>
|     | Name                 | Quantity | Price               | Total               |
| :-- | :------------------- | :------- | :------------------ | :------------------ |
@foreach ($items as $item)
| <img style="height: 50px; width: auto; border-radius: 5px;" src="{{$item->options->image}}"> | {{$item->name}} | {{$item->qty}} | ${{number_format($item->price, 2)}} | ${{number_format($item->price * $item->qty, 2)}} |
@endforeach
</x-mail::table>

<b>Total: ${{$order->total}} USD</b>

<x-mail::button :url="route('orders.show', $order->id)">
See Order
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}

</x-mail::message>