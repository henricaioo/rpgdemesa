<?php
    include '../scriptphp/protect.php';
    include '../scriptphp/connect.php'; 
    $id=$_POST['id'];
    $sql = "SELECT * FROM atributo WHERE id_atributoplayer = '$id'";
    $res = mysqli_query($conn, $sql);
    $atr = mysqli_fetch_assoc($res);
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
    <form action="atrsalvar.php" method="post">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="<?php echo $atr['nome'] ?>">
        </div>
        <div>
            <label for="valor">Valor</label>
            <input type="number" name="valor" value="<?php echo $atr['valor'] ?>">
        </div>
        <input type="hidden" name="player" value="<?php echo $atr['player'] ?>">
        <input type="hidden" name="id" value="<?php echo $atr['id_statusplayer'] ?>">
        <button type="submit">salvar</button>
    </form>
</body>
</html>