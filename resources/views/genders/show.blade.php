<x-app-layout>
    <div class="h-96 bg-cover bg-center mb-16" style="background-image: url({{ Storage::url($gender->image) }});">
        <div class="container h-full w-full flex justify-center items-center">
            <span class="text-platinum font-bold font-saol text-5xl">{{$gender->name}}</span>
        </div>
    </div>
    <div class="container">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($products as $product)
                <div class="bg-rifleGreen shadow transition-all ease-linear hover:shadow-lg hover:shadow-black/40">
                    <a href="{{route('products.show', $product)}}">
                        <img class="pb-4" src="{{ Storage::url($product->images->first()->url) }}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight font-saol text-platinum">{{ $product->name }}</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <a href="{{route('gender.show', $product->subcategory->category->gender)}}" class="bg-deer text-platinum text-xs font-semibold mr-2 px-2.5 py-0.5">{{$product->subcategory->category->gender->name}}</a href="#">

                            <a href="{{route('genderCategory.show', [$product->subcategory->category->gender, $product->subcategory->category])}}" class="bg-deer text-platinum text-xs font-semibold px-2.5 py-0.5">{{$product->subcategory->category->name}}</a>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xl font-bold text-platinum">{{ '$' . $product->price }}</span>
                            <a href="{{route('products.show', $product)}}"
                                class="text-white bg-goldenrod hover:bg-deer focus:ring-4 focus:outline-none focus:ring-deer uppercase text-sm px-5 py-2.5 text-center font-semibold">Add
                                to cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container py-8">
        {{$products->links()}}
    </div>
</x-app-layout>