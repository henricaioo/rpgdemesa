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
    <form action="cadastrarplayer.php" method="post">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome">
        </div>
        <div>
            <label for="prof">Profissão</label>
            <input type="text" name="prof">
            
        </div>
        <div>
            <label for="idade">Idade</label>
            <input type="number" name="idade">
        </div>
        <div>
            <label for="sexo">Sexo/gênero</label>
            <input type="text" name="sexo">
        </div>
        <div>
            <label for="backstory">Backstory</label>
            <textarea name="backstory" rows="10"></textarea>
        </div>
        <div>
            <label for="aparencia">Aparência</label>
            <textarea name="aparencia" rows="10"></textarea>
        </div>
        <div>
            <label for="conceito">Conceito</label>
            <textarea name="conceito" rows="10"></textarea>
        </div>
        <div>
            <label for="qualidade">Qualidades</label>
            <textarea name="qualidade" rows="3"></textarea>
        </div>
        <div>
            <label for="defeito">Defeitos</label>
            <textarea name="defeito" rows="3"></textarea>
        </div>
        <input type="hidden" value="<?php echo $rp ?>" name="rp">
        <button type="submit">cadastrar</button>
    </form>
</body>
</html>