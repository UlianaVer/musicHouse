<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sqlController;
use App\Http\Controllers\productController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\carouselController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
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

Route::get('/', [CarouselController::class, 'index'])->name('index');
/* Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog'); */
Route::get('/admin', function() {
    return view('admin');
})->name('admin');

Route::get('/Contact', function () {
    return view('Contact');
})->name('Contact');

// Route::get('/Cart', function () {
//     return view('Cart');
// })->name('Cart');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Route::get('/registration', function () {
//     return view('registration');
// })->name('registration');

Route::get('/Description_tovar', function () {
    return view('Description_tovar');
})->name('Description_tovar');

// Route::get('/order', function () {
//     return view('order');
// })->name('order');

/* Route::get('/sql', [sqlController::class,'index']); */

/* Route::get('/products', [ProductController::class,'showCarousel']); */


/* Эти пути не будут актуальны */
/* Route::get('/Stung', function () {
    return view('Stung');
})->name('Stung');

Route::get('/Duhast', function () {
    return view('Duhast');
})->name('Duhast');

Route::get('/Atack', function () {
    return view('Atack');
})->name('Atack'); */

Route::resource('products', ProductController::class);
Route::post('/products/filter', [ProductController::class, 'filter'])->name('products.filter');

Route::resource('categories', CategoryController::class)->middleware('admin');

Route::middleware('auth')->group(function(){
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/add/{product_id}', [CartController::class, 'store'])->name('cart.store');
Route::post('/cart/change/{product_id}', [CartController::class, 'change'])->name('cart.change');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::resource('orders', OrderController::class);
});

Route::middleware('guest')->group(function(){
    Route::get('/registration', [AuthController::class, 'regForm'])->name('regForm');
    Route::post('/registration', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [AuthController::class, 'login'])->name('login');
});

