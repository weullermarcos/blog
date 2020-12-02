<html>

<head>
    <title>Cadastro de usuário</title>
</head>

<body>

    <form action="{{route('users.store')}}" method="POST">

        @csrf
        Nome: <input type="text" name="name"> <br/><br/>
        E-mail: <input type="email" name="email"> <br/><br/>
        Senha: <input type="password" name="password"> <br/><br/>

        <input type="submit" value="Cadastrar Usuário">

    </form>

</body>
</html>
