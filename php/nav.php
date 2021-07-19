<?php

$url = $_SERVER['REQUEST_URI'];
$tab = explode("/", $url);
$page = end($tab);
session_start();

?>    

<header>
        <nav>
            <?php
            if($page == "index.php" || $page == "") { ?>
                <h1 id="logo"> <a href="index.php">SASORITH</a></h1>
            <?php }
            else { ?>
                <h1 id="logo"> <a href="../index.php">SASORITH</a></h1>
            <?php } ?>
            
            <ul>
                <?php 
                if($page == "index.php" || $page == "") {
             	?>
                    <li><a href="php/search.php">Recherche de film<i class="fas fa-film"></i></a></li>
                    <li><a href="php/search-member.php">Recherche de membre<i class="fas fa-users"></i></a></li>
                    <li><a href="php/alaffiche.php"> Quels films passent ce soir ?! <i class="far fa-clock"></i></a></li>
               	<?php }
                
                if($page == "search.php" || $page == "resultat.php") {
				?>
                    <li class="active"><a href="search.php">Recherche de film<i class="fas fa-film"></i></a></li>
                    <li><a href="search-member.php">Recherche de membre<i class="fas fa-users"></i></a></li>
                    <li><a href="alaffiche.php"> Quels films passent ce soir ?! <i class="far fa-clock"></i></a></li>
               <?php }

                if($page == "search-member.php" || $page == "res-member.php") {
                ?>
                    <li><a href="search.php">Recherche de film<i class="fas fa-film"></i></a></li>
                    <li class="active"><a href="search-member.php">Recherche de membre<i class="fas fa-users"></i></a></li>
                    <li><a href="alaffiche.php"> Quels films passent ce soir ?! <i class="far fa-clock"></i></a></li>
               	<?php }
                
                if($page == "alaffiche.php") {
                ?>
                    <li><a href="search.php">Recherche de film<i class="fas fa-film"></i></a></li>
                    <li><a href="search-member.php">Recherche de membre<i class="fas fa-users"></i></a></li>
                    <li class="active"><a href="alaffiche.php"> Quels films passent ce soir ?! <i class="far fa-clock"></i></a></li>
                <?php }
                
                ?>
            </ul>
        </nav>
    </header>