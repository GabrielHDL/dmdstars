<div class="text-rifleGreen">
    <div class="bg-platinum shadow-lg rounded-lg p-6 mt-12">
        <div>
            <x-label>
                Size
            </x-label>

            <x-input wire:model="name" type="text" placeholder="Enter a Size" class="w-full" />

            <x-input-error for="name" />
        </div>

        <div class="flex justify-end items-center mt-4">
            <x-button wire:click="save" wire:loading.attr="disabled" wire:target="save">
                Add
            </x-button>
        </div>
    </div>


    <ul class="mt-12 space-y-4">
        @foreach ($sizes as $size)
            <li class="bg-platinum shadow-lg rounded-lg p-6" wire:key="size-{{ $size->id }}">
                <div class="flex items-center">
                    <span class="text-xl font-medium">Size: {{ $size->name }}</span>

                    <div class="ml-auto">

                        <x-button wire:click="edit({{ $size->id }})" wire:loading.attr="disabled"
                            wire:target="edit({{ $size->id }})">
                            <i class="fas fa-edit"></i>
                        </x-button>

                        <x-danger-button wire:click="$emit('deleteSize', {{ $size->id }})">
                            <i class="fas fa-trash"></i>
                        </x-danger-button>

                    </div>
                </div>

                @livewire('admin.color-size', ['size' => $size], key('color-size-' . $size->id))
            </li>
        @endforeach
    </ul>


    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            Edit Size
        </x-slot>

        <x-slot name="content">
            <x-label>
                Size
            </x-label>

            <x-input wire:model="name_edit" type="text" class="w-full" />

            <x-input-error for="name_edit" />
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$set('open', false)">
                Cancel
            </x-secondary-button>

            <x-button wire:click="update" wire:loading.attr="disabled" wire:target="update">
                Update
            </x-button>
        </x-slot>
    </x-dialog-modal>

</div>