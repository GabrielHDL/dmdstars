<div>
    <x-form-section submit="save" class="mb-6">
        <x-slot name="title">
            <p class="text-platinum font-saol font-bold">Create new Category</p>
        </x-slot>

        <x-slot name="description">
            <p class="text-goldenrod">Complete the necessary information to be able to create a new category</p>
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-label>
                    Gender
                </x-label>

                <select wire:model="createForm.gender" class="w-full mt-1 text-deer" name="Gender" id="">
                    <option selected disabled value="">Select Gender</option>
                    @foreach ($genders as $gender)
                        <option value="{{$gender->id}}">{{$gender->name}}</option>
                    @endforeach
                </select>

                <x-input-error for="createForm.gender" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-label>
                    Name
                </x-label>

                <x-input wire:model="createForm.name" type="text" class="w-full mt-1 text-deer" />

                <x-input-error for="createForm.name" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label>
                    Slug
                </x-label>

                <x-input disabled wire:model="createForm.slug" type="text" class="w-full mt-1 bg-gray-100 text-deer" />
                <x-input-error for="createForm.slug" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label>
                    Icon
                </x-label>

                <x-input wire:model.defer="createForm.icon" type="text" class="w-full mt-1 text-deer" />
                <x-input-error for="createForm.icon" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label>
                    Brands
                </x-label>

                <div class="grid grid-cols-4">
                    @foreach ($brands as $brand)
                        
                        <x-label>
                            <x-checkbox
                            wire:model.defer="createForm.brands"
                            name="brands[]"
                            value="{{$brand->id}}" />
                            {{$brand->name}}
                        </x-label>

                    @endforeach
                </div>
                <x-input-error for="createForm.brands" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label>
                    Image
                </x-label>

                <input wire:model="createForm.image" accept="image/*" type="file" class="mt-1" name="" id="{{$rand}}">
                <x-input-error for="createForm.image" />
            </div>
        </x-slot>


        <x-slot name="actions">

            <x-action-message class="mr-3" on="saved">
                Category Created
            </x-action-message>

            <x-button>
                Add
            </x-button>
        </x-slot>
    </x-form-section>

    <x-action-section>
        <x-slot name="title">
            <p class="text-platinum font-saol font-bold">Category List</p>
        </x-slot>

        <x-slot name="description">
            <p class="text-goldenrod">Here you will find all categories added</p>
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
                    @foreach ($categories as $category)
                        <tr>
                            <td class="py-2">
                                <span class="inline-block w-8 text-center mr-2">
                                    {!!$category->icon!!}
                                </span>

                                <a href="{{route('admin.categories.show', $category)}}" class="uppercase underline hover:text-deer">
                                    {{$category->name}}
                                </a>
                            </td>
                            <td class="py-2">
                                <div class="flex divide-x divide-gray-300 font-semibold">
                                    <a class="pr-2 hover:text-blue-600 cursor-pointer" wire:click="edit('{{$category->slug}}')">Edit</a>
                                    <a class="pl-2 hover:text-red-600 cursor-pointer" wire:click="$emit('deleteCategory', '{{$category->slug}}')">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </x-slot>
    </x-action-section>

    <x-dialog-modal wire:model="editForm.open">

        <x-slot name="title">
            Edit Category
        </x-slot>

        <x-slot name="content">

            <div class="space-y-3">

                <div>
                    @if ($editImage)
                        <img class="w-full h-64 object-cover object-center" src="{{$editImage->temporaryUrl()}}" alt="">
                    @else
                        <img class="w-full h-64 object-cover object-center" src="{{Storage::url($editForm['image'])}}" alt="">
                    @endif
                </div>

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
                    <x-label>
                        Icon
                    </x-label>

                    <x-input wire:model.defer="editForm.icon" type="text" class="w-full mt-1" />
                    <x-input-error for="editForm.icon" />
                </div>

                <div>
                    <x-label>
                        Brands
                    </x-label>

                    <div class="grid grid-cols-4">
                        @foreach ($brands as $brand)
                            
                            <x-label>
                                <x-checkbox
                                wire:model.defer="editForm.brands"
                                name="brands[]"
                                value="{{$brand->id}}" />
                                {{$brand->name}}
                            </x-label>

                        @endforeach
                    </div>
                    <x-input-error for="editForm.brands" />
                </div>

                <div>
                    <x-label>
                        Image
                    </x-label>

                    <input wire:model="editImage" accept="image/*" type="file" class="mt-1" name="" id="{{$rand}}">
                    <x-input-error for="editImage" />
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="editImage, update">
                Update
            </x-danger-button>
        </x-slot>

    </x-dialog-modal>
</div>