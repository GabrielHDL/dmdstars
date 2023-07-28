<x-guest-layout>
    <div class="h-screen">
        <div class="container h-full w-full flex flex-col justify-center items-center text-platinum">
            <div class="text-center">
                <h1 class="font-bold font-saol text-8xl mb-8">500</h1>
                <p class="font-proximaBold text-goldenrod">Sorry something went wrong...</p>
                <p class="mb-2">but it's not you it's us.</p>
                <div class="flex justify-center items-center">
                    <x-authentication-card-logo size="h-10" />
                </div>
                <a class="inline-flex mt-6 btn bg-goldenrod border-none rounded-none text-white hover:bg-deer" href="{{route('home')}}">Go Home</a>
            </div>
        </div>
    </div>
</x-guest-layout>