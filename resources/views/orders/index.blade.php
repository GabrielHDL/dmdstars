<x-app-layout>

    <div class="container py-12">

        <section class="grid grid-cols-5 gap-6 text-white">
            <a href="{{ route('orders.index') . "?status=1" }}" class="shadow hover:shadow-lg transition-all ease-linear bg-deer bg-opacity-75 hover:bg-goldenrod px-12 pt-8 pb-4">
                <p class="text-center text-2xl">
                    {{$pending}}
                </p>
                <p class="uppercase text-center">Pending</p>
                <p class="text-center text-2xl mt-2">
                    <i class="fas fa-business-time"></i>
                </p>
            </a>

            <a href="{{ route('orders.index') . "?status=2" }}" class="shadow hover:shadow-lg transition-all ease-linear bg-deer bg-opacity-75 hover:bg-goldenrod px-12 pt-8 pb-4">
                <p class="text-center text-2xl">
                    {{$placed}}
                </p>
                <p class="uppercase text-center">Placed</p>
                <p class="text-center text-2xl mt-2">
                    <i class="fas fa-credit-card"></i>
                </p>
            </a>

            <a href="{{ route('orders.index') . "?status=3" }}" class="shadow hover:shadow-lg transition-all ease-linear bg-deer bg-opacity-75 hover:bg-goldenrod px-12 pt-8 pb-4">
                <p class="text-center text-2xl">
                    {{$shipped}}
                </p>
                <p class="uppercase text-center">Shipped</p>
                <p class="text-center text-2xl mt-2">
                    <i class="fas fa-truck"></i>
                </p>
            </a>

            <a href="{{ route('orders.index') . "?status=4" }}" class="shadow hover:shadow-lg transition-all ease-linear bg-deer bg-opacity-75 hover:bg-goldenrod px-12 pt-8 pb-4">
                <p class="text-center text-2xl">
                    {{$delivered}}
                </p>
                <p class="uppercase text-center">Delivered</p>
                <p class="text-center text-2xl mt-2">
                    <i class="fas fa-check-circle"></i>
                </p>
            </a>

            <a href="{{ route('orders.index') . "?status=5" }}" class="shadow hover:shadow-lg transition-all ease-linear bg-deer bg-opacity-75 hover:bg-goldenrod px-12 pt-8 pb-4">
                <p class="text-center text-2xl">
                    {{$nulled}}
                </p>
                <p class="uppercase text-center">Nulled</p>
                <p class="text-center text-2xl mt-2">
                    <i class="fas fa-times-circle"></i>
                </p>
            </a>
        </section>

        @if ($orders->count())
            
        
            <section class="bg-rifleGreen shadow pb-8 mt-12 text-platinum">
                <div class="px-12 bg-slate-900/20 h-full w-full pt-8 pb-2 border-b border-deer">
                    <h1 class="text-2xl mb-4 font-saol font-bold">Recent Orders</h1>
                </div>

                <div class="px-12 pt-4">
                    <ul>
                        @foreach ($orders as $order)
                            <li>
                                <a href="{{route('orders.show', $order)}}" class="flex items-center py-2 px-4 hover:bg-slate-900/30">
                                    <span class="w-12 text-center">
                                        @switch($order->status)
                                            @case(1)
                                                <i class="fas fa-business-time"></i>
                                                @break
                                            @case(2)
                                                <i class="fas fa-credit-card"></i>
                                                @break
                                            @case(3)
                                                <i class="fas fa-truck"></i>
                                                @break
                                            @case(4)
                                                <i class="fas fa-check-circle"></i>
                                                @break
                                            @case(5)
                                                <i class="fas fa-times-circle"></i>
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
                </div>
            </section>

        @else
        <div class="bg-rifleGreen shadow px-12 py-8 mt-12 text-platinum">
            <span class="font-bold text-lg">
                No orders records...
            </span>
        </div>
        @endif

    </div>

</x-app-layout>