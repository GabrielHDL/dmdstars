<x-admin-layout>
    <div class="container">
        <h1 class="font-saol font-bold text-3xl mb-4">Partners</h1>
        @include('admin.partials.table', ['items' => $partners])
    </div>
</x-admin-layout>