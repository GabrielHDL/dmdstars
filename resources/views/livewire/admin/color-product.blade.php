<div>
    <div class="my-12 bg-platinum shadow-lg p-6">


        {{-- Color --}}
        <div class="mb-6">
            <x-label>
                Color
            </x-label>

            <div class="grid grid-cols-6 gap-6">
                @foreach ($colors as $color)
                    <label>
                        <input class="text-goldenrod focus:border-deer focus:ring-deer" type="radio" name="color_id" wire:model.defer="color_id" value="{{ $color->id }}">
                        <span class="ml-2 text-gray-700 capitalize">
                            {{ __($color->name) }}
                        </span>
                    </label>
                @endforeach
            </div>

            <x-input-error for="color_id" />
        </div>

        {{-- Cantidad --}}
        <div>

            <x-label>
                Quantity
            </x-label>

            <x-input type="number" wire:model.defer="quantity" placeholder="Enter quantity" class="w-full text-deer" />

            <x-input-error for="quantity" />

        </div>

        <div class="flex justify-end items-center mt-4">

            <x-action-message class="mr-3" on="saved">
                Added
            </x-action-message>

            <x-button wire:loading.attr="disabled" wire:target="save" wire:click="save">
                Add
            </x-button>
        </div>

    </div>

    @if ($product_colors->count())
        
        <div class="bg-platinum text-rifleGreen shadow-lg p-6">
            <table>
                <thead>
                    <tr>
                        <th class="px-4 py-2 w-1/3">
                            Color
                        </th>

                        <th class="px-4 py-2 w-1/3">
                            Quantity
                        </th>
                        <th class="px-4 py-2 w-1/3"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($product_colors as $product_color)
                        <tr wire:key="product_color-{{ $product_color->pivot->id }}">
                            <td class="capitalize px-4 py-2">
                                {{ __($colors->find($product_color->pivot->color_id)->name) }}
                            </td>
                            <td class="px-4 py-2">
                                {{ $product_color->pivot->quantity }} units
                            </td>
                            <td class="px-4 py-2 flex">
                                <x-secondary-button class="ml-auto mr-2"
                                    wire:click="edit({{ $product_color->pivot->id }})" wire:loading.attr="disabled"
                                    wire:target="edit({{ $product_color->pivot->id }})">
                                    Update
                                </x-secondary-button>

                                <x-danger-button
                                    wire:click="$emit('deletePivot', {{ $product_color->pivot->id }})">
                                    Delete
                                </x-danger-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @endif

    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            Edit Colors
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-label>
                    Color
                </x-label>

                <select class="form-control w-full" wire:model="pivot_color_id">
                    <option value="">Select Color</option>
                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}">{{ ucfirst(__($color->name)) }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <x-label>
                    Quantity
                </x-label>
                <x-input class="w-full" wire:model="pivot_quantity" type="number"
                    placeholder="Ingrese una cantidad" />
            </div>
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