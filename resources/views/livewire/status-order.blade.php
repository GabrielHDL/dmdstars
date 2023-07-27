<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">


    <div class="bg-platinum shadow-lg px-12 py-8 mb-6 flex items-center">

        @if ($order->status == 5)
            <div class="flex flex-col items-center justify-center w-full">
                <div class="bg-red-700 rounded-full h-12 w-12 flex items-center justify-center">
                    <i class="fa-regular fa-circle-xmark text-xl text-white"></i>
                </div>
                <p class="mt-2 text-rifleGreen">Canceled</p>
            </div>
        @else
            <div class="relative">
                <div
                    class="{{ $order->status >= 2 && $order->status != 5 ? 'bg-goldenrod' : 'bg-gray-400' }}  rounded-full h-12 w-12 flex items-center justify-center">
                    <i class="fas fa-check text-white"></i>
                </div>

                <div class="absolute -left-1.5 mt-0.5">
                    <p>Placed</p>
                </div>
            </div>

            <div
                class="{{ $order->status >= 3 && $order->status != 5 ? 'bg-goldenrod' : 'bg-gray-400' }} h-1 flex-1 mx-2">
            </div>

            <div class="relative">
                <div
                    class="{{ $order->status >= 3 && $order->status != 5 ? 'bg-goldenrod' : 'bg-gray-400' }} rounded-full h-12 w-12 flex items-center justify-center">
                    <i class="fas fa-truck text-white"></i>
                </div>

                <div class="absolute -left-1 mt-0.5">
                    <p>Shipped</p>
                </div>
            </div>

            <div
                class="{{ $order->status >= 4 && $order->status != 5 ? 'bg-goldenrod' : 'bg-gray-400' }} h-1 flex-1 mx-2">
            </div>

            <div class="relative">
                <div
                    class="{{ $order->status >= 4 && $order->status != 5 ? 'bg-goldenrod' : 'bg-gray-400' }} rounded-full h-12 w-12 flex items-center justify-center">
                    <i class="fas fa-check text-white"></i>
                </div>

                <div class="absolute -left-2 mt-0.5">
                    <p>Delivered</p>
                </div>
            </div>
        @endif

    </div>




    <div class="bg-platinum shadow-lg px-6 py-4 mb-6">
        <p class="text-rifleGreen uppercase"><span class="font-semibold">Order Number:</span>
            Order-{{ $order->id }}</p>

        <form wire:submit.prevent="update">
            <div class="flex space-x-4 mt-2">
                <x-label>
                    <input wire:model="status" type="radio" name="status" value="2"
                        class="mr-2 text-goldenrod focus:border-deer focus:ring-deer">
                    PLACED
                </x-label>

                <x-label>
                    <input wire:model="status" type="radio" name="status" value="3"
                        class="mr-2 text-goldenrod focus:border-deer focus:ring-deer">
                    SHIPPED
                </x-label>

                <x-label>
                    <input wire:model="status" type="radio" name="status" value="4"
                        class="mr-2 text-goldenrod focus:border-deer focus:ring-deer">
                    DELIVERED
                </x-label>

                <x-label>
                    <input wire:model="status" type="radio" name="status" value="5"
                        class="mr-2 text-goldenrod focus:border-deer focus:ring-deer">
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

                <p class="text-sm">We shipping to:</p>
                <p class="text-sm">{{ $envio->address }}</p>
                <p>{{ $envio->department }}, {{ $envio->city }}, {{ $envio->district }}</p>

            </div>

            <div>
                <p class="text-lg font-semibold uppercase">Contact Information</p>

                <p class="text-sm">Person who will receive the product: {{ $order->contact }}</p>
                <p class="text-sm">Contact Phone: {{ $order->phone }}</p>
            </div>
        </div>
    </div>

    <div class="bg-platinum shadow-lg p-6 text-rifleGreen mb-6">
        <p class="text-xl font-semibold mb-4">Summary</p>

        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th></th>
                    <th>Price</th>
                    <th>Qty</th>
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
