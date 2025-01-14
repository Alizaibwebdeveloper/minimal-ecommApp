<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\AdminDashboard;
use App\Livewire\ManageProduct;
use App\Livewire\ProductDetails;
use App\Livewire\ManageOrders;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/product/detail',ProductDetails::class)->name('product.detail');
Route::get('admin/dashboard',AdminDashboard::class)->middleware('admin')->name('admin.dashboard');

Route::get('/products',ManageProduct::class)->middleware('admin')->name('products');

Route::get('/orders', ManageOrders::class)->middleware('admin')->name('orders');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
