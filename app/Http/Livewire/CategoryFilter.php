<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryFilter extends Component
{
    use WithPagination;

    public $category, $subcat, $bra;

    public $view = "grid";

    public function updatedSubcat(){
        $this->resetPage();
    }

    public function updatedBra(){
        $this->resetPage();
    }

    public function clean() {
        $this->reset(['subcat', 'bra']);
    }

    public function render()
    {

        $productsQuery = Product::query()->whereHas('subcategory.category', function(Builder $query){
            $query->where('id', $this->category->id)->where('status', Product::PUBLISHED);
        });

        if ($this->subcat) {
            $productsQuery = $productsQuery->whereHas('subcategory', function(Builder $query){
                $query->where('slug', $this->subcat)->where('status', Product::PUBLISHED);
            });
        }

        if ($this->bra) {
            $productsQuery = $productsQuery->whereHas('brand', function(Builder $query){
                $query->where('name', $this->bra)->where('status', Product::PUBLISHED);
            });
        }

        $products = $productsQuery->orderBy('id', 'desc')->paginate(12);

        // $products = $this->category->products()->where('status', Product::PUBLISHED)->orderBy('id', 'desc')->paginate(12);
        return view('livewire.category-filter', compact('products'));
    
    }
}
