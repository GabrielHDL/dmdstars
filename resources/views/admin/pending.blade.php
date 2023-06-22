<x-admin-layout>
    <div class="container">
      <h1 class="font-saol font-bold text-3xl mb-4">Pendings</h1>
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
                </tr>
              </thead>
              <tbody>
                @forelse ($pendings as $pending)
                    <tr class="hover:bg-platinum hover:text-rifleGreen">
                        <th><a href="{{route('admin.contact.show', $pending)}}">{{$pending->id}}</a></th>
                        <td><a href="{{route('admin.contact.show', $pending)}}">{{$pending->name}}</a></td>
                        <td><a href="{{route('admin.contact.show', $pending)}}">{{$pending->email}}</a></td>
                        <td><a href="{{route('admin.contact.show', $pending)}}"">{{$pending->phone}}</a></td>
                        @if ($pending->isActive == false)
                            <td><a href="{{route('admin.contact.show', $pending)}}"><span class="bg-amber-500 text-amber-700 rounded-full py-1 px-4">Pending</span></a></td>
                        @else
                            <td><a href="{{route('admin.contact.show', $pending)}}"><span class="bg-blue-500 text-blue-700 rounded-full py-1 px-4">Contacted</span></a></td>
                        @endif
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
            {{$pendings->links()}}
          </div>
    </div>
</x-admin-layout>