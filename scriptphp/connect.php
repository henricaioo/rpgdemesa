<?php

    $host = 'localhost';
    $db = 'rp';
    $user = 'caioh';
    $senha = 'caioh@21012023';

    $mysqli = new mysqli($host, $user, $senha, $db);
    if ($mysqli -> connect_errno) {
        die("falha ao conectar: (".$mysqli -> connect_errno.")".$mysqli -> connect_error);
    }

    $conn = mysqli_connect($host, $user, $senha, $db);


?>
