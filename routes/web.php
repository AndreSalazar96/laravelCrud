<?php

use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Route;
use App\Http\Facades\Controllers\LoginController;


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

Route::get('/', [PersonasController::class, 'index'])->name('personas.index');
Route::get('/create', [PersonasController::class, 'create'])->name('personas.create');
Route::post('/store', [PersonasController::class, 'store'])->name('personas.store');
Route::get('/edit/{id}', [PersonasController::class, 'edit'])->name('personas.edit');
Route::put('/update/{id}', [PersonasController::class, 'update'])->name('personas.update');
Route::get('/show/{id}', [PersonasController::class, 'show'])->name('personas.show');
Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('personas.destroy');

// // Login route
// // Paginas Views
// Route::view('/login', "login")->name('login');
// Route::view('/registro', "registro")->name('login');

// // request post
// Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
// Route::post('/iniciar-sesion', [LoginController::class, 'login'])->name('iniciar-sesion');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');