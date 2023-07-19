<div x-data>
    <form action="{{ route('search') }}" autocomplete="off" class="flex gap-2">
        <input name="name" wire:model="search" type="text" placeholder="Aa"
            class="input focus:border-platinum focus:text-rifleGreen focus:bg-platinum focus:placeholder:text-rifleGreen placeholder:text-platinum/70 input-ghost w-full max-w-xs" />
        <button class="btn btn-ghost hover:bg-deer/30 btn-circle">
            <i class="text-platinum fa-solid fa-magnifying-glass"></i>
        </button>
    </form>

    <div class="absolute mt-3 hidden" :class="{ 'hidden' : !$wire.open }" @click.away="$wire.open = false">
        <div class="bg-rifleGreen text-platinum rounded-lg shadow-lg">
            <div class="px-4  py-3 space-y-1">
                @forelse ($products as $product)
                    <a href="{{ route('products.show', $product) }}" class="flex">
                        <img class="w-16 h-12 object-cover" src="{{ Storage::url($product->images->first()->url) }}" alt="">
                        <div class="ml-4">
                            <p class="text-lg font-semibold leading-5">{{$product->name}}</p>
                            <p>Category: {{$product->subcategory->category->name}}</p>
                        </div>
                    </a>
                @empty
                    <p class="text-lg leading-5">
                        Nothing here...
                    </p>
                @endforelse
            </div>
        </div>
    </div>
</div>
