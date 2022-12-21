<?php
    include 'connect.php';

    $usuario = $_POST['user'];
    $pass = $_POST['senha'];

    $sql = "INSERT INTO `usuario`(`user`, `senha`, `perfil`) VALUES ('$usuario','$pass','0')";
    try {
        mysqli_query($conn, $sql);
        echo "<h2>Usuário cadastrado com sucesso</h2><a href='../index.php'>index</a>";
    } catch (\Throwable $th) {
        echo "Usuário já cadastrado";
    }
?>