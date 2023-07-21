<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gender;
use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator as PaginationLengthAwarePaginator;

class GenderController extends Controller
{
    public function show(Gender $gender) {

        $products = $gender->products()->where('status', Product::PUBLISHED)->orderBy('id', 'desc')->paginate(12);
        // $products = $products->sortByDesc('id');

        return view('genders.show', compact('gender', 'products'));
    }

    public function showCategory(Gender $gender, Category $category) {

        return view('genders.categories.show', compact('category'));
    }
}
