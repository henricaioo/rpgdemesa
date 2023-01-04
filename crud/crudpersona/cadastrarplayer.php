<?php
    include '../../scriptphp/protect.php';
    include '../../scriptphp/connect.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar personagem</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php

        $cria = $_SESSION['user'];
        $rp = $_POST['rp'];
        $nome = $_POST['nome'];
        $prof = $_POST['prof'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $backstory = $_POST['backstory'];
        $aparencia = $_POST['aparencia'];
        $conceito = $_POST['conceito'];
        $qualidade = $_POST['qualidade'];
        $defeito = $_POST['defeito'];

        $sql = "INSERT INTO `personagem`(`nome`, `profissao`, `idade`, `sexo`, `backstory`, `aparencia`, `conceito`, `qualidades`, `defeitos`, `user`, `rpg`) VALUES ('$nome','$prof','$idade','$sexo','$backstory','$aparencia','$conceito','$qualidade','$defeito','$cria','$rp')";


        try {
            mysqli_query($conn, $sql);
            echo "<h2>Personagem cadastrado com sucesso. <a href='../../home.php' class='text-info' style='text-decoration: none;'>Home</a></h2>";
        } catch (\Throwable $th) {
            echo "<h2>Já existe um personagem cadastrado com esse nome</h2>";
        }

    ?>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>