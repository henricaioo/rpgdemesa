<?php 
    include '../scriptphp/protect.php';
    include '../scriptphp/connect.php';

    $player = $_POST['player'];
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];

    $sql = "INSERT INTO `status`(`nome`, `valor`, `player`) VALUES ('$nome','$valor','$player')";
    if (mysqli_query($conn, $sql)) {
        echo "<h2>Status cadastrado com sucesso</h2><a href='../index.php'>index</a>";
    }
?>