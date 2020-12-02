<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

//Criando uma nova rota
//Route::get('listagem-usuario', 'UserController@listUser');

//forma auternativa de se fazer
Route::get('listagem-usuario',[UserController::class, 'listUser']);


