<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{

    //criando método
    public function listAllUsers()
    {
        //recuperando todos os usuários
        $users = User::all();

        return view('listAllUsers', ['users' => $users]);

    }

    //forçando a receber um parâmetro inteiro
    public function listUsers(User $user)
    {
        //var_dump($user);

        //retornando a view e passando o parametro recebido no método
        return view('listUser', ['user' => $user]);
    }

}
