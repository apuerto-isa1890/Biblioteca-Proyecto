<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EditorialController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('author', AuthorController::class);
Route::resource('categoria', CategoriaController::class);
Route::resource('editorial', EditorialController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
