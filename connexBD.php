<?php
    try //try catch pour tester la connexion
    {
        $connexion = new PDO("mysql:host=127.0.0.1;dbname=rappel;charset=utf8", "root", "");
    }
    catch(Exception $e)
    {
        echo "Bonjour , erreur dans la connexion";
        die('Erreur : '.$e->getMessage());
    }
?>