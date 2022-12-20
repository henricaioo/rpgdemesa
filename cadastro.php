<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="scriptphp/cadastrar.php" method="post">
        <div>
            <label for="user">Usuário</label>
            <input type="text" name="user">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha">
        </div>
        <button type="submit">cadastrar</button>
    </form>
</body>
</html>