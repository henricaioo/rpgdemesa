<?php
    include 'protect_mestre.php';
    include 'connect.php';

    $cria = $_SESSION['user'];
    $nome = $_POST['nome'];
    $premissa = $_POST['resumo'];

    $sql = "INSERT INTO `rpg`(`nome`, `premissa`, `criador`) VALUES ('$nome','$premissa','$cria')";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>RPG cadastrado com sucesso</h2><a href='../mestre/mestre.php'>index</a>";
    }
    
?>