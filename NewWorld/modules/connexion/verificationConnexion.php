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
session_start();

if(!isset($_SESSION['pseudo']))

{

echo 'Vous n\'êtes pas connecté au site. Vous ne pouvez donc pas venir sur cette page.';

exit;

}/?>


