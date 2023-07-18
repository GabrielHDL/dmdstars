<div x-data>
    <fieldset class="color-swatches  js-color-swatches mb-6">
        <legend class="color-swatches__legend text-sm lg:text-base mb-2 lg:mb-3" aria-live="polite"
            aria-atomic="true"><span class="font-proximaBold">Color: </span><span
                class="color-swatches__color js-color-swatches__color capitalize">{{ $colors->first()->name }}</span></legend>

        <select wire:model="color_id" class="js-color-swatches__select" aria-label="Select a color">
            @foreach ($colors as $color)
                <option value="{{ $color->id }}" data-style="background-color: {{$color->rgb}};">{{ $color->name }}</option>
            @endforeach
        </select>
    </fieldset>

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
            x-bind:disabled="!$wire.quantity"
            class="disabled:bg-opacity-50 disabled:text-white/70 flex border-none rounded-none text-white bg-goldenrod hover:bg-deer focus:ring-4 focus:outline-none focus:ring-deer uppercase text-sm px-5 py-2.5 text-center font-semibold">Add
            to Cart</button>
        </div>
    </div>

    @push('scripts')
        <script src="{{asset('assets/js/swatches.js')}}"></script>
    @endpush
</div>
