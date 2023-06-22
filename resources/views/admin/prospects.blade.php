<x-admin-layout>
    <div class="container">
        <h1 class="font-saol font-bold text-3xl mb-4">Prospects</h1>
        @include('admin.partials.table', ['items' => $prospects])
    </div>
</x-admin-layout>