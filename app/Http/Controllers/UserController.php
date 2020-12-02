<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser()
    {
        //criando e salvando um novo usuário
//        $user = new User();
//        $user->name = 'Weuller';
//        $user->email = 'weuller@mail.com';
//        $user->password = Hash::make('123');
//
//        $user->save();
//
//        echo "<h1> Listagem de Usuário </h1>";

        //buscando o usuário do banco com id = 1
        $user = User::where('id', '=', 1)->first();
        //dd($user); //imprime um debug na tela

        //chamando a view e passando parametros para ela
        return view('listUser', [
            'user' => $user
        ]);

    }
}
