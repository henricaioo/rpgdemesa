<?php 
    include('../scriptphp/protect.php');
    include '../scriptphp/connect.php';

    $player = $_SESSION['user'];
    $id = $_POST['id'];

    $sql = "DELETE FROM anotacaoPlayer WHERE id_anotacaoplayer = ".$id."AND user = '$player'";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Nota excluída com sucesso</h2><a href='rpgplayer.php'>index</a>";
    }
?>