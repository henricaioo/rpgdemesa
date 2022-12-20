<?php

    $host = 'localhost';
    $db = 'rp';
    $user = 'root';
    $senha = '';

    $mysqli = new mysqli($host, $user, $senha, $db);
    if ($mysqli -> connect_errno) {
        die("falha ao conectar: (".$mysqli -> connect_errno.")".$mysqli -> connect_error);
    }


?>