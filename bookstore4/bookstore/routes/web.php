<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front;
use  App\Http\Controllers\Dashboard;
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

Route::get('/', [Front\HomeController::class, 'index']);

Route::prefix('product')->group(function (){
    Route::get('/', [Front\ShopController::class, 'index']);
    Route::get('/{id}', [Front\ShopController::class, 'showDetail']);

    Route::post('/{categoryName}', [Front\ShopController::class, 'category']);

});

Route::prefix('cart')->group(function () {
    Route::get('add/{id}', [Front\CartController::class, 'add']);
    Route::get('/', [Front\CartController::class, 'index']);

    Route::get('delete/{rowId}', [Front\CartController::class, 'delete']);
    Route::get('/destroy', [Front\CartController::class, 'destroy']);

    Route::get('/update', [Front\CartController::class, 'update']);
});

Route::prefix('checkout')->group(function () {
    Route::get('/', [Front\CheckoutController::class, 'index']);
    Route::post('/', [Front\CheckoutController::class, 'addOrder']);

    Route::get('/vnPayCheck', [Front\CheckoutController::class, 'vnPayCheck']);
    Route::get('/result', [Front\CheckoutController::class, 'result']);
});


Route::get('/about', function (){
    return view('front.about');
});

Route::get('/contact', function (){
   return view('front.contact');
});

Route::get('admin', [Dashboard\AdminController::class, 'index']);

/*ktra mqh table*/
//Route::get('/', function (){
//    return \App\Models\Product::find(1)->author;
//});


