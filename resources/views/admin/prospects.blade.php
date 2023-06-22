<x-admin-layout>
    <div class="container">
        @include('admin.partials.table', ['items' => $prospects])
    </div>
</x-admin-layout>