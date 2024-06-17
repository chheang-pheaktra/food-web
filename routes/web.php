<?php

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


Route::get('/product/show',[\App\Http\Controllers\UserController::class,'product']);
Route::get('/about', [\App\Http\Controllers\UserController::class, 'about'])->name('about');
Route::get('/cart',[\App\Http\Controllers\UserController::class,'cart'])->name('cart');
Route::get('shop',[\App\Http\Controllers\UserController::class,'shop'])->name('shop');
Route::controller(\App\Http\Controllers\AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

//Normal Users Routes List
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/view/food/{id}',[\App\Http\Controllers\UserController::class,'view']);
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'userprofile'])->name('profile');
    Route::post('/feedback/{user_id}/{product_id}',[\App\Http\Controllers\FeedbackController::class,'store']);
    Route::get('/product/{id}', [\App\Http\Controllers\UserController::class, 'addProducttoCart'])->name('addProduct.to.cart');
    Route::post('/cart/increase/{id}', [App\Http\Controllers\UserController::class, 'increaseQuantity'])->name('cart.increase');
    Route::post('/cart/decrease/{id}', [App\Http\Controllers\UserController::class, 'decreaseQuantity'])->name('cart.decrease');
    Route::post('/checkout/process', [App\Http\Controllers\UserController::class, 'processCheckout'])->name('checkout.process');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [\App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin/home');
    Route::get('/admin/profile', [\App\Http\Controllers\AdminController::class, 'profilepage'])->name('admin/profile');
    Route::get('/admin/category',[\App\Http\Controllers\AdminController::class,'category']);
    Route::post('/admin/category/store',[\App\Http\Controllers\CategoryController::class,'store'])->name('admin/category');
    Route::post('/admin/category/update/{id}',[\App\Http\Controllers\CategoryController::class,'update']);
    Route::get('/admin/destroy/{id}',[\App\Http\Controllers\CategoryController::class,'destroy']);

    //Route for Product
    Route::get('/admin/product',[\App\Http\Controllers\AdminController::class,'product']);
    Route::post('/admin/product/store',[\App\Http\Controllers\ProductController::class,'store']);
    Route::post('/admin/product/update/{id}',[\App\Http\Controllers\ProductController::class,'update']);
    Route::get('/admin/destroy/{id}',[\App\Http\Controllers\ProductController::class,'destroy']);


});
