<div class="p-4 fixed top-0 left-0 right-0 z-[999]">
    <div class="navbar bg-platinum shadow-lg container">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="text-rifleGreen btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <div tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-platinum text-rifleGreen rounded-box w-52">
                    @if (Request::routeIs('admin.landing*'))
                    <x-nav-link href="{{ route('admin.index') }}">Shop Dashboard</x-nav-link>
                    <x-nav-link class="my-1" href="{{ route('admin.landing-pendings') }}" :active="request()->routeIs('admin.landing-pendings')">Pendings</x-nav-link>
                    <x-nav-link class="my-1" href="{{ route('admin.landing-prospects') }}" :active="request()->routeIs('admin.landing-prospects')">Prospects</x-nav-link>
                    <x-nav-link class="my-1" href="{{ route('admin.landing-partners') }}" :active="request()->routeIs('admin.landing-partners')">Partners</x-nav-link>
                    <x-nav-link class="my-1" href="{{ route('admin.landing-rejects') }}" :active="request()->routeIs('admin.landing-rejects')">Rejects</x-nav-link>
                    @else
                        <x-nav-link href="{{ route('admin.landing') }}">Landing Dashboard</x-nav-link>

                        <x-nav-link href="{{route('admin.index')}}" :active="request()->routeIs('admin.index')">
                            Products
                        </x-nav-link>
    
                        <x-nav-link class="relative" href="{{route('admin.orders.index')}}" :active="request()->routeIs('admin.orders.*')">
                            Orders
                            @if ($pendings->count())
                                <span class="bg-goldenrod text-white px-1 rounded-full flex items-center justify-center ml-1 absolute mb-2 -right-3 text-xs">{{$pendings->count()}}</span>
                            @endif
                        </x-nav-link>
    
                        <x-nav-link href="{{route('admin.categories.index')}}" :active="request()->routeIs('admin.categories.*')">
                            Categories
                        </x-nav-link>
    
                        <x-nav-link href="{{route('admin.brands.index')}}" :active="request()->routeIs('admin.brands.*')">
                            Brands
                        </x-nav-link>
    
                        <x-nav-link href="{{route('admin.departments.index')}}" :active="request()->routeIs('admin.departments.index')">
                            Departments
                        </x-nav-link>
    
                        <x-nav-link href="{{route('admin.users.index')}}" :active="request()->routeIs('admin.users.index')">
                            Users
                        </x-nav-link>
                    @endif
                </div>
            </div>
            <a href="{{ route('admin.index') }}" class="flex text-rifleGreen items-center">
                <x-imagotipo color="text-rifleGreen" height="h-8" hover="hover:text-deer" /><span
                    class="hidden sm:inline-block font-bold mb-[0.185rem] font-saol"> | Dashboard</span>
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <div class="flex gap-3 text-rifleGreen px-1">
                @if (Request::routeIs('admin.landing*'))
                    <x-nav-link href="{{ route('admin.index') }}">Shop Dashboard</x-nav-link>
                    <x-nav-link href="{{ route('admin.landing-pendings') }}" :active="request()->routeIs('admin.landing-pendings')">Pendings</x-nav-link>
                    <x-nav-link href="{{ route('admin.landing-prospects') }}" :active="request()->routeIs('admin.landing-prospects')">Prospects</x-nav-link>
                    <x-nav-link href="{{ route('admin.landing-partners') }}" :active="request()->routeIs('admin.landing-partners')">Partners</x-nav-link>
                    <x-nav-link href="{{ route('admin.landing-rejects') }}" :active="request()->routeIs('admin.landing-rejects')">Rejects</x-nav-link>
                @else
                    <x-nav-link href="{{ route('admin.landing') }}">Landing Dashboard</x-nav-link>
                    <x-nav-link href="{{route('admin.index')}}" :active="request()->routeIs('admin.index')">
                        Products
                    </x-nav-link>

                    <x-nav-link class="relative" href="{{route('admin.orders.index')}}" :active="request()->routeIs('admin.orders.*')">
                        Orders
                        @if ($pendings->count())
                            <span class="bg-goldenrod text-white px-1 rounded-full flex items-center justify-center ml-1 absolute mb-2 -right-3 text-xs">{{$pendings->count()}}</span>
                        @endif
                    </x-nav-link>

                    <x-nav-link href="{{route('admin.categories.index')}}" :active="request()->routeIs('admin.categories.*')">
                        Categories
                    </x-nav-link>

                    <x-nav-link href="{{route('admin.brands.index')}}" :active="request()->routeIs('admin.brands.*')">
                        Brands
                    </x-nav-link>

                    <x-nav-link href="{{route('admin.departments.index')}}" :active="request()->routeIs('admin.departments.index')">
                        Departments
                    </x-nav-link>

                    <x-nav-link href="{{route('admin.users.index')}}" :active="request()->routeIs('admin.users.index')">
                        Users
                    </x-nav-link>
                @endif
            </div>
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="{{ Auth::user()->profile_photo_url }}" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 p-2 bg-platinum shadow menu menu-compact text-rifleGreen dropdown-content rounded-box w-52">
                    <div class="block px-4 py-2 text-xs">
                        {{ Auth::user()->name }}
                    </div>
                    <li>
                        <a href="/">{{ __('Go to Landing') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('profile.show') }}">Profile</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" class="mb-0" x-data>
                            @csrf
                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
