<?php
    include('../scriptphp/protect.php');
    include '../scriptphp/connect.php';

    $player = $_POST['player'];
    $quant = $_POST['quant'];
    $nome = $_POST['nome'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `inventario`(`personagem`, `quant`, `nome`, `descricao`) VALUES ('$player','$quant','$nome','$desc')";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Item salvo com sucesso</h2><a href='../home.php'>home</a>";
    }
?>