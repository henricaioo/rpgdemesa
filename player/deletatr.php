<?php 
    include('../scriptphp/protect.php');
    include '../scriptphp/connect.php';

    $player = $_SESSION['user'];
    $id = $_POST['id'];

    $sql = "DELETE FROM atributo WHERE id_atributoplayer = ".$id;

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Atributo exluído com sucesso</h2><a href='../home.php'>index</a>";
    }
?>