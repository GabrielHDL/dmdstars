<?php

use App\Http\Controllers\Admin\AdminHome;
use App\Http\Controllers\Admin\Contact;
use App\Http\Controllers\Admin\Partners;
use App\Http\Controllers\Admin\Pending;
use App\Http\Controllers\Admin\Prospects;
use App\Http\Controllers\Admin\Rejected;
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

Route::get('/', [AdminHome::class, 'index'])->name('home');

Route::get('prospects', [Prospects::class, 'index'])->name('prospects');

Route::get('partners', [Partners::class, 'index'])->name('partners');

Route::get('pendings', [Pending::class, 'index'])->name('pendings');

Route::get('rejects', [Rejected::class, 'index'])->name('rejects');

Route::get('contacts/{partner}/show', [Contact::class, 'show'])->name('contact.show');