<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 bg-platinum text-rifleGreen">
    
    <h1 class="text-3xl text-center font-semibold mb-8">Complete this information to create a product</h1>

    <div class="grid sm:grid-cols-3 gap-6 mb-4">

        {{-- Gender --}}
        <div>
            <x-label value="Genders" />
            <select class="w-full form-control" wire:model="gender_id">
                <option value="" selected disabled>Select Gender</option>

                @foreach ($genders as $gender)
                    <option value="{{$gender->id}}">{{$gender->name}}</option>
                @endforeach
            </select>

            <x-input-error for="gender_id" />
        </div>

        {{-- Categoría --}}
        <div>
            <x-label value="Categories" />
            <select class="w-full form-control" wire:model="category_id">
                <option value="" selected disabled>Select Category</option>

                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>

            <x-input-error for="category_id" />
        </div>

        {{-- Subcategoría --}}
        <div>
            <x-label value="Subcategories" />
            <select class="w-full form-control" wire:model="subcategory_id">
                <option value="" selected disabled>Select Subcategory</option>

                @foreach ($subcategories as $subcategory)
                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                @endforeach
            </select>

            <x-input-error for="subcategory_id" />
        </div>
    </div>

    {{-- Nombre --}}
    <div class="mb-4">
        <x-label value="Name" />
        <x-input type="text" 
                    class="w-full"
                    wire:model="name"
                    placeholder="Enter product name" />
        <x-input-error for="name" />
    </div>

    {{-- Slug --}}
    <div class="mb-4">
        <x-label value="Slug" />
        <x-input type="text"
            disabled
            wire:model="slug"
            class="w-full bg-gray-200" 
            placeholder="Enter product slug" />

    <x-input-error for="slug" />
    </div>

    {{-- Descrición --}}
    <div class="mb-4">
        <div wire:ignore>
            <x-label value="Description" />
            <textarea class="w-full form-control" rows="4"
                wire:model="description"
                x-data 
                x-init="ClassicEditor.create($refs.miEditor)
                .then(function(editor){
                    editor.model.document.on('change:data', () => {
                        @this.set('description', editor.getData())
                    })
                })
                .catch( error => {
                    console.error( error );
                } );"
                x-ref="miEditor">
            </textarea>
        </div>
        <x-input-error for="description" />
    </div>

    <div class="grid grid-cols-2 gap-6 mb-4">
        {{-- Marca --}}
        <div>
            <x-label value="Brand" />
            <select class="form-control w-full" wire:model="brand_id">
                <option value="" selected disabled>Select Brand</option>
                @foreach ($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>

            <x-input-error for="brand_id" />
        </div>

        {{-- Precio --}}
        <div>
            <x-label value="Price" />
            <x-input 
                wire:model="price"
                type="number" 
                class="w-full" 
                step=".01" />
            <x-input-error for="price" />
        </div>
    </div>

    @if ($subcategory_id)
        
        @if (!$this->subcategory->color && !$this->subcategory->size)
            
            <div>
                <x-label value="Quantity" />
                <x-input 
                    wire:model="quantity"
                    type="number" 
                    class="w-full" />
                <x-input-error for="quantity" />
            </div>

        @endif

    @endif


    <div class="flex mt-4">
        <x-button
            wire:loading.attr="disabled"
            wire:target="save"
            wire:click="save"
            class="ml-auto">
            Create Product
        </x-button>
    </div>

</div>