<?php 
    include('../scriptphp/protect_mestre.php');
    include '../scriptphp/connect.php';

    $rp = $_POST['rp'];
    $sql = "SELECT * FROM rpg WHERE id_rpg = '$rp'";
    $rpg = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($rpg);

    $rp = $linha['nome'];
    $sql = "SELECT * FROM anotacaorpg WHERE rpg = '$rp'";
    $notas = mysqli_query($conn, $sql);
    
    $sql = "SELECT * FROM personagem WHERE rpg = '$rp'";
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
    
    <?php 
    
        while ($anotacoes = mysqli_fetch_assoc($notas)) {
            $titulo = $anotacoes['titulo'];
            $anotacao = $anotacoes['anotacao'];
            
            echo "
            <h3>$titulo</h3>
            <p>$anotacao</p>";
        }
    
    ?>

    <h2>Players</h2>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Usuário</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        
            while ($personagem = mysqli_fetch_assoc($notas)) {
                $nome = $personagem['nome'];
                $user = $personagem['user'];
                echo "
                    <tr>
                        <th>$nome</th>
                        <th>$user</th>
                        <th>
                            <form method = 'post' action='rpgmestre.php'>
                                <input type='hidden' value = '$rp' name='rp'>
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