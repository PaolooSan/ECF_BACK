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

Route::resource('/products', ProductController::class);
// Route::patch('/products/editedprice/{id}', [ProductController::class, 'update']);
// Route::delete('/products/deletedproduct/{id}', [ProductController::class, 'destroy']);
Route::get('/products/{id}/dimensions', [ProductController::class, 'show']);
