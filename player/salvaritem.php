<?php
    include('../scriptphp/protect.php');
    include '../scriptphp/connect.php';

    $id = $_POST['id'];
    $quant = $_POST['quant'];
    $nome = $_POST['nome'];
    $desc = $_POST['desc'];

    $sql = "UPDATE `inventario` SET `quant` = '$quant', `nome` = '$nome', `descricao` = '$desc' WHERE id_inventario = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Item editado com sucesso</h2><a href='../home.php'>home</a>";
    }
?>