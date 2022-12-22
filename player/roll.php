<?php 

    include("../scriptphp/protect.php");
    include "../scriptphp/connect.php";

    $sql = "SELECT * FROM atributo";
    $atr = mysqli_query($conn, $sql);

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
    <form action="">
        <?php 
            while($dados = mysqli_fetch_assoc($atr)){
                echo "<input type='checkbox' value='".$dados['valor']."'>
                    <label>".$dados['nome']." +". $dados['valor'] ."</label>
                ";
            }
        ?>
        <button type='button' onclick="rolar()">rolar</button>
        <p>Resultado: <b id="result"></b></p>
    </form>
    <script>
        const selecionado = document.getElementsByTagName("input")
        const result = document.getElementById('result')
        console.log(selecionado)
        console.log(document.querySelector("input").hasAttribute("checked"))
        function rolar() {
            let valor = 0
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
            valor += Math.floor(Math.random() * 20)+1;
            result.innerHTML = valor
            
        }
        
    </script>
</body>
</html>