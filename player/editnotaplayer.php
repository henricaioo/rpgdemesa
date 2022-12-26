<?php 

    include '../scriptphp/protect.php';
    include '../scriptphp/connect.php';

    $id = $_POST['id'];
    $sql = "SELECT * FROM anotacaoPlayer WHERE id_anotacaoplayer = '$id'";
    $res = mysqli_query($conn, $sql);
    $nota = mysqli_fetch_assoc($res);

    $titulo = $nota['titulo'];
    $texto = $nota['anotacao'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <form action="editnota.php" method="post">
        <div>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" value="<?php echo $titulo ?>">
        </div>
        <div>
            <label for="nota">Nota</label>
            <textarea name="nota" rows="10"><?php echo $texto ?></textarea>
        </div>
        <input type="hidden" value="<?php echo $id ?>" name="id">
        <button type="submit">salvar</button>
    </form>
</body>
</html>