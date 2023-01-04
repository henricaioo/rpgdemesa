<?php 
    include("../../scriptphp/protect_mestre.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar RPG</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container border border-dark rounded py-2 my-5">
        <h2 class="text-center">Criar RPG</h2>
        <form action="../../crud/crudmestre/cadastrarrpg.php" method="post" class="d-flex flex-column align-items-center">
            <div class="w-25">
                <label for="nome">Nome do RPG(maximo de 25 caracteres)<br>OBS: você não vai poder editar o nome depois.</label>
                <input type="text" name="nome" required maxlength="25" class="form-control border-dark">
            </div>
            <div class="w-25">
                <label for="resumo">Resumo/premissa</label>
                <textarea name="resumo" rows="10" class="form-control border-dark"></textarea>
            </div>
            <div class="my-3"><button type="submit" class="btn btn-info">Criar</button></div>
        </form>
        <script src="../../js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>