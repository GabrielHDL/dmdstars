<div class="container py-12">
    {{-- Formaliio crear --}}
    <x-form-section submit="save" class="mb-6">
        <x-slot name="title">
            Add new Brand
        </x-slot>

        <x-slot name="description">
            In this section you can add a new brand
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-label>
                    Name
                </x-label>

                <x-input type="text" wire:model="createForm.name" class="w-full" />
                <x-input-error for="createForm.name" />
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-button>
                Add
            </x-button>
        </x-slot>
    </x-form-section>

    {{-- Lista de marcas --}}
    <x-action-section>
        <x-slot name="title">
            Brand List
        </x-slot>

        <x-slot name="description">
            Here you will find all added brands
        </x-slot>

        <x-slot name="content">

            <table class="text-gray-600">
                <thead class="border-b border-gray-300">
                    <tr class="text-left">
                        <th class="py-2 w-full">Name</th>
                        <th class="py-2">Action</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-300">
                    @foreach ($brands as $brand)
                        <tr>
                            <td class="py-2">

                                <a class="uppercase">
                                    {{$brand->name}}
                                </a>
                            </td>
                            <td class="py-2">
                                <div class="flex divide-x divide-gray-300 font-semibold">
                                    <a class="pr-2 hover:text-blue-600 cursor-pointer" wire:click="edit('{{$brand->id}}')">Edit</a>
                                    <a class="pl-2 hover:text-red-600 cursor-pointer" wire:click="$emit('deleteBrand', '{{$brand->id}}')">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </x-slot>
    </x-action-section>

    {{-- Modal editar --}}
    <x-dialog-modal wire:model="editForm.open">
        <x-slot name="title">
            Edit Brand
        </x-slot>

        <x-slot name="content">
            <x-label>
                Name
            </x-label>
            <x-input wire:model="editForm.name" type="text" class="w-full" />
            <x-input-error for="editForm.name" />
        </x-slot>

        <x-slot name="footer">
            <x-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="update">
                Update
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>

    @push('scripts')
        <script>
            Livewire.on('deleteBrand', brandId => {
            
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin.brand-component', 'delete', brandId)

                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })

            });
        </script>
    @endpush
</div>