<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;
use App\Models\Banner;
use App\Models\CartItem;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartItemController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $cartItems = CartItem::with('product')->get();
    // Calculate the total price of the cart items
    $cartTotal = $cartItems->sum(function ($item) {
        return $item->product->price * $item->quantity;
    });
    $cartItems = CartItem::all();
    $products = Product :: all();
    $categories = Category::all();
    $banners = Banner::all();
    return view('welcome', compact("categories","products", 'banners', "cartItems", 'cartTotal'));
});

// temporary route
Route::get('/account', function () {
    $cartItems = CartItem::with('product')->get();
    // Calculate the total price of the cart items
    $cartTotal = $cartItems->sum(function ($item) {
        return $item->product->price * $item->quantity;
    });
    $cartItems = CartItem::all();
    $products = Product :: all();
    $categories = Category::all();
    $banners = Banner::all();
    return view('register_login', compact("categories","products", 'banners', "cartItems", 'cartTotal'));
});

// temporary route
Route::get('/checkout', function () {
    $cartItems = CartItem::with('product')->get();
    // Calculate the total price of the cart items
    $cartTotal = $cartItems->sum(function ($item) {
        return $item->product->price * $item->quantity;
    });
    $cartItems = CartItem::all();
    $products = Product :: all();
    $categories = Category::all();
    $banners = Banner::all();
    return view('checkout', compact("categories","products", 'banners', "cartItems", 'cartTotal'));
});


// Route::get('/cart', function () {
//     $cartItems = CartItem::with('product')->get();
//     // Calculate the total price of the cart items
//     $cartTotal = $cartItems->sum(function ($item) {
//         return $item->product->price * $item->quantity;
//     });
//     $cartItems = CartItem::all();
//     $products = Product :: all();
//     $categories = Category::all();
//     $banners = Banner::all();
//     return view('cart', compact("categories","products", 'banners', "cartItems", 'cartTotal'));
// });





Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/', [ProductController::class, 'store'])->name('products.store');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});


Route::get('/banners', [BannerController::class, 'index'])->name('banners.index');
Route::get('/banners/create', [BannerController::class, 'create'])->name('banners.create');
Route::post('/banners', [BannerController::class, 'store'])->name('banners.store');
Route::get('/banners/{id}/edit', [BannerController::class, 'edit'])->name('banners.edit');
Route::put('/banners/{id}', [BannerController::class, 'update'])->name('banners.update');
Route::delete('/banners/{id}', [BannerController::class, 'destroy'])->name('banners.destroy');


Route::post('/cart/add/{product}', [CartItemController::class, 'addToCart'])->name('cart.add');
// Route to remove an item from the cart
Route::post('/cart/remove/{product}', [CartItemController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/cart', [CartItemController::class, 'showCart'])->name('cart.show');
Route::post('/cart/clear', [CartItemController::class, 'clearCart'])->name('cart.clear');
Route::put('cart/update-all-quantities', [CartItemController::class, 'updateAllQuantities'])
    ->name('cart.updateAllQuantities');


