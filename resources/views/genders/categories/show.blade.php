<x-app-layout>
    <div class="h-96 bg-cover bg-center mb-8" style="background-image: url({{ Storage::url($category->image) }});">
        <div class="container h-full w-full flex justify-center items-center">
            <span class="text-platinum font-bold font-saol text-5xl">{{$category->name}}</span>
        </div>
    </div>
    <div class="container">
        @livewire('category-filter', ['category' => $category])
    </div>
</x-app-layout>