<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // Importamos la ruta donde se encuntra el controlador

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

// Creamos una nueva ruta web al controlador y llamara al metodo index
Route::get('/users/{user_id}', [UserController::class, 'index']);
