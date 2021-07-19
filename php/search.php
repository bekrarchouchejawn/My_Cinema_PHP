<?php

include "PDO.php";

$reqGenre = $bdd->query('SELECT nom FROM genre');
$reqDistrib = $bdd->query('SELECT nom FROM distrib');

?> 

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> My_CINEMA </title>
        <link rel="stylesheet" href="../assets/css/search.css">
        <link rel="stylesheet" href="../assets/css/header.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
    
    <body>
        <?php include "nav.php"; ?>
        
        <form action="resultat.php" method="POST">
            <div id="search-bg">
                <input id="input" type="text" name="search">
                <label for="input"><i class="fas fa-search"></i></label>
            </div>
            <div class="btn__container">
                <select name="genre" size="1">
                    <option selected>Tout les genres</option>
                    <?php 
                        while ($genreNames = $reqGenre->fetch())
                        { ?>
                             <option> <?php echo $genreNames['nom']; ?></option>
                  <?php } ?>
                </select>
                <select name="distrib" size="1">
                    <option selected>Tout les distributeurs</option>
                    <?php 
                        while ($distribNames = $reqDistrib->fetch())
                        { ?>
                             <option> <?php echo $distribNames['nom']; ?></option>
                  <?php } ?>
                </select>
                <input id="submit" type="submit" value="Submit">
            </div>
        </form>
        <script src="../assets/js/script.js"></script>
    </body>
</html>
