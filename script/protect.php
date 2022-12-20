<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['id'])) {
        die("você precisa estar logado para ter acesso a essa página. <a href=\"index.php\">login</a>");
    }

?>