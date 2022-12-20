<?php

    include('connect.php');

    if (isset($_POST['user']) || isset($_POST['senha'])) {
        if (strlen($_POST['user']) == 0) {
            echo 'preencha user';
        } else if (strlen($_POST['senha']) == 0) {
            echo 'preencha senha';
        } else {
            
            $user = $mysqli -> real_escape_string($_POST['user']);
            $senha = $mysqli -> real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuario WHERE user = '$user' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("falha ao conectar: (".$mysqli -> connect_errno.")".$mysqli -> connect_error);

            $quant = $sql_query->num_rows;

            if ($quant == 1) {
                $user = $sql_query->fetch_assoc();

                if (!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $user['id_user'];
                $_SESSION['perfil'] = $user['perfil'];

                header("location: home.php");
            } else {
                echo 'falha ao logar';
            }

        }
    }

?>