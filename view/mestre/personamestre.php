<?php 
    include('../../scriptphp/protect_mestre.php');
    include '../../scriptphp/connect.php';
    $player = $_POST['player'];
    $sql = "SELECT * FROM personagem WHERE nome = '$player'";
    $res = mysqli_query($conn, $sql);
    $persona = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $player ?></title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="container border border-dark rounded bg-white py-3 my-5">
        <h2 class="text-center">Personagem</h2>
        <form action="../../crud/crudpersona/editarplayer.php" method="post" class="d-flex flex-column align-items-center mb-4">
            <div class="my-3 w-25">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" maxlength="50" readonly class="form-control-plaintext" value="<?php echo $persona['nome'] ?>">
            </div>
            <div class="my-3 w-25">
                <label for="prof">Profissão</label>
                <input type="text" name="prof" readonly class="form-control-plaintext" value="<?php echo $persona['profissao'] ?>">
            </div>
            <div class="my-3 w-25">
                <label for="idade">Idade</label> 
                <input type="number" name="idade" readonly class='form-control-plaintext' value="<?php echo $persona['idade'] ?>">
            </div>
            <div class="my-3 w-25">
                <label for="sexo">Sexo/gênero</label>
                <input type="text" name="sexo" readonly class="form-control-plaintext" value="<?php echo $persona['sexo'] ?>">
            </div>
            <div class="my-3 w-25">
                <label for="backstory">Backstory</label>
                <p name="backstory" class="my-1"><?php echo $persona['backstory'] ?></p>
            </div>
            <div class="my-3 w-25">
                <label for="aparencia">Aparência</label>
                <p name="aparencia" class="my-1"><?php echo $persona['aparencia'] ?></p>
            </div>
            <div class="my-3 w-25">
                <label for="conceito">Conceito</label>
                <p name="conceito" class="my-1"><?php echo $persona['conceito'] ?></p>
            </div>
            <div class="my-3 w-25">
                <label for="qualidade">Qualidades</label>
                <p name="qualidade" class="my-1"><?php echo $persona['qualidades'] ?></p>
            </div>
            <div class="my-3 w-25">
                <label for="defeito">Defeitos</label>
                <p name="defeito" class="my-1"><?php echo $persona['defeitos'] ?></p>
            </div>
        </form>
        <h3 class = 'text-center'>Status</h3>
            <div class='d-flex flex-column align-items-center'>
                <?php
                    $sql = "SELECT * FROM status WHERE player = '$player'";
                    $res = mysqli_query($conn, $sql);
                    $z = 0;
                    while ($status = mysqli_fetch_assoc($res)) {
                        $id = $status['id_statusplayer'];
                        $nome = $status['nome'];
                        $valor = $status['valor'];
                        $z += 1;
                        echo "
                        <div class='d-flex border border-dark rounded mb-3'>
                            <form action='' method='post' id='editstatus$z' class='d-flex flex-column align-items-center p-2'>
                                <div class='d-flex gap-2'>
                                    <label for='nome' class='m-0'>Nome:</label>
                                    <input type='text' name='nome' value='$nome' readonly class='form-control-plaintext p-0' required maxlength='20'>
                                </div>
                                <div class='d-flex gap-2'>
                                    <label for='valor' class='m-0'>Valor:</label>
                                    <input type='text' name='valor' value='$valor' readonly class='form-control-plaintext p-0' required>
                                </div>
                            </form>
                        </div>";
                    }
                ?>
            </div>
    </div>
    <div class="container border border-dark rounded bg-white py-3 my-5">
        <h3 class="text-center">Inventário</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-2">
            
            <?php 
                $sql = "SELECT * FROM inventario WHERE personagem = '$player'";
                $res = mysqli_query($conn, $sql);
                $x = 0;
                while ($item = mysqli_fetch_assoc($res)){
                    $id = $item['id_inventario'];
                    $quant = $item['quant'];
                    $nome = $item['nome'];
                    $descricao = $item['descricao'];
                    $x += 1;

                    echo '
                    <div class="col d-flex flex-column align-items-center">
                        <div class="border border-dark rounded p-2">
                            <h3 class="text-center">Item '.$x.'</h3>
                            <form action="../../crud/cruditem/salvaritem.php" method="post" class="d-flex flex-column align-items-center">
                                <div class="w-100 d-flex gap-2">
                                    <label for="nome">Nome:</label>
                                    <input type="text" name="nome" value="'.$nome.'" readonly class="form-control-plaintext p-0"> 
                                </div>
                                <div class="w-100 d-flex gap-2">
                                    <label for="desc">Descrição:</label>
                                    <input type="text" name="desc" value="'.$descricao.'" readonly class="form-control-plaintext p-0"> 
                                </div>
                                <div class="w-100 d-flex gap-2">
                                    <label for="quant">Quantidade:</label>
                                    <input type="number" name="quant" value="'.$quant.'" readonly class="form-control-plaintext p-0"> 
                                </div>
                            </form> 
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>
    <div class="container border border-dark rounded bg-white py-3 my-5">
        <h3 class="text-center">atributos</h3>
        <div class='d-flex flex-column align-items-center'>
            <?php 
                $sql = "SELECT * FROM atributo WHERE player = '$player'";
                $res = mysqli_query($conn, $sql);
                $y=0;
                while ($status = mysqli_fetch_assoc($res)) {
                    $id = $status['id_atributoplayer'];
                    $nome = $status['nome'];
                    $valor = $status['valor'];
                    $y += 1;
                    echo "
                        <div class='d-flex border border-dark rounded mb-3'>
                            <form method='post' id='editstatus$y' class='d-flex flex-column align-items-center p-2'>
                                <div class='w-100 d-flex gap-2'>
                                    <label for='nome'>Nome:</label>
                                    <input type='text' name='nome' value='$nome' readonly class='form-control-plaintext p-0'>
                                </div>
                                <div class='w-100 d-flex gap-2'>
                                    <label for='valor'>Valor:</label>
                                    <input type='number' name='valor' value='$valor' readonly class='form-control-plaintext p-0'>
                                </div>
                                <input type='hidden' value='$id' name='id'>
                            </form>
                        </div>";
                }
            ?>
        </div>
        <form action="../roll.php" method="POST" class='d-flex flex-column align-items-center p-2'>
            <input type="hidden" name='player' value="<?php echo $player ?>">
            <button type="submit" class="btn btn-info">Rolar dados</button>
        </form>
    </div>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>