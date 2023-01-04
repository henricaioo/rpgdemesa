<?php 
    include('../../scriptphp/protect.php');
    include '../../scriptphp/connect.php';

    $rp = $_POST['rp'];
    $sql = "SELECT * FROM rpg WHERE nome = '$rp'";
    $rpg = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($rpg);

    $rp = $linha['nome'];
    $premissa = $linha['premissa'];
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
    <title><?php echo $rp ?></title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container py-2 border border-dark rounded my-5">
        <h1 class="text-center">RPG: <?php echo $linha['nome'] ?></h1>
        <h5 class="container">Resumo: <?php echo $premissa ?></h5>
        <h4 class="container">notas do mestre</h4>
        <?php 
            $sql = "SELECT * FROM anotacaoRpg WHERE rpg = '$rp' AND publica = 1";
            $mestre = mysqli_query($conn, $sql);
            while ($notamestre = mysqli_fetch_assoc($mestre)) {
                $titulo = $notamestre['titulo'];
                $anotacao = $notamestre['anotacao'];

                echo "
                <div class='border border-dark rounded my-3 mx-3'>
                    <h3 class='border-bottom border-dark p-2'>$titulo</h3>
                    <p class='py-0 px-2 mx-0 my-2'>$anotacao</p>
                </div>";
            }
        ?>
    </div>
    <div class="container py-2 border border-dark rounded my-5">
        <h2>Notas:</h2>
        <form action="notaplayer.php" method="POST">
            <input type="hidden" name="rp" value="<?php echo $rp ?>">
            <button type="submit" class='btn btn-info'>+ Criar nota</button>
        </form>
        <div>
            <?php 

                while ($anotacoes = mysqli_fetch_assoc($notas)) {
                    $id = $anotacoes['id_anotacaoplayer'];
                    $titulo = $anotacoes['titulo'];
                    $anotacao = $anotacoes['anotacao'];

                    echo "
                    <div class='border border-dark rounded my-3'>
                        <h3 class='border-bottom border-dark p-2 bg-info'>$titulo</h3>
                        <p class='p-2'>$anotacao</p>
                        <div class='border-top border-dark d-flex'>
                            <form action='editnotaplayer.php' method='POST'>
                                <input type='hidden' name='id' value='$id'>
                                <button type='submit' class='btn btn-info m-2'>editar nota</button>
                            </form>
                            <form action='../../crud/crudnota/deletnota.php' method='POST'>
                                <input type='hidden' name='id' value='$id'>
                                <button class='btn btn-info m-2' type='submit'>deletar nota</button>
                            </form>
                        </div>
                    </div>";
                }
            ?>
        </div>
    </div>

    <div class="container py-2 border border-dark rounded my-5">
        <h2>Personagens:</h2>
        <form action="cadastroplayer.php" method="POST">
            <input type="hidden" value="<?php echo $rp ?>" name="rp">
            <button type="submit" class='btn btn-info mb-3'>+ criar personagem</button>
        </form>
        <table class="table table-bordered border-dark align-middle">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Usuário</th>
                    <th></th>
                    <th></th>
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
                                <td>$user</td>
                                <td>
                                    <form method = 'post' action='persona.php'>
                                        <input type='hidden' value = '$nome' name='player'>
                                        <button type='submit' class='btn btn-info'>abrir</button>
                                    </form>
                                </td>
                                <td>
                                    <form method = 'post' action='../../crud/crudpersona/deletpersona.php'>
                                        <input type='hidden' value = '$nome' name='player'>
                                        <button type='submit' class='btn btn-info'>excluir</button>
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