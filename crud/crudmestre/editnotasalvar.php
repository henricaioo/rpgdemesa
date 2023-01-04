<?php
    include('../../scriptphp/protect_mestre.php');
    include '../../scriptphp/connect.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar nota</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
<?php 
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $nota = $_POST['nota'];
    $publica = $_POST['publica'];

    $sql = "UPDATE `anotacaoRpg` SET `titulo` = '$titulo', `anotacao` = '$nota', `publica` = '$publica' WHERE id_anotacao = $id";
    if (mysqli_query($conn, $sql)) {
        echo "<h2>Nota editada com sucesso. <a href='../../home.php' class='text-info' style='text-decoration: none;'>home</a></h2>";
    }
?>
<script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>