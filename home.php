<?php
    include('scriptphp/protect.php');
    include "scriptphp/connect.php";

    $sql = "SELECT * FROM rpg";
    $rpgs = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container border border-dark rounded py-2 my-5">
        <h1 class="text-center">bem vind@ <?php echo $_SESSION['user'] ?></h1>
        <div class="d-flex justify-content-evenly pb-3">
            <a href="edit.php" class='btn btn-info'>Editar conta</a>
            <?php 
                $var = $_SESSION['perfil'];
                if ($var == 1) {
                    echo '<a href="view/mestre/mestre.php" class="btn btn-info">Mestre</a>';
                } else {
                    echo '<a href="view/mestre/bemestre.php" class="btn btn-info">Tornar-se mestre</a>';
                }
            ?>
            <a href="scriptphp/logout.php" class='btn btn-info'>Logout</a>
            <button type="button" class='btn btn-info' data-bs-toggle="modal" data-bs-target="#exampleModal">
              Apagar conta
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Alerta</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Você tem certeza que deseja excluir sua conta?</p>
                    <p>(todos os seus dados serão excluídos.)</p>
                  </div>
                  <div class="modal-footer">
                    <a href="crud/crudplayer/delet.php" class="btn btn-danger">Deletar</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div>
            <table class="table table-bordered border-dark align-middle">
                <thead>
                    <tr>
                        <th class='text-center'>Nome</th>
                        <th class='text-center'>Resumo</th>
                        <th class='text-center'>Criador</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while ($linha = mysqli_fetch_assoc($rpgs)) {
                            $nome = $linha['nome'];
                            $resumo = $linha['premissa'];
                            $cria = $linha['criador'];

                            echo "
                                <tr>
                                    <th class='text-center'>$nome</th>
                                    <td class='text-center'>$resumo</td>
                                    <td class='text-center'>$cria</td>
                                    <td class='text-center'>
                                        <form method = 'post' action='view/player/rpgplayer.php'>
                                            <input type='hidden' value = '$nome' name='rp'>
                                            <button type='submit' class='btn btn-info'>entrar</button>
                                        </form>
                                    </td>
                                </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>