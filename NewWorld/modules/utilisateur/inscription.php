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
	if (isset ($_POST['id']))
	{ 
	  $pseudonyme = $_POST['id'];
	}
	else
	{
	  $pseudonyme="";
	}
	if (isset ($_POST['mdp']))
	{ 
	  $mdp = $_POST['mdp'];
	}
	else
	{
	  $mdp="";
	}

	// vérifications

	if ( $int_cp == false){
	
		$erreurs_inscription[] = "Code Postale invalide  elle ne doit pas contenire des lettre ! ";
		
	}
	if($int_cp[2] > 5){
	
		$erreurs_inscription[] = "Code Postale invalide ! ";
		
	}
		
	// Si d'autres erreurs ne sont pas survenues
	if (empty($erreurs_inscription)) {
	
	//list($nom, $prenom,$dateEmb,$adresse,$codePostal,$ville, $mdp, $email, $avatar,$login) =
		//	  $form_inscription->get_cleaned_data('nom', 'prenom','dateEmb','adresse','codePost','ville', 'mdp', 'email', 'avatar','fonction');
	
		// Tentative d'ajout du membre dans la base de données
		$nom = "";// a remplir
		$prenom = "";// a remplir
		$login = "";// a remplir
		$email = "";// a remplir
		$telephone = "";// a remplir
		
		include CHEMIN_MODELE.'inscription.php';

		// ajouter_membre_dans_bdd() est défini dans ~/modeles/inscription.php
		
		$id_utilisateur = ajouter_membre_dans_bdd($nom, $prenom, $login, $email, $telephone);

//code d'envoi de mail 
		
		// Affichage de la confirmation de l'inscription
		//include CHEMIN_VUE.'inscription_effectuee.php';
		$inscription_effectuee = true;
	} 
	else 
	{ 
			$erreur =& $id_utilisateur; // Changement de nom de variable (plus lisible)
			// On vérifie que l'erreur concerne bien un doublon
			if (23000 == $erreur[0]) {  
			    // Le code d'erreur 23000 siginife "doublon" dans le standard ANSI SQL
				preg_match("`Duplicate entry '(.+)' for key \d+`is", $erreur[2], $valeur_probleme);
				$erreurs_inscription[] = "Cette adresse e-mail ou ce même nom et prénom sont d&eacute;ja utilis&eacute;s.";
				//	include CHEMIN_VUE.'inscription_non_effectuee.php';
				if (isset ($valeur_probleme[1]))
				{ 
					$erreurs_inscription[] = $valeur_probleme[1];
				}
				
			} else {

				$erreurs_inscription[] = "Erreur ajout SQL : cas non trait&eacute; (SQLSTATE = %d) $erreur[0]";
	  		}
                }
	//}
	if (! $inscription_effectuee) {
	  // Affichage du formulaire inscription
	  	include CHEMIN_VUE.'formulaire_inscription.php';
	}
}
