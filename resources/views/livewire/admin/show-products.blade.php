<div class="text-platinum">

    <header name="header">
        <div class="container">
            <div class="flex items-center">
                <h2 class="font-semibold text-xl text-platinum leading-tight">
                    Product List
                </h2>
    
                <a class="ml-auto btn border-none rounded-none bg-goldenrod hover:bg-deer text-platinum" href="{{route('admin.products.create')}}">
                    Add product
                </a>
            </div>
        </div>
    </header>


    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="container py-12">

        <x-table-responsive>

            <div class="px-6 py-4 bg-platinum">

                <x-input type="text" 
                    wire:model="search" 
                    class="w-full text-deer"
                    placeholder="Enter the name of the product you want to search for" />

            </div>

            @if ($products->count())
                
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-platinum">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-deer uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-deer uppercase tracking-wider">
                                Gender
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-deer uppercase tracking-wider">
                                Category
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-deer uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-deer uppercase tracking-wider">
                                Price
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                        @foreach ($products as $product)

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            @if ($product->images->count())
                                                <img class="h-10 w-10 rounded-full object-cover"
                                                    src="{{ Storage::url($product->images->first()->url) }}" alt="">
                                            @else
                                                <img class="h-10 w-10 rounded-full object-cover"
                                                    src="https://images.pexels.com/photos/4883800/pexels-photo-4883800.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                                            @endif
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-rifleGreen">
                                                {{ $product->name }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">

                                    <div class="text-sm text-rifleGreen">
                                        {{ $product->subcategory->category->gender->name }}
                                    </div>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">

                                    <div class="text-sm text-rifleGreen">
                                        {{ $product->subcategory->category->name }}
                                    </div>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @switch($product->status)
                                        @case(1)
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 uppercase font-semibold rounded-full bg-red-100 text-red-800">
                                                Draft
                                            </span>
                                        @break
                                        @case(2)
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 uppercase font-semibold rounded-full bg-green-100 text-green-800">
                                                Posted
                                            </span>
                                        @break
                                        @default

                                    @endswitch

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-rifleGreen">
                                    {{$product->price}} USD
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('admin.products.edit', $product) }}" class="text-deer hover:text-goldenrod">Edit</a>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>

            @else
                <div class="px-6 py-4">
                    There is no matching record
                </div>
            @endif

            @if ($products->hasPages())
                
                <div class="px-6 py-4">
                    {{ $products->links() }}
                </div>
                
            @endif
                

        </x-table-responsive>
    </div>


</div>