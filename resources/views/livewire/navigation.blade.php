<div class="bg-rifleGreen sticky top-0 left-0 right-0 z-[999] shadow-md">
    <div class="navbar container">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost hover:bg-deer/30 btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-platinum" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </label>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 bg-rifleGreen text-white hover:text-platinum shadow rounded-box w-52">
                    @foreach ($genders as $gender)
                        <li><a class="text-platinum hover:text-gray-100" href="{{ route('gender.show', $gender) }}">{{ $gender->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <a id="logo" class="text-platinum" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 328.23 79.06"
                    class="h-8 sm:h-10 w-auto fill-current" fill="none">
                    <g id="objects">
                        <path
                            d="M31.18,20.18H15.94V58.83h15.3c12.05,0,20.45-7.65,20.45-19.36S43.29,20.18,31.18,20.18Zm0,31.4h-7V27.42h7.07c7.88,0,12.05,5.28,12.05,12C43.29,46.08,38.83,51.58,31.18,51.58Z" />
                        <path
                            d="M87.84,20.18,78.46,44.34,69.07,20.18H57.54V58.83h8.23V31L76.66,58.83h3.59L91.15,31V58.83h8.28V20.18Z" />
                        <path
                            d="M122.32,20.18H107.08V58.83h15.3c12.05,0,20.45-7.65,20.45-19.36S134.43,20.18,122.32,20.18Zm0,31.4h-7V27.42h7.07c7.88,0,12.05,5.28,12.05,12C134.43,46.08,130,51.58,122.32,51.58Z" />
                        <path
                            d="M153.26,30c0-3.65,3.36-6.14,7.94-6.14a14.59,14.59,0,0,1,11.18,4.63l2.9-3.53c-3.25-3.42-7.83-5.45-13.68-5.45-7.65,0-13.32,4.41-13.32,10.78,0,13.79,22.88,8.23,22.88,18.19,0,3-2.2,6.72-9.09,6.72A15.92,15.92,0,0,1,150,49.67l-2.9,3.71c3.19,3.59,8.17,6.14,14.83,6.14,10.43,0,14.25-5.79,14.25-11.36C176.14,33.74,153.26,38.72,153.26,30Z" />
                        <path d="M180.32,20.18v4.29h12.22V58.83h4.81V24.47h12.29V20.18Z" />
                        <path d="M229.68,20.18h-6L208.13,58.83h5.27l13.27-33.72,13.38,33.72h5.16Z" />
                        <path
                            d="M267.86,43.07C273.14,42.6,278,38.78,278,31.83c0-7.13-5.1-11.65-12.17-11.65H250.25V58.83h4.81V43.47h7.76l9.8,15.36h5.67Zm-12.8-3.83V24.47H265.2c4.58,0,7.76,3,7.76,7.36s-3.18,7.41-7.76,7.41Z" />
                        <path
                            d="M289.42,30c0-3.65,3.36-6.14,7.94-6.14a14.59,14.59,0,0,1,11.18,4.63l2.9-3.53c-3.25-3.42-7.83-5.45-13.68-5.45-7.65,0-13.32,4.41-13.32,10.78,0,13.79,22.88,8.23,22.88,18.19,0,3-2.2,6.72-9.09,6.72a15.92,15.92,0,0,1-12.11-5.56l-2.9,3.71c3.19,3.59,8.17,6.14,14.83,6.14,10.43,0,14.25-5.79,14.25-11.36C312.3,33.74,289.42,38.72,289.42,30Z" />
                    </g>
                </svg>
            </a>
        </div>
        {{-- <div class="navbar-center">
            
        </div> --}}
        <div class="navbar-end">
            @livewire('search')
            @livewire('dropdown-cart')
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost hover:bg-deer/30 btn-circle avatar">
                    <div class="w-8 rounded-full">
                        @auth
                            <img src="{{ Auth::user()->profile_photo_url }}" />
                        @else
                            <div class="h-full flex justify-center items-center text-base w-full bg-rifleGreen/70">
                                <i class="text-platinum fa-solid fa-user"></i>
                            </div>
                        @endauth
                    </div>
                </label>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 bg-rifleGreen text-white hover:text-platinum shadow rounded-box w-52">
                    @auth
                        <span class="ml-3 mt-2 text-goldenrod">{{ Auth::user()->name }}</span>

                        @role('admin')
                            <li>
                                <a class="text-platinum hover:text-gray-100" href="{{ route('admin.index') }}">Admin Dashboard</a>
                            </li>
                        @endrole
                        <li>
                            <a class="text-platinum hover:text-gray-100" href="{{ route('profile.show') }}">Profile
                                {{-- <span class="badge bg-goldenrod text-white border-0">New</span> --}}
                            </a>
                        </li>
                        <li>
                            <a class="justify-between text-platinum hover:text-gray-100" href="{{ route('orders.index') }}">My Orders
                                @if ($pending)
                                    <span class="badge bg-goldenrod text-white border-0">{{ $pending }}</span>
                                @endif
                            </a>
                        </li>
                        <li>
                            <a class="text-platinum hover:text-gray-100" href="{{ route('billings.index') }}">Billing</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="mb-0" x-data>
                                @csrf
                                <a class="text-deer" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    @else
                        <li><a class="text-platinum hover:text-gray-100" href="{{ route('register') }}">Register</a></li>
                        <li><a class="text-platinum hover:text-gray-100" href="{{ route('login') }}">Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</div>
