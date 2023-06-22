<x-admin-layout>
    <div class="container flex flex-col">
        <h1 class="text-2xl font-saol font-bold">{{$partner->name}}</h1>
        <a href="mailto:{{$partner->email}}">{{$partner->email}}</a>
        <a href="tel:{{$partner->phone}}">{{$partner->phone}}</a>
    </div>
</x-admin-layout>