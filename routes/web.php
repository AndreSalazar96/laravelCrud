<?php

use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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
 
// CRUD de Personas
Route::get('/', [PersonasController::class, 'index'])->middleware('auth')->name('personas.index');
Route::get('/create', [PersonasController::class, 'create'])->middleware('auth')->name('personas.create');
Route::post('/store', [PersonasController::class, 'store'])->middleware('auth')->name('personas.store');
Route::get('/edit/{id}', [PersonasController::class, 'edit'])->middleware('auth')->name('personas.edit');
Route::put('/update/{id}', [PersonasController::class, 'update'])->middleware('auth')->name('personas.update');
Route::get('/show/{id}', [PersonasController::class, 'show'])->middleware('auth')->name('personas.show');
Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->middleware('auth')->name('personas.destroy');
// End CRUD de Personas

// Login route
// Paginas Views
Route::view('/login', "login")->name('login');
Route::view('/register', "register")->name('register');
// Route::view('/', "index")->name('/');

// request post
Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); 
// EndLogin route