<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Htpp\Controllers\DimensionController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::resource('/products', ProductController::class);
Route::put('/products/editedproduct/{id}', [ProductController::class, 'update']);
Route::delete('/products/deletedproduct/{id}', [ProductController::class, 'destroy']);
Route::get('/products/dimensions/{id}', [ProductController::class, 'show']);
Route::get('/dimensions/{id}', [DimensionController::class, 'show']);

