<?php
    session_start();

    if (!isset($_SESSION["id_utilisateur"])) {
        $_SESSION["id_utilisateur"] = null;
    }

    if($_SESSION["id_utilisateur"]==null){
        header("index.html");
    }
?>