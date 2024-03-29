<div class="flex items-center border-gray-100" x-data>
    <button
        class="cursor-pointer bg-platinum py-1 px-3.5 duration-100 hover:bg-goldenrod hover:text-white disabled:bg-opacity-5 disabled:text-white/60"
        disabled
        x-bind:disabled="$wire.qty <= 1"
        wire:loading.attr="disabled"
        wire:target="decrement"
        wire:click="decrement">
        - </button>
    <input disabled class="w-10 bg-platinum focus:ring-deer focus:border-deer text-center text-xs outline-none" type="number"
        value="{{$qty}}" min="1" />
    <button
        class="cursor-pointer bg-platinum py-1 px-3.5 duration-100 hover:bg-goldenrod hover:text-white"
        x-bind:disabled="$wire.qty >= $wire.quantity"
        wire:loading.attr="disabled"
        wire:target="increment"
        wire:click="increment">
        + </button>
</div>
