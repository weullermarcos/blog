<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Form\TestController;

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


//Exemplo: Route::metodo('URL',[Controller::class, 'metodo'])->name('nroute_name');

//Agrupando rotas
Route::group(['namespace' => 'Form'], function (){

    /*
    * GET:
    */
//Criando
    Route::get('usuarios', [TestController::class, 'listAllUsers'])->name('users.listAll');
    Route::get('usuarios/novo', [TestController::class, 'FormAddUser']);
    Route::get('usuarios/editar/{user}', [TestController::class, 'FormEditUser']);
    Route::get('usuarios/{user}', [TestController::class, 'listUsers']);

    /*
     * POST:
    */

    Route::post('usuarios/store', [TestController::class, 'storeUser'])->name('users.store');

    /*
     * PUT/PATCH:
    */

    Route::put('usuarios/edit/{user}', [TestController::class, 'edit'])->name('users.edit');

    /*
     * DELETE:
    */

    Route::delete('usuarios/destroy/{user}', [TestController::class, 'destroy'])->name('user.destroy');


});




