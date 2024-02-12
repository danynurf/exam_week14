<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::post('/products', [ProductController::class], 'store')->name('product.store');
Route::get('/products', [ProductController::class], 'index')->name('product.index');
Route::put('/product/{id}', [ProductController::class], 'update')->name('product.update');
Route::delete('/product/{id}', [ProductController::class], 'destroy')->name('product.destroy');
