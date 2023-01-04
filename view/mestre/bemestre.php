<?php 
    include("../../scriptphp/protect.php");
    include "../../scriptphp/connect.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tornar-se mestre</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="container border border-dark rounded py-2 my-5">
        <h2 class="text-center">Digite a senha secreta</h2>
        <form action="../../crud/crudmestre/mestresalvar.php" method="post" class="d-flex flex-column align-items-center">
            <div class="w-25">
                <label for="senha">Senha secreta</label>
                <input type="password" name="senha" required maxlength="25" class="form-control border-dark">
            </div>
            <div class="my-3"><button type="submit" class="btn btn-info">Criar</button></div>
        </form>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>