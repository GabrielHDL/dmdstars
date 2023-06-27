<form wire:submit.prevent="updateConfirm" method="POST" class="flex flex-col justify-center items-start">
    <label for="confirm">Confirm:</label>
        <select name="confirm" id="confirm" wire:model="confirm" class="select select-bordered w-full max-w-xs text-rifleGreen dark:text-platinum">
            <option value="notyet" @if ($partner->isActive == true)
                disabled
            @endif>Pending</option>
            <option value="confirmed">Confirmed</option>
            <option value="rejected">Rejected</option>
        </select>
        <span class="mt-3">
            Current: <span class="uppercase font-proximaBold">@if ($partner->confirm == 'notyet')
                Pending
            @else
                {{$partner->confirm}}
            @endif</span>
        </span>
    <button class="mt-3 bg-platinum text-rifleGreen btn btn-wide" wire:click="updateConfirm">Save</button>
</form>