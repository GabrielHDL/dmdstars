<x-admin-layout>

    <div class="container py-12">

        <section class="grid grid-cols-4 gap-6 text-white">
           
            <a href="{{ route('admin.orders.index') . "?status=2" }}" class="bg-goldenrod hover:bg-deer bg-opacity-75 px-12 pt-8 pb-4">
                <p class="text-center text-2xl">
                    {{$recibido}}
                </p>
                <p class="uppercase text-center">Placed</p>
                <p class="text-center text-2xl mt-2">
                    <i class="fas fa-credit-card"></i>
                </p>
            </a>

            <a href="{{ route('admin.orders.index') . "?status=3" }}" class="bg-goldenrod hover:bg-deer bg-opacity-75 px-12 pt-8 pb-4">
                <p class="text-center text-2xl">
                    {{$enviado}}
                </p>
                <p class="uppercase text-center">Shipped</p>
                <p class="text-center text-2xl mt-2">
                    <i class="fas fa-truck"></i>
                </p>
            </a>

            <a href="{{ route('admin.orders.index') . "?status=4" }}" class="bg-goldenrod hover:bg-deer bg-opacity-75 px-12 pt-8 pb-4">
                <p class="text-center text-2xl">
                    {{$entregado}}
                </p>
                <p class="uppercase text-center">Delivered</p>
                <p class="text-center text-2xl mt-2">
                    <i class="fas fa-check-circle"></i>
                </p>
            </a>

            <a href="{{ route('admin.orders.index') . "?status=5" }}" class="bg-goldenrod hover:bg-deer bg-opacity-75 px-12 pt-8 pb-4">
                <p class="text-center text-2xl">
                    {{$anulado}}
                </p>
                <p class="uppercase text-center">Nulled</p>
                <p class="text-center text-2xl mt-2">
                    <i class="fas fa-times-circle"></i>
                </p>
            </a>
        </section>

        @if ($orders->count())
        
            <section class="bg-platinum shadow-lg px-12 py-8 mt-12 text-rifleGreen">
                <h1 class="text-2xl mb-4">Recent Orders</h1>

                <ul>
                    @foreach ($orders as $order)
                        <li>
                            <a href="{{route('admin.orders.show', $order)}}" class="flex items-center py-2 px-4 hover:bg-gray-100">
                                <span class="w-12 text-center">
                                    @switch($order->status)
                                        @case(1)
                                            <i class="fas fa-business-time text-deer opacity-50"></i>
                                            @break
                                        @case(2)
                                            <i class="fas fa-credit-card text-deer opacity-50"></i>
                                            @break
                                        @case(3)
                                            <i class="fas fa-truck text-deer opacity-50"></i>
                                            @break
                                        @case(4)
                                            <i class="fas fa-check-circle text-deer opacity-50"></i>
                                            @break
                                        @case(5)
                                            <i class="fas fa-times-circle text-deer opacity-50"></i>
                                            @break
                                        @default
                                            
                                    @endswitch
                                </span>

                                <span>
                                    Order: {{$order->id}}
                                    <br>
                                    {{$order->created_at->format('d/m/Y')}}
                                </span>


                                <div class="ml-auto">
                                    <span class="font-bold">
                                        @switch($order->status)
                                            @case(1)
                                                
                                                Pending

                                                @break
                                            @case(2)
                                                
                                                Placed

                                                @break
                                            @case(3)
                                                
                                                Shipped

                                                @break
                                            @case(4)
                                                
                                                Delivered

                                                @break
                                            @case(5)
                                                
                                                Nulled

                                                @break
                                            @default
                                                
                                        @endswitch
                                    </span>

                                    <br>

                                    <span class="text-sm">
                                        {{$order->total}} USD
                                    </span>
                                </div>

                                <span>
                                    <i class="fas fa-angle-right ml-6"></i>
                                </span>

                            </a>
                        </li>
                    @endforeach
                </ul>
            </section>

        @else
            <div class="bg-platinum shadow-lg px-12 py-8 mt-12 text-rifleGreen">
                <span class="font-bold text-lg">
                    There are no order records
                </span>
            </div>
        @endif

    </div>

</x-admin-layout>