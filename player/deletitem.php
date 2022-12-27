<?php 
    include('../scriptphp/protect.php');
    include '../scriptphp/connect.php';

    $id = $_POST['id'];

    $sql = "DELETE FROM inventario WHERE id_inventario = ".$id;

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Item exluído com sucesso</h2><a href='../home.php'>index</a>";
    }
?>