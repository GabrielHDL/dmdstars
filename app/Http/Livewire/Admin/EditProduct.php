<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Image;
use Livewire\Component;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

class EditProduct extends Component
{

    public $product, $genders, $categories, $subcategories, $brands, $slug;

    public $gender_id, $category_id;

        protected $rules = [
        'gender_id' => 'required',
        'category_id' => 'required',
        'product.subcategory_id' => 'required',
        'product.name' => 'required',
        'slug' => 'required|unique:products,slug',
        'product.description' => 'required',
        'product.brand_id' => 'required',
        'product.price' => 'required',
        'product.quantity' => 'numeric|nullable',
    ];

    public function mount(Product $product) {
        $this->product = $product;

        $this->genders = Gender::all();

        $this->gender_id = $product->subcategory->category->gender->id;

        $this->category_id = $product->subcategory->category->id;

        $this->categories = Category::where('gender_id', $this->gender_id)->get();

        $this->subcategories = Subcategory::whereHas('category', function(Builder $query) {
            $query->where('category_id', $this->category_id);
        })->get();

        $this->brands = Brand::whereHas('categories', function(Builder $query){
                    $query->where('category_id', $this->category_id);
        })->get();

        $this->slug = $this->product->slug;
    }

    protected $listeners = ['refreshProduct', 'delete'];

    public function refreshProduct(){
        $this->product = $this->product->fresh();
    }

    public function updatedProductName($value){
        $this->slug = Str::slug($value);
    }

    public function updatedGenderId($value){
        $this->categories = Category::where('gender_id', $value)->get();

        $this->category_id = "";
        $this->product->subcategory_id = "";
        $this->product->brand_id = "";
    }

    public function updatedCategoryId($value){
        $this->subcategories = Subcategory::where('category_id', $value)->get();

        $this->brands = Brand::whereHas('categories', function(Builder $query) use ($value){
            $query->where('category_id', $value);
        })->get();

        /* $this->reset(['subcategory_id', 'brand_id']); */
        $this->product->subcategory_id = "";
        $this->product->brand_id = "";
    }

    public function getSubcategoryProperty(){
        return Subcategory::find($this->product->subcategory_id);
    }

    public function save() {
        $rules = $this->rules;

        $rules['slug'] = 'required|unique:products,slug,' . $this->product->id;

        if ($this->product->subcategory_id) {
            if (!$this->subcategory->color && !$this->subcategory->size) {
                $rules['product.quantity'] = 'required|numeric';
            }
        }
        
        $this->validate($rules);

        $this->product->slug = $this->slug;

        $this->product->save();

        $this->emit('saved');
    }

    public function deleteImage(Image $image){
        Storage::delete([$image->url]);
        $image->delete();

        $this->product = $this->product->fresh();
    }

    public function delete(){

        $images = $this->product->images;

        foreach ($images as $image) {
            Storage::delete($image->url);
            $image->delete();
        }

        $this->product->delete();

        return redirect()->route('admin.index');

    }


    public function render()
    {
        return view('livewire.admin.edit-product')->layout('layouts.admin');
    }
}