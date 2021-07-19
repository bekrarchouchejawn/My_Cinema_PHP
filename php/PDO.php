<?php
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', 'tom');
    } 
    catch(Exception $error) 
    {
        die('Erreur : '.$error->getMessage());
    }

?>