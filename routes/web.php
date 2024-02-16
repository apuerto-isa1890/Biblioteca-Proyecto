<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\UsuarioController;
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

Route::middleware('auth')->group(function() {
    Route::resource('author', AuthorController::class);
    Route::get('author/json/get', [AuthorController::class, 'json']);

    Route::resource('categoria', CategoriaController::class);
    Route::get('categoria/json/get', [ CategoriaController::class, 'json']);

    Route::resource('editorial', EditorialController::class);
    Route::get('editorial/json/get', [ EditorialController::class, 'json']);

    Route::resource('usuario', UsuarioController::class);
    Route::get('usuario/json/get', [ UsuarioController::class, 'json']);

    Route::resource('recurso', RecursoController::class);
    Route::get('recurso/json/get', [ RecursoController::class, 'json']);

    Route::resource('prestamo', PrestamoController::class);
    Route::put('prestamo/devolucion/{id}', [PrestamoController::class, 'devolucion']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
