<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Utils\PaginateCollection;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

class ShowController extends Component
{

    use WithPagination;

    public $items;

    public $products = [];

    // public $links;

    public function loadProducts() {

        $this->products = $this->items;

    }

    public function render()
    {
        return view('livewire.show-controller');

    }
}
