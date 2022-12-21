<?php 
    include('protect.php');
    include 'connect.php';

    $sql = "DELETE FROM usuario WHERE id_user = ".$_SESSION['id'];

    mysqli_query($conn, $sql);
?>