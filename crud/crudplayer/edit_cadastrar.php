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
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        $id = $_SESSION['id'];
        $user = $_SESSION['user'];
        $usuario = $_POST['user'];
        $pass = $_POST['senha'];

        $sql1 = "UPDATE `rpg` SET `criador` = '$usuario' WHERE criador = '$user'";
        $sql2 = "UPDATE `personagem` SET `user` = '$usuario' WHERE user = '$user'";
        $sql3 = "UPDATE `anotacaoPlayer` SET `user` = '$usuario' WHERE user = '$user'";

        $sql = "UPDATE `usuario` SET `user` = '$usuario', `senha` = '$pass' WHERE id_user = $id";

        try {
            mysqli_query($conn, $sql);
            mysqli_query($conn, $sql1);
            mysqli_query($conn, $sql2);
            mysqli_query($conn, $sql3);
            echo "<h2>Usuário editado com sucesso. <a href='../../scriptphp/logout.php' class='text-info' style='text-decoration: none;'>index</a></h2>";
        } catch (\Throwable $th) {
            echo $sql;
            echo $sql1;
            echo $sql2;
            echo $sql3;
            echo "Já existe um usuário cadastrado com esse nome";
        }
    ?>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>