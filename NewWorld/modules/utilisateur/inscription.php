<?php
if (utilisateur_est_connecte()) {
	// On affiche la page d'erreur comme quoi l'utilisateur est déjà connecté   
	include CHEMIN_VUE.'erreur_deja_connecte.php';	
} 
else 
{
	$inscription_effectuee = false;
	// Création d'un tableau des erreurs
	$erreurs_inscription = array();

	// Validation des champs suivant les règles
	if (isset ($_POST['nom']))
	{ 
	  $nom = $_POST['nom'];
	}
	else
	{
	  $nom="";
	}
	if (isset ($_POST['prenom']))
	{ 
	  $prenom = $_POST['prenom'];
	}
	else
	{
	  $prenom="";
	}
		if (isset ($_POST['email']))
	{ 
	  $email = $_POST['email'];
	}
	else
	{
	  $email="";
	}
	if (isset ($_POST['login']))
	{ 
	  $login = $_POST['login'];
	}
	else
	{
	  $login="";
	}
		if (isset ($_POST['telFixe']))
	{ 
	  $telFixe = $_POST['telFixe'];
	}
	else
	{
	  $telFixe="";
	}
		if (isset ($_POST['telPort']))
	{ 
	  $telPort = $_POST['telPort'];
	}
	else
	{
	  $telPort="";
	}
	// Si d'autres erreurs ne sont pas survenues
	if (empty($erreurs_inscription)&& !empty($nom) && !empty($prenom) && !empty($email) && !empty($login) && !empty($telFixe) && !empty($telPort)) {
		require_once CHEMIN_MODELE.'authentification.php';
		// inscription() est défini dans ~/modeles/authentification.php
		require_once 'mailEtMdp.php';
		$password= generer_mot_de_passe();
		$inscription_effectuee= inscription($nom, $prenom, $email, $login, $telFixe, $telPort, $password);
		include CHEMIN_VUE.'inscription_effectuee.php';
	} 
	else 
	{ 
			$erreur =& $id_utilisateur; // Changement de nom de variable (plus lisible)
			// On vérifie que l'erreur concerne bien un doublon
			if (23000 == $erreur[0]) {  
			    // Le code d'erreur 23000 siginife "doublon" dans le standard ANSI SQL
				preg_match("`Duplicate entry '(.+)' for key \d+`is", $erreur[2], $valeur_probleme);
				$erreurs_inscription[] = "Cette adresse e-mail ou ce même nom et prénom sont déja utilisé.";
				//	include CHEMIN_VUE.'inscription_non_effectuee.php';
				if (isset ($valeur_probleme[1]))
				{ 
					$erreurs_inscription[] = $valeur_probleme[1];
				}
				
			} else {

				$erreurs_inscription[] = "Erreur ajout SQL : cas non traité; (SQLSTATE = %d) $erreur[0]";
	  		}
                }
	//}
	if (! $inscription_effectuee) {
	  // Affichage du formulaire inscription
	  	include CHEMIN_VUE.'formulaire_inscription.php';
	}
}