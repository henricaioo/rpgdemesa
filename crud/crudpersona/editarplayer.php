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
    <title>Salvar player</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
<?php 
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $prof = $_POST['prof'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $backstory = $_POST['backstory'];
    $aparencia = $_POST['aparencia'];
    $conceito = $_POST['conceito'];
    $qualidade = $_POST['qualidade'];
    $defeito = $_POST['defeito'];

    $sql = "UPDATE `personagem` SET `nome`='$nome',`profissao`='$prof',`idade`='$idade',`sexo`='$sexo',`backstory`='$backstory',`aparencia`='$aparencia',`conceito`='$conceito',`qualidades`='$qualidade',`defeitos`='$defeito' WHERE `nome` = '$id'";
    try {
        mysqli_query($conn, $sql);
        echo "<h2>Personagem editado com sucesso. <a href='../../home.php' class='text-info' style='text-decoration: none;'>Home</a></h2>";
    } catch (\Throwable $th) {
        echo "<h2>Já existe um personagem cadastrado com esse nome</h2>";
    }
?>
<script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>