<?php
    include('scriptphp/protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar perfil</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container border border-dark rounded bg-white py-3 my-5">
        <form action="crud/crudplayer/edit_cadastrar.php" method="post" class="d-flex flex-column align-items-center">
            <h1 class="text-center">Editar login</h1>
            <div class="my-3 w-25">
                <label for="user" >Usuário(maximo de 15 caracteres)</label>
                <input type="text" name="user" value="<?php echo $_SESSION['user'] ?>" class="form-control border-dark" maxlength="15">
            </div>
            <div class="my-3 w-25">
                <label for="senha">Nova senha</label>
                <input type="password" name="senha" class="form-control border-dark">
            </div>
            <div class="my-3">
                <button type="submit" class="btn btn-info">salvar</button>
            </div>
        </form>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>