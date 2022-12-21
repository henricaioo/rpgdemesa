<?php
    include('protect.php');
    include 'connect.php';

    $id = $_SESSION['id'];
    $usuario = $_POST['user'];
    $pass = $_POST['senha'];

    $sql = "UPDATE `usuario` SET `user` = '$usuario', `senha` = '$pass' WHERE id_user = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Usuário cadastrado com sucesso</h2><a href='../index.php'>index</a>";
    }
?>