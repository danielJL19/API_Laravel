<?php

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
/** COMO CONSUMIR UNA API DESDE POSTMAN
 * en el Headers de postman, se debe crear una fila con el atributo key : Accept y value: application/json
 */

 /**
  * http://127.0.0.1:8000/api/clients //ejemplo para ver una API, es importante poner "/api/"
  */
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/clients',[ClientController::class,'index']);//MOSTRAR TODOS LOS CLIENTES
Route::post('/clients',[ClientController::class,'store']);//CREAR UN NUEVO CLIENTE
Route::get('/clients/{client}',[ClientController::class,'show']);//MOSTRAR UN CLIENTE
Route::put('/clients/{client}',[ClientController::class,'update']);//ACTUALIZAR UN CLIENTE
Route::delete('/clients/{client}',[ClientController::class,'destroy']);//ELIMINAR UN CLIENTE
//TIPO HTTP = DELETE 
// URL = http://127.0.0.1:8000/api/clients/{client}