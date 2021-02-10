<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;

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
    return view('welcome');
});

Route::get('/hello', function () {
    return view('helloworld', [
    	'mes' => $mes,
    	'ano' => $ano,
    	'eventos' => $eventos
]);
});

Route::get('/testIdLibro/{id}', [LibrosController::class, 'seeLibroFromId']);

Route::get("/nombres/{nombre}", function ($nombre) {
    return "Hola $nombre";
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
