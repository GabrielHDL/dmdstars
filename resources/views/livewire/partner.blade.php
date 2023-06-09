<form class="flex justify-center h-full flex-col" wire:submit.prevent="submitForm" method="POST">

    @csrf

    <input wire:model="name" name="name" type="text"
    class="w-full
    text-rifleGreen
    font-saol
    font-bold
    bg-platinum
    border-rifleGreen
    border-4
    border-x-0
    border-t-0
    border-solid
    focus:outline-none
    focus:border-goldenrod
    focus:ring-0
    placeholder-goldenrod
    mb-4"
    placeholder="Name" />

    @error('name')
    <div class="flex items-center py-0 px-2 border-2 border-deer border-x-0 border-t-0 mb-4">
        <div class="flex items-center text-deer">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
            <span class="ml-3 font-bold">{{$message}}</span>
        </div>
    </div>
    @enderror

    <input wire:model="email" name="email" type="text"
    class="w-full
    text-rifleGreen
    font-saol
    font-bold
    bg-platinum
    border-rifleGreen
    border-4
    border-x-0
    border-t-0
    border-solid
    focus:outline-none
    focus:border-goldenrod
    focus:ring-0
    placeholder-goldenrod
    mb-4"
    placeholder="Email" />

    @error('email')
    <div class="flex items-center py-0 px-2 border-2 border-deer border-x-0 border-t-0 mb-4">
        <div class="flex items-center text-deer">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
            <span class="ml-3 font-bold">{{$message}}</span>
        </div>
    </div>
    @enderror

    <input wire:model="phone" name="phone" type="text"
    class="w-full
    text-rifleGreen
    font-saol
    font-bold
    bg-platinum
    border-rifleGreen
    border-4
    border-x-0
    border-t-0
    border-solid
    focus:outline-none
    focus:border-goldenrod
    focus:ring-0
    placeholder-goldenrod
    mb-4"
    placeholder="Phone" />

    @error('phone')
    <div class="flex items-center py-0 px-2 border-2 border-deer border-x-0 border-t-0 mb-4">
        <div class="flex items-center text-deer">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
            <span class="ml-3 font-bold">{{$message}}</span>
        </div>
    </div>
    @enderror

    <div class="flex justify-end items-center">
        <input wire:loading.attr="disabled" wire:target="submitForm" class="disabled:opacity-40 disabled:cursor-wait uppercase font-bold text-white bg-goldenrod hover:bg-deer focus:ring-4 focus:outline-none focus:ring-deer text-sm px-8 py-3 text-center inline-flex items-center cursor-pointer" type="submit" value="Submit">
    </div>

    @if ($successMessage)
    <div class="flex items-center py-0 px-2 border-2 border-rifleGreen border-x-0 border-t-0 mt-4">
        <div class="flex items-center text-rifleGreen">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span class="ml-3 font-bold">{{$successMessage}}</span>
        </div>
    </div>
    @elseif ($errorMessage)
    <div class="flex items-center py-0 px-2 border-2 border-deer border-x-0 border-t-0 mt-4">
        <div class="flex items-center text-deer">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
            <span class="ml-3 font-bold">{{$errorMessage}}</span>
        </div>
    </div>
    @endif
</form>