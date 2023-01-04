<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container border border-dark rounded bg-white py-3 my-5">
        <h2 class="text-center">Cadastro</h2>
        <form action="crud/crudplayer/cadastrar.php" method="post" class="d-flex flex-column align-items-center">
            <div class="my-3 w-25">
                <label for="user">Usuário(maximo de 15 caracteres)</label>
                <input type="text" name="user" class="form-control border-dark" maxlength="15" required>
            </div>
            <div class="my-3 w-25">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control border-dark" required>
            </div>
            <div class="my-3">
                <button type="submit" class="btn btn-info">cadastrar</button>
            </div>
        </form>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>