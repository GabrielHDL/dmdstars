<div class="p-4 fixed top-0 left-0 right-0 z-[999]">
    <div class="navbar bg-platinum rounded-lg shadow-lg container">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="text-rifleGreen btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-platinum text-rifleGreen rounded-box w-52">
                    <li><a href="{{route('admin.pendings')}}">Pendings</a></li>
                    <li><a href="{{route('admin.prospects')}}">Prospects</a></li>
                    <li><a href="{{route('admin.partners')}}">Partners</a></li>
                    <li><a href="{{route('admin.rejects')}}">Rejects</a></li>
                </ul>
            </div>
            <a href="{{route('admin.home')}}" class="flex text-rifleGreen items-center">
                <x-imagotipo color="text-rifleGreen" height="h-8" hover="hover:text-deer" /><span class="hidden sm:inline-block font-bold mb-[0.185rem] font-saol"> | Dashboard</span>
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal text-rifleGreen px-1">
                <li><a href="{{route('admin.pendings')}}">Pendings</a></li>
                <li><a href="{{route('admin.prospects')}}">Prospects</a></li>
                <li><a href="{{route('admin.partners')}}">Partners</a></li>
                <li><a href="{{route('admin.rejects')}}">Rejects</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="{{ Auth::user()->profile_photo_url }}" />
                    </div>
                </label>
                <ul tabindex="0" class="mt-3 p-2 bg-platinum shadow menu menu-compact text-rifleGreen dropdown-content rounded-box w-52">
                    <div class="block px-4 py-2 text-xs">
                        {{ Auth::user()->name }}
                    </div>
                    <li>
                        <a href="/">{{__('Go to Landing')}}</a>
                    </li>
                    <li>
                        <a href="{{route('profile.show')}}">Profile</a>
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