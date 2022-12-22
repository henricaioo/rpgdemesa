<?php 

    include '../scriptphp/protect.php';
    include '../scriptphp/connect.php';

    $rp = $_POST['rp'];

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
    <form action="cadastrarnota.php" method="post">
        <div>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo">
        </div>
        <div>
            <label for="nota">Nota</label>
            <textarea name="nota" rows="10"></textarea>
        </div>
        <input type="hidden" name="rp" value="<?php echo $rp ?>">
        <button type="submit">cadastrar</button>
    </form>
</body>
</html>