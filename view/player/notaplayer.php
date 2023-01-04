<?php 

    include '../../scriptphp/protect.php';
    include '../../scriptphp/connect.php';

    $rp = $_POST['rp'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar nota</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container border border-dark rounded bg-white py-3 my-5">
        <h2 class="text-center">Criar nota</h2>
        <form action="../../crud/crudnota/cadastrarnota.php" method="post" class="d-flex flex-column align-items-center">
            <div class="my-3 w-25">
                <label for="titulo">Titulo(maximo de 15 caracteres)</label>
                <input type="text" name="titulo" class="form-control border-dark" maxlength="15">
            </div>
            <div class="my-3 w-25">
                <label for="nota">Nota</label>
                <textarea name="nota" rows="10" class="form-control border-dark"></textarea>
            </div>
            <input type="hidden" name="rp" value="<?php echo $rp ?>">
            <div class="my-3">
                <button type="submit" class="btn btn-info">Salvar nota</button>
            </div>
        </form>
    </div>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>