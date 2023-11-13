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

use App\Http\Controllers\HamburgueriaControlador;

Route::get('/', [HamburgueriaControlador::class, 'index']);
Route::post('/', [HamburgueriaControlador::class, 'cadastrar']);
Route::get('/cliente', [HamburgueriaControlador::class, 'verClientes']);
Route::get('/principal', 'App\Http\Controllers\PrincipalController@index');


Route::get('/cardapio', [HamburgueriaControlador::class, 'verCardapio']);


Route::get('/home',[HamburgueriaControlador::class, 'verHome']);


