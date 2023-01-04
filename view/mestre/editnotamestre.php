<?php 

    include '../../scriptphp/protect_mestre.php';
    include '../../scriptphp/connect.php';

    $id = $_POST['id'];
    $sql = "SELECT * FROM anotacaoRpg WHERE id_anotacao = '$id'";
    $res = mysqli_query($conn, $sql);
    $nota = mysqli_fetch_assoc($res);

    $titulo = $nota['titulo'];
    $texto = $nota['anotacao'];
    $publica = $nota['publica'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar nota</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container border border-dark rounded bg-white py-3 my-5">
        <h2 class="text-center">Editar nota</h2>
        <form action="../../crud/crudmestre/editnotasalvar.php" method="post" class="d-flex flex-column align-items-center">
            <div class="my-3 w-25">
                <label for="titulo">Titulo (maximo de 15 caracteres)</label>
                <input type="text" name="titulo" value="<?php echo $titulo ?>" class="form-control border-dark" maxlength="15" required>
            </div>
            <div class="my-3 w-25">
                <label for="nota">Nota</label>
                <textarea name="nota" rows="10" class="form-control border-dark"><?php echo $texto ?></textarea>
            </div>
            <div class="my-3 w-25">
                <label for="publica">Nota publica?</label>
                <select class="form-select form-control border-dark" aria-label="Default select example" name="publica">
                    <?php 
                        if ($publica == 1) {
                            echo '
                            <option value="1" selected>sim</option>
                            <option value="0">não</option>';
                        } else{
                            echo '
                            <option value="1">sim</option>
                            <option value="0" selected>não</option>';
                        }
                    ?>
                </select>
            </div>
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <div class="my-3">
                <button type="submit" class="btn btn-info">salvar</button>
            </div>
        </form>
    </div>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>