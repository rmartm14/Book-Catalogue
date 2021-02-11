<?php

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



Route::get("/nombres/{nombre}", function ($nombre) {
    return "Hola $nombre";
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('book', 'BookController');

Route::get("/catalogue", [App\Http\Controllers\BookController::class, 'index'])->name('home');

Route::post("/newBook", [App\Http\Controllers\BookController::class, 'store']);

Route::delete("/deleteBook/{id}", [App\Http\Controllers\BookController::class, 'delete']);

Route::resource('User', 'UserController');

Route::get("/users", [App\Http\Controllers\UserController::class, 'index']);

Route::delete("/deleteBook/{id}", [App\Http\Controllers\UserController::class, 'delete']);
