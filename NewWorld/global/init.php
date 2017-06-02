<?php session_start();
// Inclusion du fichier de configuration (qui définit des constantes)
include 'global/config.php';
// On a besoin du modèle des inscription
include CHEMIN_MODELE.'authentification.php'; 
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
	return !empty($_SESSION['username']);
}

function utilisateur_est_complet()
{
	$bool=false;
	$infos_utilisateur_full=lire_full_infos_utilisateur($_SESSION['username']); 
	if (null !==$infos_utilisateur_full['adresse'] && null !==$infos_utilisateur_full['cp'] && null !==$infos_utilisateur_full['ville'] && null !==$infos_utilisateur_full['type'] && null !==$infos_utilisateur_full['id_question'] && null !==$infos_utilisateur_full['reponse'])
	{
		$bool=true;
	}
	return $bool;
}




// -------version 2 ---------------------------------------------------

// Vérifications pour la connexion automatique

// L'utilisateur n'est pas connecté mais les cookies sont présents
/*if (!utilisateur_est_connecte() && !empty($_COOKIE['username']) && !empty($_COOKIE['password']))
{
	$infos_utilisateur = lire_infos_utilisateur($_COOKIE['username']);
	
	if (false !== $infos_utilisateur)
	{
		$navigateur = (!empty($_SERVER['HTTP_USER_AGENT'])) ? $_SERVER['HTTP_USER_AGENT'] : '';
		$hash = sha1('aaa'.$infos_utilisateur['nom'].'bbb'.$infos_utilisateur['mdp'].'ccc'.$navigateur.'ddd');
		
		if ($_COOKIE['connexion_auto'] == $hash)
		{
			// On enregistre les informations dans la session
			
			$_SESSION['username']     = $_COOKIE['username'];
			$_SESSION['nom'] = $infos_utilisateur['nom'];
			$_SESSION['prenom'] = $infos_utilisateur['prenom'];
			$_SESSION['cp']  = $infos_utilisateur['cp'];
			$_SESSION['ville']  = $infos_utilisateur['ville'];
			$_SESSION['adresse']  = $infos_utilisateur['adresse'];
			$_SESSION['type']  = $infos_utilisateur['type'];
			$_SESSION['mail']  = $infos_utilisateur['mail'];
			$_SESSION['telephone_fixe']  = $infos_utilisateur['telephone_fixe'];
			$_SESSION['telephone_portable']  = $infos_utilisateur['telephone_portable'];
			//id_client, login, nom, prenom, cp, ville, adresse, type, mail, telephone_fixe, telephone_portable
		}
	}
}
*/