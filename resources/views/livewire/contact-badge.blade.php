<div>
    @switch($partner)
        @case('Prospect')
            <div class="bg-blue-500 text-blue-800 rounded-full py-1 px-6 my-3 inline-block font-proximaBold">
                {{$partner}}
            </div>
            @break
        @case('Pending')
            <div class="bg-amber-500 text-amber-800 rounded-full py-1 px-6 my-3 inline-block font-proximaBold">
                {{$partner}}
            </div>
            @break
        @case('Partner')
            <div class="bg-green-500 text-green-800 rounded-full py-1 px-6 my-3 inline-block font-proximaBold">
                {{$partner}}
            </div>
            @break
        @case('Rejected')
            <div class="bg-red-500 text-red-800 rounded-full py-1 px-6 my-3 inline-block font-proximaBold">
                {{$partner}}
            </div>
            @break
        @default
            
    @endswitch
</div>
