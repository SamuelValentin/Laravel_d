<?php

use App\Http\Controllers\ProfileController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Symfony\Component\HttpFoundation\Request;
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

// Views ---------------
Route::get('/products', function () {
    return view('products', [
        'products' => Product::paginate(5)]);
})->middleware(['auth', 'verified'])->name('products');

Route::get('/categories', function () {
    return view('categories', [
        'categories' => Category::paginate(5)]);
})->middleware(['auth', 'verified'])->name('categories');

// Create -----------------
Route::get('/product-create', function () {
    return view('product-create');
})->middleware(['auth', 'verified'])->name('product-create');

Route::get('/category-create', function () {
    return view('category-create');
})->middleware(['auth', 'verified'])->name('category-create');

// Edit --------------------
Route::get('/product-edit/{product:id}/edit', function (Product $product) {
    return view('product-edit',[
        'product' => Product::find($product->id)
]);
})->middleware(['auth', 'verified'])->name('product-edit');

Route::get('/category-edit/{category:id}/edit', function (Category $category) {
    return view('category-edit', [
        'category' => Category::find($category->id)
]);
})->middleware(['auth', 'verified'])->name('category-edit');

// Froms --------------------
Route::post('/product-form', function (){
    return view('product-create');
})->middleware(['auth', 'verified']);

Route::post('/category-form', function (){
    return view('category-create');
})->middleware(['auth', 'verified']);

// remove --------------
Route::get('/category/{category:id}/remove', function (Category $category) {
    $category->delete();
    return redirect(route('categories'));
})->middleware(['auth', 'verified'])->name('categories-remove');

Route::get('/product/{product:id}/remove', function (Product $product) {
    $product->delete();
    return redirect(route('products'));
})->middleware(['auth', 'verified'])->name('products-remove');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
