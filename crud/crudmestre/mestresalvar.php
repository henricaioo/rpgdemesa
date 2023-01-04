<?php
    include('../../scriptphp/protect.php');
    include '../../scriptphp/connect.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo mestre</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        $user = $_SESSION['user'];
        $senha = $_POST['senha'];
        $secret = 'zeca es mayor';

        $sql = "UPDATE `usuario` SET `perfil` = 1 WHERE `user` = '$user'";

        if ($senha == $secret ) {
            if(mysqli_query($conn, $sql)){
                echo "<h2>Parabens agora vc é um mestre!!. <a href='../../home.php' class='text-info' style='text-decoration: none;'>home</a></h2>";
                $_SESSION['perfil'] = 1;
            }
        }else {
            echo "<h2>senha incorreta</h2>";
        }
    ?>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>