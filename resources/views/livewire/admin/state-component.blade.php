<div class="container py-12">
    {{-- Agregar departamento --}}
    <x-form-section submit="save" class="mb-6">

        <x-slot name="title">
            <p class="title__admin">Add a new state</p>
        </x-slot>

        <x-slot name="description">
            <p class="text-goldenrod">Complete the necessary information to be able to add a new state</p>
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-label>
                    Name
                </x-label>

                <x-input wire:model.defer="createForm.name" type="text" class="w-full mt-1" />

                <x-input-error for="createForm.name" />
            </div>
        </x-slot>

        <x-slot name="actions">

            <x-action-message class="mr-3" on="saved">
                State Added
            </x-action-message>

            <x-button>
                Add
            </x-button>
        </x-slot>
    </x-form-section>

    {{-- Mostrar Departamentos --}}
    <x-action-section>
        <x-slot name="title">
            <p class="title__admin">State List</p>
        </x-slot>

        <x-slot name="description">
            <p class="text-goldenrod">Here you will find all the added states</p>
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
                    @foreach ($states as $state)
                        <tr>
                            <td class="py-2">

                                <a href="{{route('admin.states.show', $state)}}" class="uppercase underline hover:text-blue-600">
                                    {{$state->name}}
                                </a>
                            </td>
                            <td class="py-2">
                                <div class="flex divide-x divide-gray-300 font-semibold">
                                    <a class="pr-2 hover:text-blue-600 cursor-pointer" wire:click="edit({{$state}})">Edit</a>
                                    <a class="pl-2 hover:text-red-600 cursor-pointer" wire:click="$emit('deleteState', {{$state->id}})">Delete</a>
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
            Edit State
        </x-slot>

        <x-slot name="content">

            <div class="space-y-3">
               
                <div>
                    <x-label>
                        Name
                    </x-label>

                    <x-input wire:model="editForm.name" type="text" class="w-full mt-1" />

                    <x-input-error for="editForm.name" />
                </div>

             
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="update">
                Update
            </x-danger-button>
        </x-slot>

    </x-dialog-modal>

    @push('scripts')
        <script>
            Livewire.on('deleteState', stateId => {
            
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

                        Livewire.emitTo('admin.department-component', 'delete', stateId)

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