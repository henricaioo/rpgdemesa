<?php
    include("../scriptphp/protect_mestre.php");
    include "../scriptphp/connect.php";
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
</head>
<body>
    <p>olá, mestre <?php echo $_SESSION['id']?></p>
    <a href="cadastrorpg.php">+ Criar RPG</a>
    <a href="../home.php">voltar</a>
    <a href="../scriptphp/logout.php">logout</a>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Resumo</th>
                    <th>Criador</th>
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
                                <th>$nome</th>
                                <th>$resumo</th>
                                <th>$cria</th>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>