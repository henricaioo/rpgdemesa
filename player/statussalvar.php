<?php
    include('../scriptphp/protect.php');
    include '../scriptphp/connect.php';

    $id = $_POST['id'];
    $player = $_POST['player'];
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];

    $sql = "UPDATE `status` SET `nome` = '$nome', `valor` = '$valor' WHERE id_statusplayer = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Status editado com sucesso</h2><a href='../home.php'>home</a>";
    }
?>