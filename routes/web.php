<?php

use App\Http\Controllers\GenderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/landing', [LandingController::class, 'index']);

Route::get('/', HomeController::class)->name('home');

Route::get('/{gender}/all', [GenderController::class, 'show'])->name('gender.show');

Route::get('gender/{gender}/category/{category}', [GenderController::class, 'showCategory'])->name('genderCategory.show');

Route::get('/product/{product}', [ProductController::class, 'show'])->name('products.show');
