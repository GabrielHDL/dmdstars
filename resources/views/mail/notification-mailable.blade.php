<x-mail::message>
<div>
<h1>Hi Alondra!</h1>
</div>

<p>The user {{$order->user->name}}</p>
<br>
<p>Has generated and confirmed Order with number: {{$order->id}}</p>
<br>
<p>The order should be sent to {{$envio->address}}, {{$envio->state}}, {{$envio->city}}, {{$envio->zip}}</p>
<br>
<p>The Order contact is: {{$order->contact}}</p>
<br>
<h3>Summary of the purchase:</h3>

<x-mail::table>
|     | Name                 | Quantity | Price               | Total               |
| :-- | :------------------- | :------- | :------------------ | :------------------ |
@foreach ($items as $item)
| <img style="height: 50px; width: auto; border-radius: 5px;" src="{{$item->options->image}}"> | {{$item->name}} | {{$item->qty}} | ${{number_format($item->price, 2)}} | ${{number_format($item->price * $item->qty, 2)}} |
@endforeach
</x-mail::table>

<b>Total: ${{$order->total}} USD</b>

<x-mail::button :url="route('admin.orders.show', $order->id)">
See Order
</x-mail::button>

Congrats,<br>
{{ config('app.name') }}

</x-mail::message>