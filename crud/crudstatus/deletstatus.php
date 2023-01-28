<?php 
    include('../../scriptphp/protect.php');
    include '../../scriptphp/connect.php';

    $player = $_SESSION['user'];
    $id = $_POST['id'];

    $sql = "DELETE FROM status WHERE id_statusplayer = ".$id;

    if (mysqli_query($conn, $sql)) {
        echo "<h2>status exluído com sucesso <a href='../../home.php'>index</a></h2>";
    }
?>
