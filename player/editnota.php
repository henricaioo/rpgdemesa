<?php
    include('../scriptphp/protect.php');
    include '../scriptphp/connect.php';

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $nota = $_POST['nota'];

    $sql = "UPDATE `anotacaoPlayer` SET `titulo` = '$titulo', `anotacao` = '$nota' WHERE id_anotacaoplayer = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Nota editada com sucesso</h2><a href='../index.php'>index</a>";
    }
?>