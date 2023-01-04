<?php 
    include '../../scriptphp/connect.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        $usuario = $_POST['user'];
        $pass = $_POST['senha'];

        $sql = "INSERT INTO `usuario`(`user`, `senha`, `perfil`) VALUES ('$usuario','$pass','0')";
        try {
            mysqli_query($conn, $sql);
            echo "<h2>Usuário cadastrado com sucesso. <a href='../../index.php' class='text-info' style='text-decoration: none;'>index</a></h2>";
        } catch (\Throwable $th) {
            echo "<h2>Usuário já cadastrado</h2>";
        }
    ?>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>