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
    <title>Cadastro player</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container border border-dark rounded bg-white py-3 my-5">
        <h2 class="text-center">Criar personagem</h2>
        <form action="../../crud/crudpersona/cadastrarplayer.php" method="post" class="d-flex flex-column align-items-center">
            <div class="my-3 w-25">
                <label for="nome">Nome (maximo de 50 caracteres)</label>
                <input type="text" name="nome" maxlength="50" class="form-control border-dark" required>
            </div>
            <div class="my-3 w-25">
                <label for="prof">Profissão</label>
                <input type="text" name="prof" class="form-control border-dark">
            </div>
            <div class="my-3 w-25">
                <label for="idade">Idade</label> 
                <input type="number" name="idade" class="form-control border-dark" required>
            </div>
            <div class="my-3 w-25">
                <label for="sexo">Sexo/gênero</label>
                <input type="text" name="sexo" class="form-control border-dark" required>
            </div>
            <div class="my-3 w-25">
                <label for="backstory">Backstory</label>
                <textarea name="backstory" rows="10" class="form-control border-dark" required></textarea>
            </div>
            <div class="my-3 w-25">
                <label for="aparencia">Aparência</label>
                <textarea name="aparencia" rows="10" class="form-control border-dark" required></textarea>
            </div>
            <div class="my-3 w-25">
                <label for="conceito">Conceito</label>
                <textarea name="conceito" rows="10" class="form-control border-dark" required></textarea>
            </div>
            <div class="my-3 w-25">
                <label for="qualidade">Qualidades</label>
                <textarea name="qualidade" rows="3" class="form-control border-dark"></textarea>
            </div>
            <div class="my-3 w-25">
                <label for="defeito">Defeitos</label>
                <textarea name="defeito" rows="3" class="form-control border-dark"></textarea>
            </div>
            <input type="hidden" value="<?php echo $rp ?>" name="rp">
            <button type="submit" class="btn btn-info">Salvar personagem</button>
        </form>
    </div>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>