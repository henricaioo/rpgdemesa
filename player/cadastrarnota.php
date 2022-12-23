<?php 
    include '../scriptphp/protect.php';
    include '../scriptphp/connect.php';

    $titulo = $_POST['titulo'];
    $nota = $_POST['nota'];
    $rp = $_POST['rp'];

    $sql = "INSERT INTO `anotacaoplayer`(`titulo`, `anotacao`, `player`, 'rpg') VALUES ('$titulo','$nota','$user', '$rp')";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Usuário cadastrado com sucesso</h2><a href='../index.php'>index</a>";
    }

?>