<?php
use App\Http\Controllers\Controle_Dados;
use App\Http\Controllers\CandidatosController;
use App\Http\Controllers\VagasController;
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
    return view('angular');
});

Route::resource('/dados', Controle_Dados::class);
Route::resource('/dados_vagas', VagasController::class);
Route::resource('/dados_candidatos', CandidatosController::class,);


