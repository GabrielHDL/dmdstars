<div x-data>
    <p class="mb-4">
        <span class="font-semibold text-lg">In Stock:</span>

        @if ($quantity)
            {{$quantity}}
        @else
            {{$product->stock}}
        @endif

    </p>
    <div class="flex mt-6 items-center pb-5 border-b-2 border-deer mb-5">
        <div class="flex items-center">
            <span class="mr-3">Size</span>
            <div class="relative">
                <select
                    wire:model="size_id"
                    class="rounded border appearance-none border-rifleGreen py-2 focus:outline-none focus:border-deer focus:ring-2 focus:ring-deer text-base pl-3 pr-10">
                    <option selected disabled value="">Select Size</option>
                    @foreach ($sizes as $size)
                        <option value="{{$size->id}}">{{ $size->name }}</option>
                    @endforeach
                </select>
                <span
                    class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                        <path d="M6 9l6 6 6-6"></path>
                    </svg>
                </span>
            </div>
        </div>

        <div class="flex ml-6 items-center">
            <span class="mr-3">Color</span>
            <div class="relative">
                <select
                    wire:model="color_id"
                    class="rounded border appearance-none border-rifleGreen py-2 focus:outline-none focus:border-deer focus:ring-2 focus:ring-deer text-base pl-3 pr-10">
                    <option value="" selected disabled>Select Color</option>
                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                    @endforeach
                </select>
                <span
                    class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                        <path d="M6 9l6 6 6-6"></path>
                    </svg>
                </span>
            </div>
        </div>
    </div>
    <div class="flex items-center">
        <span class="title-font font-medium text-2xl">${{ $product->price }}</span>
        <div class="ml-auto flex items-center">
            <div class="mr-2">
                <x-secondary-button disabled x-bind:disabled="$wire.qty <= 1" wire:loading.attr="disabled"
                    wire:target="decrement" wire:click="decrement">
                    -
                </x-secondary-button>
                <span class="mx-2">{{ $qty }}</span>
                <x-secondary-button x-bind:disabled="$wire.qty >= $wire.quantity" wire:loading.attr="disabled"
                    wire:target="increment" wire:click="increment" wire:click="increment">
                    +
                </x-secondary-button>
            </div>
            <button
                wire:click="addItem"
                wire:loading.attr="disabled"
                wire:target="addItem"
                x-bind:disabled="!$wire.quantity"
                class="disabled:bg-opacity-50 disabled:text-white/70 flex border-none rounded-none text-white bg-goldenrod hover:bg-deer focus:ring-4 focus:outline-none focus:ring-deer uppercase text-sm px-5 py-2.5 text-center font-semibold">Add
                to Cart</button>
        </div>
    </div>
</div>
