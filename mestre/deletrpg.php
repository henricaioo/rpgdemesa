<?php 
    include('../scriptphp/protect_mestre.php');
    include '../scriptphp/connect.php';

    $rp = $_POST['delet'];

    $sql = "DELETE FROM rpg WHERE id_rpg = ".$rp;

    if (mysqli_query($conn, $sql)) {
        echo "<h2>RPG excluído com sucesso</h2><a href='mestre.php'>index</a>";
    }
?>