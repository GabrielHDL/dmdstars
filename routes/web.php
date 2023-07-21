<?php

use App\Http\Controllers\BillingController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WebhooksController;
use App\Http\Livewire\CreateOrder;
use App\Http\Livewire\PaymentOrder;
use App\Http\Livewire\ShoppingCart;
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

Route::get('search', SearchController::class)->name('search');

Route::get('/{gender}/all', [GenderController::class, 'show'])->name('gender.show');

Route::get('/gender/{gender}/category/{category}', [GenderController::class, 'showCategory'])->name('genderCategory.show');

Route::get('/product/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/cart', ShoppingCart::class)->name('shopping-cart');

Route::middleware(['auth'])->group(function() {

    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

    Route::get('/orders/create', CreateOrder::class)->name('orders.create');

    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');

    Route::get('/orders/payment', [OrderController::class, 'payment'])->name('orders.payment');

    Route::get('/orders/{order}/payment', PaymentOrder::class)->name('orders.payment');

    Route::get('/billing', [BillingController::class, 'index'])->name('billings.index');

    Route::post('/webhooks', WebhooksController::class);

});
