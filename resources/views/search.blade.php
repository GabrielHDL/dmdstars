<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-4 gap-3">
            @forelse($products as $product)
                <x-product-list :product="$product" />

            @empty
            
                <span class="font-proximaBold text-xl">Nothing here...</span>

            @endforelse
        </div>

        <div class="mt-4">
            {{$products->links()}}
        </div>
    </div>
</x-app-layout>