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
    <title>cadastrar</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php 
        $id = $_POST['id'];

        $sql = "DELETE FROM inventario WHERE id_inventario = ".$id;

        if (mysqli_query($conn, $sql)) {
            echo "<h2>Item exluído com sucesso. <a href='../../home.php' class='text-info' style='text-decoration: none;'>home</a></h2>";
        }
    ?>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>