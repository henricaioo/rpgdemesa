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
</head>
<body>
    <p>bem vind@ <?php echo $_SESSION['id'] ?></p>
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
    <a href="mestre/mestre.php">mestre</a>
    <a href="scriptphp/logout.php">logout</a>
    <a href="scriptphp/delet.php">deletar</a>
</body>
</html>