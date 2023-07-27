<div>
    <div class="bg-rifleGreen shadow-lg mb-8">
        <div class="px-6 py-4 flex justify-between items-center">
            <h1 class="font-semibold text-platinum uppercase"><a
                    href="{{ route('gender.show', $category->gender) }}">{{ $category->gender->name }}</a> >
                {{ $category->name }}{{ $subcat ? ' > ' . $subcat : '' }}{{ $bra ? ' > ' . $bra : '' }}</h1>
            <div class="flex items-center gap-3">
                <i class="fa-solid fa-border-all cursor-pointer {{ $view == 'grid' ? 'text-goldenrod' : 'text-platinum' }}"
                    wire:click="$set('view', 'grid')"></i>
                <i class="fa-solid fa-table-list cursor-pointer {{ $view == 'list' ? 'text-goldenrod' : 'text-platinum' }}"
                    wire:click="$set('view', 'list')"></i>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        <aside>
            <h2 class="font-semibold text-center mb-2">Subcategories</h2>
            <ul class="divide-y divide-deer">
                @foreach ($category->subcategories as $subcategory)
                    <li class="py-2 text-sm">
                        <a class="cursor-pointer hover:text-goldenrod capitalize {{ $subcat == $subcategory->slug ? 'text-deer font-bold' : '' }}"
                            wire:click="$set('subcat', '{{ $subcategory->slug }}')">{{ $subcategory->name }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <h2 class="font-semibold text-center mt-4 mb-2">Brands</h2>
            <ul class="divide-y divide-deer">
                @foreach ($category->brands as $brand)
                    <li class="py-2 text-sm">
                        <a class="cursor-pointer hover:text-goldenrod capitalize {{ $bra == $brand->name ? 'text-deer font-bold' : '' }}"
                            wire:click="$set('bra', '{{ $brand->name }}')">
                            {{ $brand->name }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <button wire:click="clean"
                class="btn border-none rounded-none uppercase w-full font-bold text-white bg-goldenrod hover:bg-deer focus:ring-4 focus:outline-none focus:ring-deer text-sm px-8 py-3 text-center inline-flex items-center justify-center mt-6 sm:mt-8">
                Reset Filters
            </button>

        </aside>
        <div class="md:col-span-2 lg:col-span-4">
            @if ($view == 'grid')
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3">
                    @forelse ($products as $product)
                        <div
                            class="bg-rifleGreen shadow transition-all ease-linear hover:shadow-lg hover:shadow-black/40">
                            <a href="{{route('products.show', $product)}}">
                                <img class="pb-4 h-60 w-full object-cover object-center" src="{{ Storage::url($product->images->first()->url) }}"
                                    alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="{{route('products.show', $product)}}">
                                    <h5 class="text-xl font-semibold tracking-tight font-saol text-platinum">
                                        {{ $product->name }}</h5>
                                </a>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <a href="{{ route('gender.show', $product->subcategory->category->gender) }}"
                                        class="bg-deer text-platinum text-xs font-semibold mr-2 px-2.5 py-0.5">{{ $product->subcategory->category->gender->name }}</a>

                                    <a href="{{ route('genderCategory.show', [$product->subcategory->category->gender, $product->subcategory->category]) }}"
                                        class="bg-deer text-platinum text-xs font-semibold px-2.5 py-0.5">{{ $product->subcategory->category->name }}</a>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-xl font-bold text-platinum">{{ '$' . $product->price }}</span>
                                    <a href="{{route('products.show', $product)}}"
                                        class="border-none rounded-none text-white bg-goldenrod hover:bg-deer focus:ring-4 focus:outline-none focus:ring-deer uppercase text-xs !px-4 !py-2 text-center font-semibold">More</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>Nothing here...</p>
                    @endforelse
                </div>
            @else
                <ul class="grid gap-3">
                    @forelse ($products as $product)
                        <li
                            class="bg-rifleGreen w-full shadow transition-all ease-linear hover:shadow-lg hover:shadow-black/40 flex">
                            <a href="{{route('products.show', $product)}}">
                                <img class="h-full w-40 object-cover object-center" src="{{ Storage::url($product->images->first()->url) }}"
                                    alt="product image" />
                            </a>
                            <div class="p-5 w-full">
                                <a href="{{route('products.show', $product)}}">
                                    <h5 class="text-xl font-semibold tracking-tight font-saol text-platinum">
                                        {{ $product->name }}</h5>
                                </a>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <a href="{{ route('gender.show', $product->subcategory->category->gender) }}"
                                        class="bg-deer text-platinum text-xs font-semibold mr-2 px-2.5 py-0.5">{{ $product->subcategory->category->gender->name }}</a>

                                    <a href="{{ route('genderCategory.show', [$product->subcategory->category->gender, $product->subcategory->category]) }}"
                                        class="bg-deer text-platinum text-xs font-semibold px-2.5 py-0.5">{{ $product->subcategory->category->name }}</a>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-xl font-bold text-platinum">{{ '$' . $product->price . ' USD' }}</span>
                                    <a href="{{route('products.show', $product)}}"
                                        class="border-none rounded-none text-white bg-goldenrod hover:bg-deer focus:ring-4 focus:outline-none focus:ring-deer uppercase text-sm px-5 py-2.5 text-center font-semibold">More</a>
                                </div>
                            </div>
                        </li>
                    @empty
                        <p>Nothing here...</p>
                    @endforelse
                </ul>
            @endif
            <div class="my-4">
                {{$products->links()}}
            </div>
        </div>
    </div>
</div>
