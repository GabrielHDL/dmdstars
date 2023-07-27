<div class="container py-8 grid lg:grid-cols-2 xl:grid-cols-5 gap-6">

    <div class="order-2 lg:order-1 lg:col-span-1 xl:col-span-3">
        <div class="bg-rifleGreen shadow">
            <div class="bg-slate-900/30 pt-4 pb-2 px-6 border-b border-deer">
                <p class="mb-3 text-lg text-platinum font-bold font-saol">Contact Information</p>
            </div>
            <div class="px-6 pt-4 pb-6">
                <div class="mb-4">
                    <x-label class="text-platinum text-[1rem] mb-2" value="Contact Name" />
                    <x-input type="text" wire:model.defer="contact"
                        placeholder="Enter the name of the person who will receive the product" class="w-full" />
                    <x-input-error for="contact" />
                </div>

                <div>
                    <x-label class="text-platinum text-[1rem] mb-2" value="Contact Phone" />
                    <x-input type="text" wire:model.defer="phone" placeholder="Enter a contact phone number"
                        class="w-full" />

                    <x-input-error for="phone" />
                </div>
            </div>
        </div>

        <div class="mt-6">

            <div class="bg-rifleGreen shadow">
                <div class="bg-slate-900/30 pt-4 pb-2 px-6 border-b border-deer">
                    <p class="mb-3 text-lg text-platinum font-bold font-saol">Shipping Information</p>
                </div>

                <div class="px-6 pt-4 pb-6 grid grid-cols-2 gap-6">

                    {{-- Departamentos --}}
                    <div>
                        <x-label class="text-platinum text-[1rem] mb-2" value="Department" />

                        <select class="rounded-lg w-full focus:ring-deer focus:border-deer" wire:model="department_id">

                            <option value="" disabled selected>Select Department</option>

                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>

                        <x-input-error for="department_id" />
                    </div>

                    {{-- Ciudades --}}
                    <div>
                        <x-label class="text-platinum text-[1rem] mb-2" value="City" />

                        <select class="rounded-lg w-full focus:ring-deer focus:border-deer" wire:model="city_id">

                            <option value="" disabled selected>Select City</option>

                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>

                        <x-input-error for="city_id" />
                    </div>


                    {{-- Distritos --}}
                    <div>
                        <x-label class="text-platinum text-[1rem] mb-2" value="District" />

                        <select class="rounded-lg w-full focus:ring-deer focus:border-deer" wire:model="district_id">

                            <option value="" disabled selected>Select District</option>

                            @foreach ($districts as $district)
                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                            @endforeach
                        </select>

                        <x-input-error for="district_id" />
                    </div>

                    <div>
                        <x-label class="text-platinum text-[1rem] mb-2" value="Address with Zip Code" />
                        <x-input class="w-full" wire:model="address" type="text" placeholder="Enter an address with zip code" />
                        <x-input-error for="address" />
                    </div>

                    <div class="col-span-2">
                        <x-label class="text-platinum text-[1rem] mb-2" value="References" />
                        <x-input class="w-full" wire:model="references" type="text" placeholder="Enter your house color, between streets, etc." />
                        <x-input-error for="references" />
                    </div>

                </div>
            </div>

        </div>

        <div>
            <x-button wire:loading.attr="disabled" wire:target="create_order"
                class="mt-6 mb-4 btn rounded-none border-none focus:ring-deer focus:border-deer"
                wire:click="create_order">
                Check Out
            </x-button>

            <hr class="border-deer border-[1.5px]">

            <p class="text-sm mt-2">By purchasing you agree to the DMD Stars <a target="_blank"
                    href="{{ route('terms.show') }}" class="font-semibold text-goldenrod">Terms of Service</a> and <a
                    target="_blank" href="{{ route('policy.show') }}" class="font-semibold text-goldenrod">Privacy
                    Policy</a>.</p>
        </div>

    </div>

    <div class="order-1 lg:order-2 lg:col-span-1 xl:col-span-2">
        <div class="bg-rifleGreen text-platinum shadow">
            <div class="bg-slate-900/30 pt-4 pb-2 px-6 border-b border-deer">
                <p class="mb-3 text-lg text-platinum font-bold font-saol">Summary</p>
            </div>

            <div class="pt-4 px-6 pb-6">
                <ul>
                    @forelse (Cart::content() as $item)
                        <li class="flex p-2 border-b border-gray-200">
                            <img class="h-15 w-20 object-cover mr-4" src="{{ $item->options->image }}" alt="">

                            <article class="flex-1">
                                <h1 class="font-bold font-saol">{{ $item->name }}</h1>

                                <div class="flex text-goldenrod">
                                    <p>Cant: {{ $item->qty }}</p>
                                    @isset($item->options['color'])
                                        <p class="mx-2">- Color: {{ __($item->options['color']) }}</p>
                                    @endisset

                                    @isset($item->options['size'])
                                        <p>{{ $item->options['size'] }}</p>
                                    @endisset

                                </div>

                                <p>${{ $item->price }} USD</p>
                            </article>
                        </li>
                    @empty
                        <li class="py-6 px-4">
                            <p class="text-center text-platinum">
                                There's nothing in your cart...
                            </p>
                        </li>
                    @endforelse
                </ul>

                <hr class="mt-4 mb-3">

                <div class="text-platinum">
                    <p class="flex justify-between items-center">
                        Subtotal
                        <span class="font-semibold">{{ Cart::subtotal() }} USD</span>
                    </p>
                    <p class="flex justify-between items-center">
                        Shipping
                        <span class="font-semibold">
                            @if ($envio_type == 1 || $shipping_cost == 0)
                                Free
                            @else
                                {{ $shipping_cost }} USD
                            @endif
                        </span>
                    </p>

                    <hr class="mt-4 mb-3">

                    <p class="flex justify-between items-center font-semibold text-goldenrod">
                        <span class="text-lg">Total</span>
                        @if ($envio_type == 1)
                            ${{ Cart::subtotal() }} USD
                        @else
                            ${{ Cart::subtotal() + $shipping_cost }} USD
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
