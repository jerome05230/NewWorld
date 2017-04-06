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
?>
<!DOCTYPE html> 
<html>
<?php 	include'global/header.php';?>
	<body>
	<?php 	

	// Initialisation
	include 'global/init.php';

	// Début de la tamporisation de sortie
	ob_start();

	// Si un module est specifié, on regarde s'il existe
	if (!empty($_GET['module'])) {

		$module = dirname(__FILE__).'/modules/'.$_GET['module'].'/';
	
		// Si l'action est specifiée, on l'utilise, sinon, on tente une action par défaut
		$action = (!empty($_GET['action'])) ? $_GET['action'].'.php' : 'index.php';
	
		// Si l'action existe, on l'exécute
		if (is_file($module.$action)) {

			include $module.$action;

		// Sinon, on affiche la page d'accueil !
		} else {

			include 'global/section.php';
		}

	// Module non specifié ou invalide ? On affiche la page d'accueil !
	} else {

		include 'global/section.php';
	}

	// Fin de la tamporisation de sortie
	$contenu = ob_get_clean();

	// Début du code HTML
	include 'global/header.php';
	include 'global/nav.php';
	echo $contenu;

	// Fin du code HTML
	include 'global/footer.php';?>
	</body>
</html>	
