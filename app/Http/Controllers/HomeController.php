<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $genders = Gender::latest('id')->get();

        return view('home.index', compact('genders'));
    }
}
