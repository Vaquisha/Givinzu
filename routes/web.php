<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\RegisterController;
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
    return view('auth.inicio');
});

/* crear-cuenta se encuenta -> layout/app */
Route::get('/register', [RegisterController::class, 'index']);


/* Vista de ventada una vez iniciado sesion */
Route::get('/principal', [PrincipalController::class, 'principal']);
