<?php
    include('../../scriptphp/protect.php');
    include '../../scriptphp/connect.php';

    $id = $_POST['id'];
    $player = $_POST['player'];
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];

    $sql = "UPDATE `atributo` SET `nome` = '$nome', `valor` = '$valor' WHERE id_atributoplayer = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Atributo editado com sucesso</h2><a href='../home.php'>home</a>";
    }
?>
