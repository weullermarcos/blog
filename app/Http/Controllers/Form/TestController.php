<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function FormAddUser()
    {
        //retornando a tela de cadastro
        return view('addUser');

    }

    public function storeUser(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        //salvando usuário no banco de dados
        $user->save();

        //retornando para a lista de todos os usuários
        return redirect()->route('users.listAll');

    }

    public function edit(User $user, Request $request)
    {

        $user->name = $request->name;

        //fazendo validação de campo de e-mail
        if(filter_var($request->email, FILTER_VALIDATE_EMAIL)){

            $user->email = $request->email;
        }

        //verifica se a senha não é vazia
        if(!empty($request->password)){

            $user->password = Hash::make($request->password);
        }

        $user->save();

        //retornando para a lista de todos os usuários
        return redirect()->route('users.listAll');

    }

    public function FormEditUser(User $user)
    {

        //retornando a tela de edição
        return view('editUser', ['user' => $user]);

    }

    //metodo para apagar usuário
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.listAll');
    }

}
