<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        $genders = Gender::all();

        $latestProducts = Product::where('status', Product::PUBLISHED)->take(8)->latest('id')->get();

        return view('home.index', compact('genders', 'latestProducts'));
    }
}
