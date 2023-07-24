<x-admin-layout>
    <div class="container">
        <div>
            <span class="font-bold font-saol text-3xl">Hello, {{Auth::user()->name}}</span>
            <p class="mt-6 text-xl font-bold">Welcome to your Dashboard</p>
            <p class="">This area is only meant for managing your prospects and partners.</p>
        </div>
        <div class="mt-6">
            <span class="inline-block mb-6 font-saol text-2xl font-bold">Summary</span>
            <div class="sm:px-8 grid sm:grid-cols-2 md:grid-cols-4 gap-4">

                <a href="{{route('admin.landing-pendings')}}">
                    <div class="bg-amber-800 py-4 px-10 rounded-lg shadow-lg text-lg font-proximaBold text-white hover:shadow-black/50 transition-all ease-in-out flex">
                        Pendings <span class="text-white text-xl ml-auto">{{$pending->count()}}</span>
                    </div>
                </a>
                
                <a href="{{route('admin.landing-prospects')}}">
                    <div class="bg-deer py-4 px-10 rounded-lg shadow-lg text-lg font-proximaBold text-white hover:shadow-black/50 transition-all ease-in-out flex">
                        Prospects <span class="text-white text-xl ml-auto">{{$prospects->count()}}</span>
                    </div>
                </a>

                <a href="{{route('admin.landing-partners')}}">
                    <div class="bg-green-800 py-4 px-10 rounded-lg shadow-lg text-lg font-proximaBold text-white hover:shadow-black/50 transition-all ease-in-out flex">
                        Partners <span class="text-white text-xl ml-auto">{{$partners->count()}}</span>
                    </div>
                </a>

                <a href="{{route('admin.landing-rejects')}}">
                    <div class="bg-red-700 py-4 px-10 rounded-lg shadow-lg text-lg font-proximaBold text-white hover:shadow-black/50 transition-all ease-in-out flex">
                        Rejects <span class="text-white text-xl ml-auto">{{$rejected->count()}}</span>
                    </div>
                </a>

            </div>
        </div>
    </div>
</x-admin-layout>