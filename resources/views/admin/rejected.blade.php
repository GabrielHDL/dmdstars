<x-admin-layout>
    <div class="container">
        <h1 class="font-saol font-bold text-3xl mb-4">Rejects</h1>
        @include('admin.partials.table', ['items' => $rejects])
    </div>
</x-admin-layout>