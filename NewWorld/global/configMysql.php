<?php
/*
<!-------------------------------------------------------------------------------------
# Nom du programme                   : nom_du_fichier.html
# Version                            : 1.0
# Description                        : Page nom_de_la_page HTML5 du site nom_du_site
# Date de création                   : jj/mm/aaaa
# Date de modification               : jj/mm/aaaa
# Auteur                             : BARON-CAMPOS Jérôme
# Commentaire                        : 
------------------------------------------------------------------------------------->
 */
// Identifiants pour la base de données.
$servername = "localhost";
$username = "adminDbNewWorld";
$password = "123456789";
$base= "dbNewWorld";

// Create connection
$connexion = new mysqli($servername, $username, $password, $base);

// Check connection
if ($connexion->connect_error) {
    die("Connection failed: " . $connexion->connect_error);
} 
?>
