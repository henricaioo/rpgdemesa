<?php 
    include('../scriptphp/protect.php');
    include '../scriptphp/connect.php';

    $player = $_POST['player'];

    $sql = "DELETE FROM personagem WHERE nome = '$player'";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Personagem exluído com sucesso</h2><a href='../home.php'>index</a>";
    }
?>