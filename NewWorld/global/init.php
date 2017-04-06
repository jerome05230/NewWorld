<?php
// Inclusion du fichier de configuration (qui définit des constantes)
include 'global/config.php';

// Désactivation des guillemets magiques
ini_set('magic_quotes_runtime', 0);
// set_magic_quotes_runtime(0);

if (1 == get_magic_quotes_gpc())
{
	function remove_magic_quotes_gpc(&$value) {
	
		$value = stripslashes($value);
	}
	array_walk_recursive($_GET, 'remove_magic_quotes_gpc');
	array_walk_recursive($_POST, 'remove_magic_quotes_gpc');
	array_walk_recursive($_COOKIE, 'remove_magic_quotes_gpc');
}

// Vérifie si l'utilisateur est connecté   
function utilisateur_est_connecte() {
 
	return !empty($_SESSION['id']);
}
// -------version 2 ---------------------------------------------------

// Vérifications pour la connexion automatique

// On a besoin du modèle des inscription
include CHEMIN_MODELE.'inscription.php';       // Pour la fonction inscription()
// L'utilisateur n'est pas connecté mais les cookies sont présents
if (!utilisateur_est_connecte() && !empty($_COOKIE['id']) && !empty($_COOKIE['connexion_auto']))
{
	$infos_utilisateur = lire_infos_utilisateur($_COOKIE['id']);
	
	if (false !== $infos_utilisateur)
	{
		$navigateur = (!empty($_SERVER['HTTP_USER_AGENT'])) ? $_SERVER['HTTP_USER_AGENT'] : '';
		$hash = sha1('aaa'.$infos_utilisateur['nom'].'bbb'.$infos_utilisateur['mdp'].'ccc'.$navigateur.'ddd');
		
		if ($_COOKIE['connexion_auto'] == $hash)
		{
			// On enregistre les informations dans la session
			$_SESSION['id']     = $_COOKIE['id'];
			$_SESSION['pseudo'] = $infos_utilisateur['nom'];
			$_SESSION['avatar'] = $infos_utilisateur['avatar'];
			$_SESSION['email']  = $infos_utilisateur['adresse_email'];
			$_SESSION['login']  = $infos_utilisateur['login'];
		}
	}
}
