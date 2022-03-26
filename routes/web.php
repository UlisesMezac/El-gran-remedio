<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PerfilController;


Route::get('/', function () {
    return view('welcome');
});


///LOGIN////
Route::get('/login',[LoginController::class,'create'])->name('login.index');
Route::post('/login',[LoginController::class,'store'])->name('login.store');
Route::get('/logout',[LoginController::class,'logout'])->name('login.logout');

///LOGIN////
Route::get('/register',[RegistroController::class,'create'])->name('register.index');
Route::post('/register',[RegistroController::class,'store'])->name('register.store');


//MENÚ///
Route::get('/menuPrin',[ProductosController::class,'index'])->name('productos.index');
Route::get('/perfilProductos', function () {return view('perfilProductos');});
Route::get('/perfilProductos/{id}',[ProductosController::class,'show'])->name('productos.show');

Route::get('/formProductos',[ProductosController::class,'create'])->name('productos.create');
Route::post('/formProductos',[ProductosController::class,'store'])->name('productos.store');
    
//PERFIL USUARIO//

Route::get('/perfilUsuario',[RegistroController::class,'view'])->name('perfil.view');
Route::get('/editarUsuario/{user}',[RegistroController::class,'edit'])->name('perfil.editar');








Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
