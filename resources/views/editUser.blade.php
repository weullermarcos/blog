<html>

<head>
    <title>Edição de usuário</title>
</head>

<body>

<form action="{{route('users.edit', ['user' => $user->id])}}" method="POST">

    @csrf
    @method('PUT')
    Nome: <input type="text" name="name" value="{{$user->name}}"> <br/><br/>
    E-mail: <input type="email" name="email" value="{{$user->email}}"> <br/><br/>
    Senha: <input type="password" name="password" value=""> <br/><br/>

    <input type="submit" value="Editar Usuário">

</form>

</body>
</html>
