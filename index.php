
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container py-5 text-center border border-dark rounded my-5 bg-white">
        <h1>Bem vind@ ao R.P.G.<span class="text-info">*</span> de mesa</h1>
        <p class="text-info fw-semibold">*(Repositório Para Games)</p>
    </div>
    <div class="container border border-dark rounded bg-white py-3">
        <h2 class="text-center">Log-in</h2>
        <form action="scriptphp/login.php" method="POST" class="d-flex flex-column align-items-center">
            <div class="my-3 w-25">
                <label for="user">User</label>
                <input type="text" name="user" class="form-control border-dark">
            </div>
            <div class="my-3 w-25">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control border-dark">
            </div>
            <div class="my-3">
                <button type="submit" class="btn btn-info">entrar</button>
            </div>
        </form>
        <p class="text-center">Não possui um log-in? <a href="cadastro.php" class="text-info" style="text-decoration: none;">cadastre-se</a></p>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>