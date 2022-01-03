<?php

use App\Http\Controllers\CompraController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\VentaController;
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

Route::get('/', function () {
	return view('principal');
})->name('principal');
Route::get('/comprar', [CompraController::class, 'index'] );
Route::get('/vender', [VentaController::class, 'index'] );

Route::get('/informacion', function () {
	return "Ver informacion de bitcoins";
});
Route::get('/cuenta/login', function () {
	return "Formulario para acceder";
});
Route::get('/cuenta/perfil/{usuario?}', [PerfilController::class, 'index']  );
Route::get('/cuenta/cartera/enviar', function ($usuario=null) {
	return "Hola, esta es tu cartera, acá´puedes retirar tus BTC's";
});
Route::get('/cuenta/cartera/recibir', function ($usuario=null) {
	return "Hola, esta es tu cartera, acá´puedes recibir tus BTC's desde el exterior";
});
Route::get('/cuenta/cartera/transacciones', function ($usuario=null) {
	return "Hola, acá se almacenan tus transacciones históricas";
});
