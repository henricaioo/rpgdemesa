<?php 
include '../../scriptphp/protect.php';
include '../../scriptphp/connect.php';
$player=$_POST['player'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="cadastrarstatus.php" method="post">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome">
        </div>
        <div>
            <label for="valor">Valor</label>
            <input type="number" name="valor">
        </div>
        <input type="hidden" name="player" value="<?php echo $player?>">
        <button type="submit">cadastrar</button>
    </form>
</body>
</html>