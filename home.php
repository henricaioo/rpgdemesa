<?php
    include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <p>bem vind@ <?php echo $_SESSION['id'] ?></p>
    <a href="mestre.php">mestre</a>
    <a href="logout.php">logout</a>
</body>
</html>