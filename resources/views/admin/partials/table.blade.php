<div class="overflow-x-auto">
    <table class="table">
        <!-- head -->
        <thead class="text-platinum">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Contacted</th>
                <th>Confirm</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
            <tr class="hover:bg-platinum hover:text-rifleGreen">
                <th><a href="{{route('admin.landing-contact.show', $item)}}">{{$item->id}}</a></th>
                <td><a href="{{route('admin.landing-contact.show', $item)}}">{{$item->name}}</a></td>
                <td><a href="{{route('admin.landing-contact.show', $item)}}">{{$item->email}}</a></td>
                <td><a href="{{route('admin.landing-contact.show', $item)}}"">{{$item->phone}}</a></td>
                @if ($item->isActive == false)
                    <td><a href="{{route('admin.landing-contact.show', $item)}}"><span class="bg-amber-500 text-amber-700 rounded-full py-1 px-4">item</span></a></td>
                @else
                    <td><a href="{{route('admin.landing-contact.show', $item)}}"><span class="bg-blue-500 text-blue-700 rounded-full py-1 px-4">Contacted</span></a></td>
                @endif

                    @switch($item->confirm)
                        @case('notyet')
                            <td><a href="{{route('admin.landing-contact.show', $item)}}"><span class="bg-amber-500 text-amber-700 rounded-full py-1 px-4">Pending</span></a></td>
                        @break

                        @case('confirmed')
                            <td><a href="{{route('admin.landing-contact.show', $item)}}"><span class="bg-green-500 text-green-700 rounded-full py-1 px-4">Confirmed</span></a></td>
                        @break

                        @case('rejected')
                            <td><a href="{{route('admin.landing-contact.show', $item)}}"><span class="bg-red-500 text-red-700 rounded-full py-1 px-4">Rejected</span></a></td>
                        @break

                        @default
                    @endswitch
                </tr>
                @empty
                    <tr>
                        <th class="text-lg text-center" colspan="4">Nothing here yet...</th>
                    </tr>
                @endforelse
        </tbody>
    </table>
</div>
<div class="mt-4">
    {{ $items->links() }}
</div>
