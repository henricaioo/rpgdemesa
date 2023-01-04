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
    <title>salvar rpg</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
<?php
        $cria = $_SESSION['user'];
        $nome = $_POST['nome'];
        $premissa = $_POST['resumo'];

        $sql = "INSERT INTO `rpg`(`nome`, `premissa`, `criador`) VALUES ('$nome','$premissa','$cria')";


        try {
            mysqli_query($conn, $sql);
            echo "<h2>RPG criado com sucesso. <a href='../../home.php' class='text-info' style='text-decoration: none;'>home</a></h2>";
        } catch (\Throwable $th) {
            echo "Já existe um rpg com esse nome";
        }

    ?>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>