<?php 
    include('../scriptphp/protect.php');
    include '../scriptphp/connect.php';
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
    <title>Document</title>
</head>
<body>
    <form action="editaplayer.php" method="POST">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="<?php echo $persona['nome'] ?>">
        </div>
        <div>
            <label for="prof">Profissão</label>
            <input type="text" name="prof" value="<?php echo $persona['profissao'] ?>">
            
        </div>
        <div>
            <label for="idade">Idade</label>
            <input type="number" name="idade" value="<?php echo $persona['idade'] ?>">
        </div>
        <div>
            <label for="sexo">Sexo/gênero</label>
            <input type="text" name="sexo" value="<?php echo $persona['sexo'] ?>">
        </div>
        <div>
            <label for="backstory">Backstory</label>
            <textarea name="backstory" rows="10"><?php echo $persona['backstory'] ?></textarea>
        </div>
        <div>
            <label for="aparencia">Aparência</label>
            <textarea name="aparencia" rows="10"><?php echo $persona['aparencia'] ?></textarea>
        </div>
        <div>
            <label for="conceito">Conceito</label>
            <textarea name="conceito" rows="10"><?php echo $persona['conceito'] ?></textarea>
        </div>
        <div>
            <label for="qualidade">Qualidades</label>
            <textarea name="qualidade" rows="3"><?php echo $persona['qualidades'] ?></textarea>
        </div>
        <div>
            <label for="defeito">Defeitos</label>
            <textarea name="defeito" rows="3"><?php echo $persona['defeitos'] ?></textarea>
        </div>
        <input type="hidden" value="<?php echo $rp ?>" name="rp">
        <button type="submit">cadastrar</button>
    </form>
    <div>
        <h3>Itens</h3>
        <h4>salvar item</h4>
        <form action="cadastraritem.php" method="post">
            <div>
                <label for="quant">Quantidade</label>
                <input type="number" name="quant"> 
            </div>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome"> 
            </div>
            <div>
                <label for="desc">Descrição</label>
                <input type="text" name="desc"> 
            </div>
            <input type="hidden" value="<?php echo $player ?>" name="player">
            <button type="submit">salvar item</button>
        </form>
        <h4>Inventário</h4>
        <?php 
            $sql = "SELECT * FROM inventario WHERE personagem = '$player'";
            $res = mysqli_query($conn, $sql);
            while ($item = mysqli_fetch_assoc($res)){
                $id = $item['id_inventario'];
                $quant = $item['quant'];
                $nome = $item['nome'];
                $descricao = $item['descricao'];
                
                echo '
                <form action="salvaritem.php" method="post">
                    <div>
                        <label for="quant">Quantidade</label>
                        <input type="number" name="quant" value="'.$quant.'"> 
                    </div>
                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" value="'.$nome.'"> 
                    </div>
                    <div>
                        <label for="desc">Descrição</label>
                        <input type="text" name="desc" value="'.$descricao.'"> 
                    </div>
                    <input type="hidden" value="'.$id.'" name="id">
                    <button type="submit">salvar item</button>
                </form>';
                echo "
                <form action='deletitem.php' method='post'>
                    <input type='hidden' value='$id' name='id'>
                    <button type='submit'>Excluir</button>
                </form>";
            }
        ?>
    </div>
    <div>
        <h3>Status</h3>
        <?php 
            echo "
            <form action='cadastrostatus.php' method='post'>
                <input type='hidden' value='$player' name='player'>
                <button type='submit'>adicionar atributos</button>
            </form>";
            $sql = "SELECT * FROM status WHERE player = '$player'";
            $res = mysqli_query($conn, $sql);
            while ($status = mysqli_fetch_assoc($res)) {
                $id = $status['id_statusplayer'];
                $nome = $status['nome'];
                $valor = $status['valor'];
                echo "
                <div>
                    <p>$nome: $valor</p>
                    <form action='editstatus.php' method='post'>
                        <input type='hidden' value='$id' name='id'>
                        <button type='submit'>Editar</button>
                    </form>
                    <form action='deletstatus.php' method='post'>
                        <input type='hidden' value='$id' name='id'>
                        <button type='submit'>Excluir</button>
                    </form>
                </div>";
            }
        ?>
    </div>
    <div>
        <h3>atributos</h3>
        <?php 
            echo "
            <form action='cadastroatr.php' method='post'>
                <input type='hidden' value='$player' name='player'>
                <button type='submit'>adicionar atributos</button>
            </form>";
            $sql = "SELECT * FROM atributo WHERE player = '$player'";
            $res = mysqli_query($conn, $sql);
            while ($status = mysqli_fetch_assoc($res)) {
                $id = $status['id_atributoplayer'];
                $nome = $status['nome'];
                $valor = $status['valor'];
                echo "
                <div>
                    <p>$nome: $valor</p>
                    <form action='editatr.php' method='post'>
                        <input type='hidden' value='$id' name='id'>
                        <button type='submit'>Editar</button>
                    </form>
                    <form action='deletatr.php' method='post'>
                        <input type='hidden' value='$id' name='id'>
                        <button type='submit'>Excluir</button>
                    </form>
                </div>";
            }
        ?>
    </div>
    <form action="roll.php" method="POST">
        <input type="hidden" name='player' value="<?php echo $player ?>">
        <button type="submit">Rolar dados</button>
    </form>
</body>
</html>