<div class="bg-platinum text-deer shadow-xl p-6 mb-4">
    <p class="text-2xl text-center font-semibold mb-2">Product Status</p>

    <div class="flex">
        <label class="mr-6">
            <input class="text-goldenrod" wire:model.defer="status" type="radio" name="status" value="1">
            Mark product as draft
        </label>
        <label>
            <input class="text-goldenrod" wire:model.defer="status" type="radio" name="status" value="2">
            Mark product as published
        </label>
    </div>

    <div class="flex justify-end items-center">

        <x-action-message class="mr-3" on="saved">
            Updated
        </x-action-message>

        <x-button wire:click="save"
            wire:loading.attr="disabled"
            wire:target="save">
            Update
        </x-button>
    </div>
</div>