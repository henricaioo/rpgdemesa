<?php 
    include('../scriptphp/protect.php');
    include '../scriptphp/connect.php';

    $player = $_SESSION['user'];
    $id = $_POST['delet'];

    $sql = "DELETE FROM anotacaoPlayer WHERE id_anotacaoplayer = ".$rp."AND player =". $player;

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Nota excluída com sucesso</h2><a href='rpgplayer.php'>index</a>";
    }
?>