<?php
    include '../scriptphp/protect.php';
    include '../scriptphp/connect.php'; 
    $id=$_POST['id'];
    $sql = "SELECT * FROM status WHERE id_statusplayer = '$id'";
    $res = mysqli_query($conn, $sql);
    $statu = mysqli_fetch_assoc($res);
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
    <form action="statussalvar.php" method="post">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="<?php echo $statu['nome'] ?>">
        </div>
        <div>
            <label for="valor">Valor</label>
            <input type="number" name="valor" value="<?php echo $statu['valor'] ?>">
        </div>
        <input type="hidden" name="player" value="<?php echo $statu['player'] ?>">
        <input type="hidden" name="id" value="<?php echo $statu['id_statusplayer'] ?>">
        <button type="submit">salvar</button>
    </form>
</body>
</html>