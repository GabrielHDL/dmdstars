<div class="container py-12">
    
    {{-- Formulario crear categoría --}}
    <x-form-section submit="save" class="mb-6">
        <x-slot name="title">
            <p class="title__admin">Create new Subcategory</p>
        </x-slot>

        <x-slot name="description">
            <p class="text-goldenrod">Complete the necessary information to be able to create a new subcategory</p>
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-label>
                    Name
                </x-label>

                <x-input class="!text-deer" wire:model="createForm.name" type="text" class="w-full mt-1 text-deer" />

                <x-input-error for="createForm.name" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label>
                    Slug
                </x-label>

                <x-input disabled wire:model="createForm.slug" type="text" class="w-full mt-1 bg-gray-100 text-deer" />
                <x-input-error for="createForm.slug" />
            </div>

            <div class="col-span-6 sm:col-span-4 text-rifleGreen">
                <div class="flex">
                    <p>Does this subcategory need us to specify color?</p>

                    <div class="ml-auto">
                        <label>
                            <input type="radio" class="text-goldenrod" value="1" name="color" wire:model.defer="createForm.color">
                            Yes
                        </label>
                        
                        <label class="ml-2">
                            <input type="radio" class="text-goldenrod" value="0" name="color" wire:model.defer="createForm.color">
                            No
                        </label>
                    </div>
                </div>

                <x-input-error for="createForm.color" />
            </div>

            <div class="col-span-6 sm:col-span-4 text-rifleGreen">
                <div class="flex">
                    <p>Does this subcategory need us to specify a size?</p>

                    <div class="ml-auto">
                        <label>
                            <input type="radio" class="text-goldenrod" value="1" name="size" wire:model.defer="createForm.size">
                            Yes
                        </label>
                        
                        <label class="ml-2">
                            <input type="radio" class="text-goldenrod" value="0" name="size" wire:model.defer="createForm.size">
                            No
                        </label>
                    </div>
                </div>

                <x-input-error for="createForm.size" />
            </div>

            
        </x-slot>


        <x-slot name="actions">

            <x-action-message class="mr-3" on="saved">
                Categoría subcategoría
            </x-action-message>

            <x-button>
                Agregar
            </x-button>
        </x-slot>
    </x-form-section>

    {{-- Lista de subcategorías --}}
    <x-action-section>
        <x-slot name="title">
            <p class="title__admin">Subcategories List</p>
        </x-slot>

        <x-slot name="description">
            <p class="text-goldenrod">Here you will find all added subcategories</p>
        </x-slot>

        <x-slot name="content">

            <table class="text-gray-600">
                <thead class="border-b border-gray-300">
                    <tr class="text-left">
                        <th class="py-2 w-full">Nombre</th>
                        <th class="py-2">Acción</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-300">
                    @foreach ($subcategories as $subcategory)
                        <tr>
                            <td class="py-2">

                                <p class="uppercase">
                                    {{$subcategory->name}}
                                </p>
                            </td>
                            <td class="py-2">
                                <div class="flex divide-x divide-gray-300 font-semibold">
                                    <a class="pr-2 hover:text-blue-600 cursor-pointer" wire:click="edit('{{$subcategory->id}}')">Editar</a>
                                    <a class="pl-2 hover:text-red-600 cursor-pointer" wire:click="$emit('deleteSubcategory', '{{$subcategory->id}}')">Eliminar</a>
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
            Edit Subcategory
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

                <div>
                    <x-label>
                        Slug
                    </x-label>

                    <x-input disabled wire:model="editForm.slug" type="text" class="w-full mt-1 bg-gray-100" />
                    <x-input-error for="editForm.slug" />
                </div>

                <div>
                    <div class="flex">
                        <p>Does this subcategory need us to specify color?</p>
    
                        <div class="ml-auto">
                            <label>
                                <input type="radio" value="1" name="color" wire:model.defer="editForm.color">
                                Yes
                            </label>
                            
                            <label class="ml-2">
                                <input type="radio" value="0" name="color" wire:model.defer="editForm.color">
                                No
                            </label>
                        </div>
                    </div>
    
                    <x-input-error for="createForm.color" />
                </div>
    
                <div>
                    <div class="flex">
                        <p>Does this subcategory need us to specify a size?</p>
    
                        <div class="ml-auto">
                            <label>
                                <input type="radio" value="1" name="size" wire:model.defer="editForm.size">
                                Si
                            </label>
                            
                            <label class="ml-2">
                                <input type="radio" value="0" name="size" wire:model.defer="editForm.size">
                                No
                            </label>
                        </div>
                    </div>
    
                    <x-input-error for="createForm.size" />
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
            Livewire.on('deleteSubcategory', subcategoryId => {
            
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

                        Livewire.emitTo('admin.show-category', 'delete', subcategoryId)

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