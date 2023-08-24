<?php

use App\Http\Controllers\ProfileController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'products' => Product::all()
            ->where('user_id', '==', 1)
            ->sortBy('name')
            ->take(2),
        'categories' => Category::all()
            ->sortBy('name')
            ->take(2)
        ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/products', function () {
    return view('products', [
        'products' => Product::all()
            ->where('user_id', '==', 1)
            ->sortBy('name')
            ->take(5)
        ]);
})->middleware(['auth', 'verified'])->name('products');

Route::get('/categories', function () {
    return view('categories', [
        'categories' => Category::all()
            ->sortBy('name')
            ->take(2)
        ]);
})->middleware(['auth', 'verified'])->name('categories');

Route::get('/product_create)', function () {
    return view('product_create');
})->middleware(['auth', 'verified'])->name('product_create');

Route::get('/category_create)', function () {
    return view('category_create');
})->middleware(['auth', 'verified'])->name('category_create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
