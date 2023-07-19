<div>
    <!-- component -->
    <!-- Create By Joker Banny -->
    <style>
        @layer utilities {

            input[type="number"]::-webkit-inner-spin-button,
            input[type="number"]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        }
    </style>

    <body>
        <div class="h-screen pt-20">
            <h1 class="mb-10 text-center text-2xl font-bold font-saol">Cart Items</h1>
            @if (Cart::count())
                <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
                    <div class="md:w-2/3">
                        @foreach (Cart::content() as $item)
                            <div class="justify-between mb-6 bg-rifleGreen p-6 shadow-md sm:flex sm:justify-start">
                                <img src="{{ $item->options->image }}" alt="product-image" class="w-full sm:w-40 object-cover object-center" />
                                <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                                    <div class="mt-5 sm:mt-0">
                                        <h2 class="text-lg font-bold text-platinum font-saol">{{ $item->name }}</h2>
                                        <div class="flex">
                                            @if ($item->options->color)
                                                <p class="mt-1 text-xs text-goldenrod">Color:
                                                    {{ __($item->options->color) }}</p>
                                            @endif

                                            @if ($item->options->size)
                                                <span class="mx-1 text-goldenrod">-</span>
                                                <p class="mt-1 text-xs text-goldenrod">Size: {{ $item->options->size }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                                        @if ($item->options->size)
                                            @livewire('update-cart-item-size', ['rowId' => $item->rowId], key($item->rowId))
                                        @elseif($item->options->color)
                                            @livewire('update-cart-item-color', ['rowId' => $item->rowId], key($item->rowId))
                                        @else
                                            @livewire('update-cart-item', ['rowId' => $item->rowId], key($item->rowId))
                                        @endif
                                        <div class="flex items-center space-x-4 text-platinum">
                                            <p class="text-sm text-goldenrod">${{ $item->price * $item->qty }}</p>
                                            <svg wire:click="delete('{{ $item->rowId }}')"
                                                wire:loading.class="text-red-600 opacity-25"
                                                wire:target="delete('{{ $item->rowId }}')"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="h-5 w-5 cursor-pointer duration-150 hover:text-red-500">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Sub total -->
                    <div class="mt-6 h-full border bg-rifleGreen p-6 shadow-md md:mt-0 md:w-1/3 text-goldenrod">
                        {{-- <div class="mb-2 flex justify-between">
                            <p class="text-platinum">Subtotal</p>
                            <p class="text-platinum">${{Cart::subtotal()}}</p>
                        </div> --}}
                        {{-- <div class="flex justify-between">
                            <p class="text-platinum">Shipping</p>
                            <p class="text-platinum">$4.99</p>
                        </div> --}}
                        {{-- <hr class="my-4 border-platinum" /> --}}
                        <div class="flex justify-between">
                            <p class="text-lg font-bold">Total</p>
                            <div class="">
                                <p class="mb-1 text-lg font-bold">${{Cart::subtotal()}} USD</p>
                                <p class="text-sm text-platinum">including VAT</p>
                            </div>
                        </div>
                        <a href="{{ route('orders.create') }}"
                            class="btn rounded-none border-none mt-6 w-full bg-goldenrod uppercase font-semibold py-1.5 text-white hover:bg-deer">Continue</a>
                    </div>
                </div>
            @else
                <div class="container flex justify-center items-center min-h-[50vh] flex-col">
                    <span class="text-3xl font-saol font-bold">There's nothing in your cart...</span>
                    <a class="mt-8 btn border-none rounded-none bg-goldenrod uppercase font-semibold py-3 px-8 text-white hover:bg-deer" href="{{route('home')}}">Add items</a>
                </div>
            @endif
        </div>
    </body>
</div>
