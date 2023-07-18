<x-app-layout>
    <div class="hero h-[73vh] mb-16 shadow-md"
        style="background-image: url({{ asset('assets/img/shop_hero.jpeg') }});">
        <div class="hero-overlay bg-opacity-30 bg-deer mix-blend-multiply"></div>
        <div class="hero-content text-center">
            <div class="max-w-2xl">
                <h1 class="mb-5 text-5xl font-bold font-saol text-platinum">Leather Fashion at its Finest</h1>
                <p class="mb-5 text-platinum">Experience the allure of DMD STARS, where exquisite leather garments and
                    accessories are meticulously crafted by hand using 100% Mexican materials. Each piece is a
                    one-of-a-kind masterpiece, showcasing distinct characteristics that set it apart.</p>
                <button
                    class="btn btn-primary text-platinum bg-rifleGreen border-0 hover:bg-platinum hover:text-rifleGreen rounded-none">Go
                    Shop</button>
            </div>
        </div>
    </div>
    <div class="container pb-10">
        <div class="mb-10">
            <h2 class="text-rifleGreen font-saol text-3xl font-bold text-center">Leather goods that redefine simple
                everyday luxury</h2>
            <p class="text-center mt-3 text-deer">With a Mexican touch.</p>
        </div>
        @foreach ($genders as $gender)
            <div>
                <a href="{{route('gender.show', $gender)}}"
                    class="text-rifleGreen font-saol text-2xl font-bold block mb-6 @if ($loop->last) mt-6 @endif">{{ $gender->name }}</a>
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach ($gender->categories as $category)
                        <a href="{{route('genderCategory.show', [$category->gender, $category])}}"
                            class="bg-rifleGreen text-platinum hover:text-white hover:shadow-lg hover:shadow-black/40 transition-all ease-linear image-full">
                            <figure><img src="{{ Storage::url($category->image) }}" alt="Shoes" /></figure>
                            <div class="card-body">
                                <h2 class="card-title">{{ $category->name }}</h2>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <div class="hero h-96 shadow-md" style="background-image: url({{ asset('assets/img/latest.jpg') }});">
        <div class="hero-overlay bg-opacity-50 bg-rifleGreen mix-blend-multiply"></div>
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h2 class="mb-5 text-5xl font-bold font-saol text-platinum">Latest 8 Products</h2>
                <p class="text-platinum">Our last creations.</p>
            </div>
        </div>
    </div>

    <div class="container mt-10">
        @livewire('show-controller', ['items' => $latestProducts])
    </div>
</x-app-layout>
