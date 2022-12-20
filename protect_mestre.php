<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['id']) || $_SESSION['perfil'] != 1) {
        die("você não tem cargo de mestre. <a href=\"index.php\">login</a>");
    }

?>