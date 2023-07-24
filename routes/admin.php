<?php

use App\Http\Controllers\Admin\AdminHome;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Livewire\Admin\ShowCategory;
use App\Http\Livewire\Admin\BrandComponent;
use App\Http\Livewire\Admin\DepartmentComponent;
use App\Http\Livewire\Admin\ShowDepartment;
use App\Http\Livewire\Admin\CityComponent;
use App\Http\Livewire\Admin\UserComponent;
use App\Http\Controllers\Admin\Contact;
use App\Http\Controllers\Admin\Partners;
use App\Http\Controllers\Admin\Pending;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\Prospects;
use App\Http\Controllers\Admin\Rejected;
use App\Http\Livewire\Admin\CreateProduct;
use App\Http\Livewire\Admin\EditProduct;
use App\Http\Livewire\Admin\ShowProducts;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
|
*/

Route::get('/', ShowProducts::class)->name('index');

Route::get('products/create', CreateProduct::class)->name('products.create');

Route::get('products/{product}/edit', EditProduct::class)->name('products.edit');

Route::post('products/{product}/files', [ProductController::class, 'files'])->name('products.files');

Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');

Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/{category}', ShowCategory::class)->name('categories.show');

Route::get('brands', BrandComponent::class)->name('brands.index');

Route::get('departments', DepartmentComponent::class)->name('departments.index');
Route::get('departments/{department}', ShowDepartment::class)->name('departments.show');

Route::get('cities/{city}', CityComponent::class)->name('cities.show');

Route::get('users', UserComponent::class)->name('users.index');


Route::get('/landing', [AdminHome::class, 'index'])->name('landing');

Route::get('/landing/prospects', [Prospects::class, 'index'])->name('landing-prospects');

Route::get('/landing/partners', [Partners::class, 'index'])->name('landing-partners');

Route::get('/landing/pendings', [Pending::class, 'index'])->name('landing-pendings');

Route::get('/landing/rejects', [Rejected::class, 'index'])->name('landing-rejects');

Route::get('/landing/contacts/{partner}/show', [Contact::class, 'show'])->name('landing-contact.show');