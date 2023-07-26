<div>
    <header class="container">
        <h2 class="font-bold font-saol text-2xl text-platinum leading-tight">
            Users
        </h2>
    </header>

    <div class="container py-12">
        <x-table-responsive>

            <div class="px-6 py-4 bg-platinum">

                <x-input wire:model="search" type="text" class="w-full text-deer" placeholder="Aa" />

            </div>

            @if (count($users))
                
                <table class="min-w-full divide-y divide-deer">
                    <thead class="bg-platinum">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Rol
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-platinum divide-y divide-deer">

                        @foreach ($users as $user)

                            <tr wire:key="{{$user->email}}">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-rifleGreen">
                                        {{$user->id}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">

                                    <div class="text-sm text-rifleGreen">
                                        {{$user->name}}
                                    </div>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-rifleGreen">
                                        {{$user->email}}
                                    </div>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <div class="text-sm text-rifleGreen">
                                        
                                        @if (count($user->roles))
                                            Admin
                                        @else
                                            Without Rol
                                        @endif

                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-deer text-sm font-medium">
                                    
                                    <label>
                                        <input class="text-goldenrod focus:border-deer focus:ring-deer" {{count($user->roles) ? 'checked' : ''}} value="1" type="radio" name="{{$user->email}}" wire:change="assignRole({{$user->id}}, $event.target.value)">
                                        Yes
                                    </label>

                                    <label class="ml-2">
                                        <input class="text-goldenrod focus:border-deer focus:ring-deer" {{count($user->roles) ? '' : 'checked'}} value="0" type="radio" name="{{$user->email}}" wire:change="assignRole({{$user->id}}, $event.target.value)">
                                        No
                                    </label>
                                </td>
                            </tr>

                        @endforeach
                        <!-- More people... -->

                        
                    </tbody>
                </table>

            @else
                <div class="px-6 py-4">
                    There is no matching record
                </div>
            @endif

            @if ($users->hasPages())
                    
                <div class="px-6 py-4">
                    {{$users->links()}}
                </div>

            @endif
        </x-table-responsive>
    </div>
</div>