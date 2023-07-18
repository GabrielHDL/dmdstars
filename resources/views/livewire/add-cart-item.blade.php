<div x-data>
    <div class="flex items-center">
        <span class="title-font font-medium text-2xl">${{ $product->price }}</span>
        <div class="ml-auto flex items-center">
            <div class="mr-2">
                <x-secondary-button
                    disabled
                    x-bind:disabled="$wire.qty <= 1"
                    wire:loading.attr="disabled"
                    wire:target="decrement"
                    wire:click="decrement">
                    -
                </x-secondary-button>
                <span class="mx-2">{{ $qty }}</span>
                <x-secondary-button
                    x-bind:disabled="$wire.qty >= $wire.quantity"
                    wire:loading.attr="disabled"
                    wire:target="increment"
                    wire:click="increment"
                    wire:click="increment">
                    +
                </x-secondary-button>
            </div>
            <button
            class="flex border-none rounded-none text-white bg-goldenrod hover:bg-deer focus:ring-4 focus:outline-none focus:ring-deer uppercase text-sm px-5 py-2.5 text-center font-semibold">Add
            to Cart</button>
        </div>
    </div>
</div>
