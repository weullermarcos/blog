<html>

<head>
    <title>Listagem de Usuários</title>
</head>
<body>

    <table>
        <tr>
            <td>#ID</td>
            <td>Nome:</td>
            <td>E-mail:</td>
            <td>Ações:</td>
        </tr>

        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href=""> Ver Usuário </a>
                    <form action="" method="POST">
                        <input type="hidden" name="user" value="">
                        <input type="submit" value="Remover">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</body>
</html>
