<?php 
    include('../../scriptphp/protect_mestre.php');
    include '../../scriptphp/connect.php';

    $rp = $_POST['rp'];
    $sql = "SELECT * FROM rpg WHERE id_rpg = '$rp'";
    $rpg = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($rpg);

    $rp = $linha['nome'];
    $sql = "SELECT * FROM anotacaoRpg WHERE 'rpg' = '$rp'";
    $notas = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $linha['nome'] ?></title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container border border-dark rounded bg-white py-3 my-5">
        <h1 class="text-center"><?php echo $linha['nome'] ?></h1>
        <p><b>Premissa: </b><?php echo $linha['premissa'] ?></p>
        <h2>Notas</h2>
        <form action="notamestre.php" method="POST">
            <input type="hidden" name="rp" value="<?php echo $rp ?>">
            <button type="submit" class='btn btn-info'>+ Criar nota</button>
        </form>
            <?php 
                echo $sql;
                while ($anotacoes = mysqli_fetch_assoc($notas)) {
                    $id = $anotacoes['id_anotacao'];
                    $titulo = $anotacoes['titulo'];
                    $anotacao = $anotacoes['anotacao'];
                    if ($anotacoes['publica'] == 1) {
                        $publica = 'sim'; 
                    } else{
                        $publica = 'não';
                    }

                    echo "
                    <div class='container border border-dark rounded p-0 mt-2'>
                        <div class='border-bottom border-dark d-flex p-2'>
                            <h3>$titulo</h3>
                        </div>
                        <p class='my-0 mx-2'>$anotacao</p>
                        <p class='my-0 mx-2'>é publica: $publica</p>
                        <div class='border-top border-dark d-flex'>
                            <form action='editnotamestre.php' method='POST'>
                                <input type='hidden' name='id' value='$id'>
                                <button type='submit' class='btn btn-info m-2'>editar nota</button>
                            </form>
                            <form action='../../crud/crudmestre/deletnotamestre.php' method='POST'>
                                <input type='hidden' name='id' value='$id'>
                                <button class='btn btn-info m-2' type='submit'>deletar nota</button>
                            </form>
                        </div>
                    </div>";
                }
            ?>
        <h2 class="text-center">Players</h2>
        <table class="table table-bordered border-dark align-middle">
            <thead>
                <tr>
                    <th></th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Usuário</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM personagem WHERE rpg = '$rp'";
                    $players = mysqli_query($conn, $sql);
                    $x = 0;
                    while ($personagem = mysqli_fetch_assoc($players)) {
                        $nome = $personagem['nome'];
                        $user = $personagem['user'];
                        $x+=1;
                        echo "
                            <tr>
                                <th class='text-center'>$x</th>
                                <th class='text-center'>$nome</th>
                                <td class='text-center'>$user</td>
                                <td class='text-center'>
                                    <form method = 'post' action='personamestre.php'>
                                        <input type='hidden' value = '$nome' name='player'>
                                        <button type='submit' class='btn btn-info'>ver</button>
                                    </form>
                                </td>
                            </tr>";
                    }
                
                ?>
            </tbody>
        </table>
    </div>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>
