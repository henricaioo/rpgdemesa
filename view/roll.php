<?php 

    include("../scriptphp/protect.php");
    include "../scriptphp/connect.php";

    $player = $_POST['player'];
    $sql = "SELECT * FROM atributo WHERE player = '$player'";
    $atr = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolar dados</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container border border-dark rounded bg-white py-3 my-5">
        <h3 class="text-center mb-3">Personagem: <?php echo $player ?></h3>
        <form action="" class="d-flex flex-column align-items-center">
            <h5>escolha os atributos que serão somados</h5>
            <?php 
                while($dados = mysqli_fetch_assoc($atr)){
                    echo "
                    <div class='form-check mb-2'>
                        <input type='checkbox' value='".$dados['valor']."' class='form-check-input'>
                        <label class='form-check-label'>".$dados['nome']." ". $dados['valor'] ."</label>
                    </div>
                    ";
                }
            ?>
            <div>
                <button type='button' onclick="rolar(4)" class="btn btn-info">D4</button>
                <button type='button' onclick="rolar(6)" class="btn btn-info">D6</button>
                <button type='button' onclick="rolar(8)" class="btn btn-info">D8</button>
                <button type='button' onclick="rolar(10)" class="btn btn-info">D10</button>
                <button type='button' onclick="rolar(12)" class="btn btn-info">D12</button>
                <button type='button' onclick="rolar(20)" class="btn btn-info">D20</button>
                <button type='button' onclick="rolar(100)" class="btn btn-info">D100</button>
            </div>
        </form>
        <div class="d-flex flex-column align-items-center mt-4 py-2">
            <div class="border border-dark rounded w-25 p-3">
                <p class="mb-0 text-center">Dado: <b id="dado"></b></p>
                <p class="mb-0 text-center">Soma: <b id="result"></b></p>
            </div>
        </div>
    </div>
    <script>
        const selecionado = document.getElementsByTagName("input")
        const result = document.getElementById('result')
        const dado = document.getElementById('dado')
        console.log(selecionado)
        console.log(document.querySelector("input").hasAttribute("checked"))
        function rolar(dice) {
            let valor = 0
            let dadinho = 0
            // for (var atributo in selecionado.item(0)) {
            //     console.log(atributo.value)
            //     if (atributo.checked) {
            //         valor += atributo.value
            //     }
            // }
            for (let index = 0; index < selecionado.length; index++) {
                if (selecionado.item(index).checked) {
                    valor += Number(selecionado.item(index).value)
                }
                
            }
            dadinho += Math.floor(Math.random() * dice)+1
            dado.innerHTML = dadinho
            valor += dadinho;
            result.innerHTML = valor
            
        }
        
    </script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>