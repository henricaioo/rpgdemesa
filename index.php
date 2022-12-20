
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <form action="scriptphp/login.php" method="POST">
        <div>
            <label for="user">User</label>
            <input type="text" name="user">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha">
            <input type="number" name="senha" id="atr">
        </div>
        <div>
            <button type="submit">entrar</button>
        </div>
    </form>
    <script>
        document.getElementById("atr").onchange=()=>{
            let valor = document.getElementById("atr").value
            console.log(valor)
        }
        function name() {
            let valor = document.getElementById("atr").value
            console.log(valor)
        }
    </script>
</body>
</html>