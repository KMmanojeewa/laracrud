<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    return view('pages.home');
});

Route::get('/contact', function () {
    return view('pages.contact');
});


Route::controller(ProductController::class)->group(function () {
    Route::get('/product', 'index');
    Route::get('/product/create', 'create');
    Route::post('/product/store', 'store');
});

Route::resource('photos', \App\Http\Controllers\PhotoController::class);
Route::resource('product', ProductController::class);


Route::get('user/{id}', [UserController::class, 'show']);
Route::get('users/new', [UserController::class, 'create']);
Route::post('users/save-new-user', [UserController::class, 'save_user']);
Route::get('users', [UserController::class, 'list']);
