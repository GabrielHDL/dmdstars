<div>

    <header>
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold font-saol text-platinum leading-tight">
                    Products
                </h1>

                <button class="btn border-none rounded-none bg-goldenrod text-platinum hover:bg-deer"
                    wire:click="$emit('deleteProduct')">
                    Delete
                </button>
            </div>
        </div>
    </header>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <h1 class="text-2xl text-center font-proximaBold mb-8">Complete this information to create a product</h1>

        <div class="mb-4" wire:ignore>
            <form action="{{ route('admin.products.files', $product) }}" method="POST"
                class="dropzone bg-platinum text-deer" id="my-awesome-dropzone">
            </form>
        </div>

        @if ($product->images->count())

            <section class="bg-platinum text-deer shadow-xl p-6 mb-4">
                <h1 class="text-2xl text-center font-semibold mb-2">Product Images</h1>

                <ul class="flex flex-wrap">
                    @foreach ($product->images as $image)
                        <li class="relative" wire:key="image-{{ $image->id }}">
                            <img class="w-32 h-20 object-cover" src="{{ Storage::url($image->url) }}" alt="">
                            <x-danger-button class="absolute right-2 top-2"
                                wire:click="deleteImage({{ $image->id }})" wire:loading.attr="disabled"
                                wire:target="deleteImage({{ $image->id }})">
                                x
                            </x-danger-button>
                        </li>
                    @endforeach

                </ul>
            </section>

        @endif


        @livewire('admin.status-product', ['product' => $product], key('status-product-' . $product->id))

        <div class="bg-platinum shadow-xl p-6">
            <div class="grid grid-cols-2 gap-6 mb-4">
                <div>
                    <x-label value="Categories" />
                    <select class="w-full text-deer" wire:model="category_id">
                        <option value="" selected disabled>Select Category</option>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    <x-input-error for="category_id" />
                </div>

                <div>
                    <x-label value="Subcategories" />
                    <select class="w-full text-deer" wire:model="product.subcategory_id">
                        <option value="" selected disabled>Select Subcategory</option>

                        @foreach ($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                        @endforeach
                    </select>

                    <x-input-error for="product.subcategory_id" />
                </div>
            </div>

            <div class="mb-4">
                <x-label value="Name" />
                <x-input type="text" class="w-full text-deer" wire:model="product.name"
                    placeholder="Enter the product name" />
                <x-input-error for="product.name" />
            </div>

            <div class="mb-4">
                <x-label value="Slug" />
                <x-input type="text" disabled wire:model="slug" class="w-full bg-gray-200 text-deer/60"
                    placeholder="Enter the product slug" />

                <x-input-error for="slug" />
            </div>

            <div class="mb-4">
                <div wire:ignore class="!text-deer">
                    <x-label value="Description" />
                    <textarea class="w-full form-control" rows="4" wire:model="product.description" x-data x-init="ClassicEditor.create($refs.miEditor)
                        .then(function(editor) {
                            editor.model.document.on('change:data', () => {
                                @this.set('product.description', editor.getData())
                            })
                        })
                        .catch(error => {
                            console.error(error);
                        });"
                        x-ref="miEditor">
                    </textarea>
                </div>
                <x-input-error for="product.description" />
            </div>

            <div class="grid grid-cols-2 gap-6 mb-4">
                <div>
                    <x-label value="Brand" />
                    <select class="form-control w-full text-deer" wire:model="product.brand_id">
                        <option value="" selected disabled>Select Brand</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>

                    <x-input-error for="product.brand_id" />
                </div>

                <div>
                    <x-label value="Price" />
                    <x-input wire:model="product.price" type="number" class="w-full text-deer" step=".01" />
                    <x-input-error for="product.price" />
                </div>
            </div>


            @if ($this->subcategory)


                @if (!$this->subcategory->color && !$this->subcategory->size)
                    <div>
                        <x-label value="Quantity" />
                        <x-input wire:model="product.quantity" type="number" class="w-full text-deer" />
                        <x-input-error for="product.quantity" />
                    </div>
                @endif

            @endif

            <div class="flex justify-end items-center mt-4">

                <x-action-message class="mr-3 text-deer" on="saved">
                    Updated
                </x-action-message>

                <button type="submit" class="btn border-none rounded-none bg-goldenrod hover:bg-deer text-platinum"
                    wire:loading.attr="disabled" wire:target="save" wire:click="save">
                    Update Product
                </button>
            </div>
            {{-- <div class="flex justify-end items-center mt-4">
    
                <x-action-message class="mr-3" on="saved">
                    Actualizado
                </x-action-message>
    
                <x-button
                    wire:loading.attr="disabled"
                    wire:target="save"
                    wire:click="save">
                    Actualizar producto
                </x-button>
            </div> --}}
        </div>


        @if ($this->subcategory)

            @if ($this->subcategory->size)
                @livewire('admin.size-product', ['product' => $product], key('size-product-' . $product->id))
            @elseif($this->subcategory->color)
                @livewire('admin.color-product', ['product' => $product], key('color-product-' . $product->id))
            @endif

        @endif


    </div>


    @push('scripts')
        <script>
            Dropzone.options.myAwesomeDropzone = {
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                dictDefaultMessage: '<span class="text-center"><span class="font-lg visible-xs-block visible-sm-block visible-lg-block"><span class="font-lg"><i class="fa fa-caret-right text-danger"></i> Drop images <span class="font-xs">to upload</span></span><span>&nbsp&nbsp<h4 class="display-inline"> (Or Click)</h4></span>',
                paramName: "file",
                maxFileSize: 2,
                acceptedFiles: 'image/*',
                resizeHeight: 960,
                complete: function(file) {
                    this.removeFile(file);
                },
                queuecomplete: function() {
                    Livewire.emit('refreshProduct');
                }
            };

            Livewire.on('deleteProduct', () => {

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin.edit-product', 'delete');

                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })

            })

            Livewire.on('deleteSize', sizeId => {

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin.size-product', 'delete', sizeId);

                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })

            })

            Livewire.on('deletePivot', pivot => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin.color-product', 'delete', pivot);

                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            })

            Livewire.on('deleteColorSize', pivot => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin.color-size', 'delete', pivot);

                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            })
        </script>
    @endpush

</div>