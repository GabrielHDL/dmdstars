<x-app-layout>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">


        <div class="bg-rifleGreen shadow px-12 py-8 mb-6 flex items-center text-platinum">

            <div class="relative">
                <div class="{{ ($order->status >= 2 && $order->status != 5) ? 'bg-goldenrod' : 'bg-gray-400' }}  rounded-full h-12 w-12 flex items-center justify-center">
                    <i class="fas fa-check text-white"></i>
                </div>

                <div class="absolute -left-1.5 mt-0.5">
                    <p>Placed</p>
                </div>
            </div>

            <div class="{{ ($order->status >= 3 && $order->status != 5) ? 'bg-goldenrod' : 'bg-gray-400' }} h-1 flex-1 mx-2"></div>

            <div class="relative">
                <div class="{{ ($order->status >= 3 && $order->status != 5) ? 'bg-goldenrod' : 'bg-gray-400' }} rounded-full h-12 w-12 flex items-center justify-center">
                    <i class="fas fa-truck text-white"></i>
                </div>

                <div class="absolute -left-1 mt-0.5">
                    <p>Shipped</p>
                </div>
            </div>

            <div class="{{ ($order->status >= 4 && $order->status != 5) ? 'bg-goldenrod' : 'bg-gray-400' }} h-1 flex-1 mx-2"></div>

            <div class="relative">
                <div class="{{ ($order->status >= 4 && $order->status != 5) ? 'bg-goldenrod' : 'bg-gray-400' }} rounded-full h-12 w-12 flex items-center justify-center">
                    <i class="fas fa-check text-white"></i>
                </div>

                <div class="absolute -left-2 mt-0.5">
                    <p>Delivered</p>
                </div>
            </div>

        </div>




        <div class="bg-rifleGreen shadow px-6 py-4 mb-6 flex items-center">
            <p class="text-platinum"><span class="font-bold font-saol">Order Number:</span>
                Order-{{ $order->id }}</p>

            @if ($order->status == 1)
            
                <a class="ml-auto text-white bg-goldenrod hover:bg-deer px-4 py-1 btn rounded-none border-none" href="{{route('orders.payment', $order)}}">
                    Go to pay
                </a>

            @endif
        </div>

        <div class="bg-rifleGreen shadow p-6 mb-6">
            <div class="grid grid-cols-2 gap-6 text-platinum">
                <div>
                    <p class="text-lg font-bold font-saol">Shipping</p>

                    {{-- @if ($order->envio_type == 1)
                        <p class="text-sm">Los productos deben ser recogidos en tienda</p>
                        <p class="text-sm">Calle falsa 123</p>
                    @else
                        <p class="text-sm">The product(s) will be sent to:</p>
                        <p class="text-sm">{{ $envio->address }}</p>
                        <p>{{ $envio->department }} - {{ $envio->city }} - {{ $envio->district }}
                        </p>
                    @endif --}}

                    <p class="text-sm">The product(s) will be sent to:</p>
                        <p class="text-sm">{{ $envio->address }}</p>
                        <p>{{ $envio->department }} - {{ $envio->city }} - {{ $envio->district }}</p>


                </div>

                <div>
                    <p class="text-lg font-bold font-saol">Contact Information</p>

                    <p class="text-sm">Person who will receive the product(s): {{ $order->contact }}</p>
                    <p class="text-sm">Contact Phone: {{ $order->phone }}</p>
                </div>
            </div>
        </div>

        <div class="bg-rifleGreen shadow p-6 text-platinum mb-6">
            <p class="text-xl font-bold font-saol mb-4">In Resume</p>

            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th></th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-deer">
                    @foreach ($items as $item)
                        <tr>
                            <td>
                                <div class="flex">
                                    <img class="h-15 w-20 object-cover mr-4" src="{{ $item->options->image }}"
                                        alt="">
                                    <article>
                                        <h1 class="font-bold">{{ $item->name }}</h1>
                                        <div class="flex text-xs">

                                            @isset($item->options->color)
                                                Color: {{ __($item->options->color) }}
                                            @endisset

                                            @isset($item->options->size)
                                                - {{ $item->options->size }}
                                            @endisset
                                        </div>
                                    </article>
                                </div>
                            </td>

                            <td class="text-center">
                                ${{ $item->price }} USD
                            </td>

                            <td class="text-center">
                                {{ $item->qty }}
                            </td>

                            <td class="text-center">
                                ${{ $item->price * $item->qty }} USD
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



    </div>

</x-app-layout>