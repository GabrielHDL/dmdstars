<div class="flex flex-col gap-2 justify-center items-start my-5">
    <span>Contacted?</span>
    <label class="relative inline-flex items-center cursor-pointer">
        <input type="checkbox" wire:model.lazy="isActive" class="sr-only peer" @if($isActive) checked @endif>
        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-success rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-success"></div>
    </label>
    <span class="text-sm font-medium text-white">@if($isActive) Contacted @else Pending @endif</span>
</div>