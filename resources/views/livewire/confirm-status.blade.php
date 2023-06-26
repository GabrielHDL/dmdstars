<form wire:submit.prevent="updateConfirm" method="POST" autocomplete="off" class="flex flex-col justify-center items-start">
    <label for="confirm">Confirm:
        <select wire:model="confirm" class="select select-bordered w-full max-w-xs text-rifleGreen">
            <option value="notyet">Pending</option>
            <option value="confirmed">Confirmed</option>
            <option value="rejected">Rejected</option>
        </select>
    </label>
    <button class="mt-3 bg-platinum text-rifleGreen btn btn-wide" wire:click="updateConfirm">Save</button>
    <span class="mt-3">
        Current: <span class="uppercase font-proximaBold">@if ($partner->confirm == 'notyet')
            Pending
        @else
            {{$partner->confirm}}
        @endif</span>
    </span>
</form>