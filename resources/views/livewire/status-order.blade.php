<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">


    <div class="bg-platinum shadow-lg px-12 py-8 mb-6 flex items-center">

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




    <div class="bg-platinum shadow-lg px-6 py-4 mb-6">
        <p class="text-rifleGreen uppercase"><span class="font-semibold">Order Number:</span>
            Order-{{ $order->id }}</p>

        <form wire:submit.prevent="update">
            <div class="flex space-x-4 mt-2">
                <x-label>
                    <input wire:model="status" type="radio" name="status" value="2" class="mr-2 text-goldenrod focus:border-deer focus:ring-deer">
                    PLACED
                </x-label>

                <x-label>
                    <input wire:model="status" type="radio" name="status" value="3" class="mr-2 text-goldenrod focus:border-deer focus:ring-deer">
                    SHIPPED
                </x-label>

                <x-label>
                    <input wire:model="status" type="radio" name="status" value="4" class="mr-2 text-goldenrod focus:border-deer focus:ring-deer">
                    DELIVERED
                </x-label>

                <x-label>
                    <input wire:model="status" type="radio" name="status" value="5" class="mr-2 text-goldenrod focus:border-deer focus:ring-deer">
                    NULLED
                </x-label>
            </div>

            <div class="flex mt-2">
                <x-button class="ml-auto">
                    Update
                </x-button>
            </div>
        </form>
    </div>

    <div class="bg-platinum shadow-lg p-6 mb-6">
        <div class="grid grid-cols-2 gap-6 text-rifleGreen">
            <div>
                <p class="text-lg font-semibold uppercase">Shipping</p>

                @if ($order->envio_type == 1)
                    <p class="text-sm">Los productos deben ser recogidos en tienda</p>
                    <p class="text-sm">Calle falsa 123</p>
                @else
                    <p class="text-sm">Los productos Serán enviados a:</p>
                    <p class="text-sm">{{ $envio->address }}</p>
                    <p>{{ $envio->department }} - {{ $envio->city }} - {{ $envio->district }}
                    </p>
                @endif


            </div>

            <div>
                <p class="text-lg font-semibold uppercase">Datos de contacto</p>

                <p class="text-sm">Persona que recibirá el producto: {{ $order->contact }}</p>
                <p class="text-sm">Teléfono de contacto: {{ $order->phone }}</p>
            </div>
        </div>
    </div>

    <div class="bg-platinum shadow-lg p-6 text-rifleGreen mb-6">
        <p class="text-xl font-semibold mb-4">Resumen</p>

        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th></th>
                    <th>Precio</th>
                    <th>Cant</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
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
                            {{ $item->price }} USD
                        </td>

                        <td class="text-center">
                            {{ $item->qty }}
                        </td>

                        <td class="text-center">
                            {{ $item->price * $item->qty }} USD
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</div>