<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateProduct extends Component
{
    public $genders, $categories = [], $subcategories = [], $brands = [];
    public $gender_id = "", $category_id = "", $subcategory_id = "", $brand_id = "";
    public $name, $slug, $description, $price, $quantity;


    protected $rules = [
        'gender_id' => 'required',
        'category_id' => 'required',
        'subcategory_id' => 'required',
        'name' => 'required',
        'slug' => 'required|unique:products',
        'description' => 'required',
        'brand_id' => 'required',
        'price' => 'required',
    ];

    public function updatedGenderId($value){
        $this->categories = Category::where('gender_id', $value)->get();

        $this->reset(['category_id', 'subcategory_id', 'brand_id']);
    }

    public function updatedCategoryId($value){
        $this->subcategories = Subcategory::where('category_id', $value)->get();

        $this->brands = Brand::whereHas('categories', function(Builder $query) use ($value){
            $query->where('category_id', $value);
        })->get();

        $this->reset(['subcategory_id', 'brand_id']);
    }

    public function updatedName($value){
        $this->slug = Str::slug($value);
    }

    public function getSubcategoryProperty(){
        return Subcategory::find($this->subcategory_id);
    }

    public function mount(){

        $this->genders = Gender::all();

        // $this->categories = Category::all();

    }


    public function save(){

        $rules = $this->rules;

        if ($this->subcategory_id) {
            if (!$this->subcategory->color && !$this->subcategory->size) {
                $rules['quantity'] = 'required';
            }
        }

        $this->validate($rules);

        $product = new Product();

        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->description = $this->description;
        $product->price = $this->price;
        $product->subcategory_id = $this->subcategory_id;
        $product->brand_id = $this->brand_id;
        if ($this->subcategory_id) {
            if (!$this->subcategory->color && !$this->subcategory->size) {
                $product->quantity = $this->quantity;
            }
        }

        $product->save();

        return redirect()->route('admin.products.edit', $product);
    }

    public function render()
    {
        return view('livewire.admin.create-product')->layout('layouts.admin');
    }
}
