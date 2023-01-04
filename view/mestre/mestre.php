<?php
    include("../../scriptphp/protect_mestre.php");
    include "../../scriptphp/connect.php";
    $user = $_SESSION['user'];
    $sql = "SELECT * FROM rpg WHERE criador = '$user'";
    $rpgs = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mestre</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container border border-dark rounded py-2 my-5">
        <h2 class="text-center">olá, mestre <?php echo $_SESSION['user']?></h2>
        <div class="d-flex justify-content-evenly p-3">
            <a href="cadastrorpg.php" class="btn btn-info">+ Criar RPG</a>
            <a href="../../scriptphp/logout.php" class="btn btn-info">logout</a>
        </div>
        <div>
            <table class="table table-bordered border-dark">
                <thead>
                    <tr>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Resumo</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while ($linha = mysqli_fetch_assoc($rpgs)) {
                            $nome = $linha['nome'];
                            $resumo = $linha['premissa'];
                            $rp = $linha['id_rpg'];

                            echo "
                                <tr>
                                    <th class='text-center align-middle'>$nome</th>
                                    <td class='text-center align-middle'>$resumo</td>
                                    <td class='text-center align-middle'>
                                        <form method = 'post' action='rpgmestre.php'>
                                            <input type='hidden' value = '$rp' name='rp'>
                                            <button type='submit' class='btn btn-info'>abrir</button>
                                        </form>
                                    </td>
                                    <td class='text-center align-middle'>
                                        <form method = 'post' action='../../crud/crudmestre/deletrpg.php'>
                                            <input type='hidden' value = '$rp' name='delet'>
                                            <button type='submit' class='btn btn-info'>excluir</button>
                                        </form>
                                    </td>
                                </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>