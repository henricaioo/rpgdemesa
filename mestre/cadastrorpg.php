<?php 
    include("../scriptphp/protect_mestre.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="../scriptphp/cadastrarrpg.php" method="post">
        <div>
            <label for="nome">Nome do RPG</label>
            <input type="text" name="nome">
        </div>
        <div>
            <label for="resumo">Resumo/premissa</label>
            <textarea name="resumo" rows="10"></textarea>
        </div>
        <button type="submit">cadastrar</button>
    </form>
</body>
</html>