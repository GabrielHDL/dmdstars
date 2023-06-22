<x-admin-layout>
    <div class="container">
        @include('admin.partials.table', ['items' => $rejects])
    </div>
</x-admin-layout>