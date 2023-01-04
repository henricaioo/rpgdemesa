<?php 
    include('../../scriptphp/protect.php');
    include '../../scriptphp/connect.php';

    $sql = "DELETE FROM usuario WHERE user = '".$_SESSION['user']."'";
    mysqli_query($conn, $sql);

    $sql = "DELETE FROM personagem WHERE user = '".$_SESSION['user']."'";
    mysqli_query($conn, $sql);

    $sql = "DELETE FROM rpg WHERE criador = '".$_SESSION['user']."'";
    mysqli_query($conn, $sql);

    $sql = "DELETE FROM anotacaoplayer WHERE user = '".$_SESSION['user']."'";
    mysqli_query($conn, $sql);

    header('location: ../../index.php');
?>