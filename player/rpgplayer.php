<?php 
    include('../scriptphp/protect.php');
    include '../scriptphp/connect.php';

    $rp = $_POST['rp'];
    $sql = "SELECT * FROM rpg WHERE nome = '$rp'";
    $rpg = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($rpg);

    $rp = $linha['nome'];
    $player = $_SESSION['user'];
    $sql = "SELECT * FROM anotacaoPlayer WHERE rpg = '$rp' AND user = '$player'";
    $notas = mysqli_query($conn, $sql);
    
    $sql = "SELECT * FROM personagem WHERE rpg = '$rp' AND user = '$player'";
    $players = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $linha['nome'] ?></title>
</head>
<body>
    <h1><?php echo $linha['nome'] ?></h1>
    <h2>Notas</h2>
    <form action="notaplayer.php" method="POST">
        <input type="hidden" name="rp" value="<?php echo $rp ?>">
        <button type="submit">criar nota</button>
    </form>
    <?php 
    
        while ($anotacoes = mysqli_fetch_assoc($notas)) {
            $id = $anotacoes['id_anotacaoplayer'];
            $titulo = $anotacoes['titulo'];
            $anotacao = $anotacoes['anotacao'];
            
            echo "
            <h3>$titulo</h3>
            <p>$anotacao</p>
            <form action='editnotaplayer.php' method='POST'>
                <input type='hidden' name='id' value='$id'>
                <button type='submit'>editar nota</button>
            </form>
            <form action='deletnota.php' method='POST'>
                <input type='hidden' name='id' value='$id'>
                <button type='submit'>deletar nota</button>
            </form>";
        }
    
    ?>

    <h2>Players</h2>
    <form action="cadastrarplayer.php">
        <input type="hidden" value="<?php echo $rp ?>" name="rp">
        <button type="submit">+ criar personagem</button>
    </form>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Usuário</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        
            while ($personagem = mysqli_fetch_assoc($players)) {
                $nome = $personagem['nome'];
                $user = $personagem['user'];
                echo "
                    <tr>
                        <th>$nome</th>
                        <th>$user</th>
                        <th>
                            <form method = 'post' action='persona.php'>
                                <input type='hidden' value = '$nome' name='player'>
                                <button type='submit'>abrir</button>
                            </form>
                        </th>
                        <th>
                            <form method = 'post' action='deletrpg.php'>
                                <input type='hidden' value = '$rp' name='delet'>
                                <button type='submit'>excluir</button>
                            </form>
                        </th>
                    </tr>";
            }
        
        ?>
    </tbody>
</body>
</html>