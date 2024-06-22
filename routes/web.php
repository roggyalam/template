<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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
    return view('layouts.backend');
})->middleware('auth');

Route::get('data', function () {
    return view('data');
});


Auth::routes(
    ['register' => false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('brand', App\Http\Controllers\BrandController::class)->middleware('auth');
Route::resource('product', App\Http\Controllers\ProductController::class)->middleware('auth');

Route::post('brand/export-brand', [App\Http\Controllers\BrandController::class, 'viewPDF'])->name('brand.view-pdf');
Route::post('product/export-product', [App\Http\Controllers\ProductController::class, 'viewPDF'])->name('product.view-pdf');
