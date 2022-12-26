<?php 
    include '../scriptphp/protect.php';
    include '../scriptphp/connect.php';

    $player = $_SESSION['user'];
    $titulo = $_POST['titulo'];
    $nota = $_POST['nota'];
    $rp = $_POST['rp'];

    $sql = "INSERT INTO `anotacaoPlayer`(`titulo`, `anotacao`, `user`, `rpg`) VALUES ('$titulo','$nota','$player', '$rp')";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        echo "<h2>Usuário cadastrado com sucesso</h2><a href='../index.php'>index</a>";
    }

?>