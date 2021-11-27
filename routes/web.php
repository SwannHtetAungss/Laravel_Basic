<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WebFrontend\AboutController;
use App\Http\Controllers\WebFrontend\ProductController;

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
    $products = [1, 2, 3, 4, 5, 6, 7, 8];
    return view('welcome')->with([
        'data' => $products
    ]);
});

Route::get('/about', [AboutController::class, 'aboutPage'])->name('website.about');

Route::get('/contact', [ContactController::class, 'contactPage']);

Route::get('/products', [ProductController::class, 'productList']);

Route::get('/products/{product_id}', [ProductController::class, 'productDetail'])->name('website.product-detail');

Route::get('/shops', function () {
    return view('shops.shop');
});

Route::get('/products/{product_id}/shops/{shop_id}', [ProductController::class, 'productPage']);

Route::post('/promotions', [Controller::class, 'showPromotions']);
