<?php 
    include('../../scriptphp/protect.php');
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
                <label for="nome">Nome (maximo de 50 caracteres)</label>
                <input type="text" name="nome" maxlength="50" class="form-control border-dark" required value="<?php echo $persona['nome'] ?>">
            </div>
            <div class="my-3 w-25">
                <label for="prof">Profissão</label>
                <input type="text" name="prof" class="form-control border-dark" value="<?php echo $persona['profissao'] ?>">
            </div>
            <div class="my-3 w-25">
                <label for="idade">Idade</label> 
                <input type="number" name="idade" class="form-control border-dark" required value="<?php echo $persona['idade'] ?>">
            </div>
            <div class="my-3 w-25">
                <label for="sexo">Sexo/gênero</label>
                <input type="text" name="sexo" class="form-control border-dark" required value="<?php echo $persona['sexo'] ?>">
            </div>
            <div class="my-3 w-25">
                <label for="backstory">Backstory</label>
                <textarea name="backstory" rows="10" class="form-control border-dark" required><?php echo $persona['backstory'] ?></textarea>
            </div>
            <div class="my-3 w-25">
                <label for="aparencia">Aparência</label>
                <textarea name="aparencia" rows="10" class="form-control border-dark" required><?php echo $persona['aparencia'] ?></textarea>
            </div>
            <div class="my-3 w-25">
                <label for="conceito">Conceito</label>
                <textarea name="conceito" rows="10" class="form-control border-dark" required><?php echo $persona['conceito'] ?></textarea>
            </div>
            <div class="my-3 w-25">
                <label for="qualidade">Qualidades</label>
                <textarea name="qualidade" rows="3" class="form-control border-dark"><?php echo $persona['qualidades'] ?></textarea>
            </div>
            <div class="my-3 w-25">
                <label for="defeito">Defeitos</label>
                <textarea name="defeito" rows="3" class="form-control border-dark"><?php echo $persona['defeitos'] ?></textarea>
            </div>
            <input type="hidden" value="<?php echo $player ?>" name="id">
            <button type="submit" class="btn btn-info">Salvar alterações</button>
        </form>
        <h3 class = 'text-center'>Status</h3>
            <form action='../../crud/crudstatus/cadastrarstatus.php' method='post' class="d-flex flex-column align-items-center mb-4">
                <div class="mb-3 w-25">
                    <label for="nome">Nome (maximo 20 caracteres)</label>
                    <input type="text" name="nome" class="form-control border-dark" required maxlength='20'>
                </div>
                <div class="mb-3 w-25">
                    <label for="valor">Valor</label>
                    <input type="number" name="valor" class="form-control border-dark">
                </div>
                <input type='hidden' value='<?php echo $player ?>' name='player'>
                <button type='submit' class="btn btn-info">adicionar status</button>
            </form>
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
                            <form action='../../crud/crudstatus/statussalvar.php' method='post' id='editstatus$z' class='d-flex flex-column align-items-center p-2'>
                                <div>
                                    <label for='nome'>Nome(maximo 20 caracteres)</label>
                                    <input type='text' name='nome' value='$nome' class='form-control border-dark' required maxlength='20'>
                                </div>
                                <div>
                                    <label for='valor'>Valor</label>
                                    <input type='number' name='valor' value='$valor' class='form-control border-dark' required>
                                </div>
                                <input type='hidden' value='$id' name='id'>
                            </form>
                            <div class='border-start border-dark d-flex flex-column justify-content-center'>
                                <div class='d-flex flex-column align-items-center mx-2'>
                                    <button type='submit' form='editstatus$z' class='btn btn-info my-1'>Salvar alterações</button>
                                    <form action='../../crud/crudstatus/deletstatus.php' method='post'>
                                        <input type='hidden' value='$id' name='id'>
                                        <button type='submit' class='btn btn-info my-1'>Excluir status</button>
                                    </form>
                                </div>
                            </div>
                        </div>";
                    }
                ?>
            </div>
    </div>
    <div class="container border border-dark rounded bg-white py-3 my-5">
        <h3 class="text-center">Itens</h3>
        <h5 class="text-center">salvar item</h5>
        <form action="../../crud/cruditem/cadastraritem.php" method="post" class="d-flex flex-column align-items-center">
            <div class="my-3 w-25">
                <label for="nome">Nome (maximo de 40 caracteres)</label>
                <input type="text" name="nome" class="form-control border-dark" required maxlength="40"> 
            </div>
            <div class="my-3 w-25">
                <label for="desc">Descrição</label>
                <input type="text" name="desc" class="form-control border-dark"> 
            </div>
            <div class="my-3 w-25">
                <label for="quant">Quantidade</label>
                <input type="number" name="quant" class="form-control border-dark" required> 
            </div>
            <input type="hidden" value="<?php echo $player ?>" name="player">
            <div class="my-3">
                <button type="submit" class="btn btn-info">salvar item</button>
            </div>
        </form>
        <h5 class="text-center my-3">Inventário</h5>
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
                            <h3 class="text-center">Item .'.$x.'</h3>
                            <form action="../../crud/cruditem/salvaritem.php" method="post" class="d-flex flex-column align-items-center">
                                <div class="w-100">
                                    <label for="nome">Nome (maximo de 40 caracteres)</label>
                                    <input type="text" name="nome" value="'.$nome.'" class="form-control border-dark" required maxlength="40"> 
                                </div>
                                <div class="w-100">
                                    <label for="desc">Descrição</label>
                                    <input type="text" name="desc" value="'.$descricao.'" class="form-control border-dark"> 
                                </div>
                                <div class="w-100">
                                    <label for="quant">Quantidade</label>
                                    <input type="number" name="quant" value="'.$quant.'" class="form-control border-dark" required maxlength="40"> 
                                </div>
                                <input type="hidden" value="'.$id.'" name="id">
                                <button type="submit" class="btn btn-info m-2">salvar item</button>
                            </form> 
                            <form action="../../crud/cruditem/deletitem.php" method="post" class="d-flex flex-column align-items-center">
                                <input type="hidden" value="'.$id.'" name="id">
                                <button type="submit" class="btn btn-info">Excluir</button>
                            </form>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>
    <div class="container border border-dark rounded bg-white py-3 my-5">
        <h3 class="text-center">atributos</h3>
        <form action='../../crud/crudatr/cadastraratr.php' method='post' class="d-flex flex-column align-items-center">
            <div class="mb-3 w-25">
                <label for="nome">Nome (maximo de 20 caracteres)</label>
                <input type="text" name="nome" class="form-control border-dark" required maxlength="20">
            </div>
            <div class="mb-3 w-25">
                <label for="valor">Valor</label>
                <input type="number" name="valor" class="form-control border-dark" required>
            </div>
            <input type='hidden' value='<?php echo $player ?>' name='player'>
            <button type='submit' class="btn btn-info mb-3">adicionar atributo</button>
        </form>
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
                            <form action='../../crud/crudatr/atrsalvar.php' method='post' id='editatr$y' class='d-flex flex-column align-items-center p-2'>
                                <div>
                                    <label for='nome'>Nome(maximo 20 caracteres)</label>
                                    <input type='text' name='nome' value='$nome' class='form-control border-dark' required maxlength='20'>
                                </div>
                                <div>
                                    <label for='valor'>Valor</label>
                                    <input type='number' name='valor' value='$valor' class='form-control border-dark' required>
                                </div>
                                <input type='hidden' value='$id' name='id'>
                            </form>
                            <div class='border-start border-dark d-flex flex-column justify-content-center'>
                                <div class='d-flex flex-column align-items-center mx-2'>
                                    <button type='submit' form='editatr$y' class='btn btn-info my-1'>Salvar alterações</button>
                                    <form action='../../crud/crudatr/deletatr.php' method='post'>
                                        <input type='hidden' value='$id' name='id'>
                                        <button type='submit' class='btn btn-info my-1'>Excluir atributo</button>
                                    </form>
                                </div>
                            </div>
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
