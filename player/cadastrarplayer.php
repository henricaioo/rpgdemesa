<?php
    include '../scriptphp/protect.php';
    include '../scriptphp/connect.php';

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
        echo "<h2>Usuário cadastrado com sucesso</h2><a href='rpgplayer.php'>index</a>";
    } catch (\Throwable $th) {
        echo "Já existe um rpg cadastrado com esse nome";
    }
    
?>