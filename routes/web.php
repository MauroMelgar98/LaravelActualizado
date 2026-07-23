<?php
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/clientes',[ClienteController::class,'index']) -> name ('clientes.index');
Route::get('/clientes',[ClienteController::class,'create']) -> name ('clientes.create');
Route::post('/clientes',[ClienteController::class,'store']) -> name ('clientes.store');
Route::middleware('guest')->group(function (){
    Route::get('/login',[AuthController::class, 'mostrarLogin'])
    -> name('login');
    Route::post('/login',[AuthController::class, 'IniciarSesion'])
    -> name('login.procesar');
});

