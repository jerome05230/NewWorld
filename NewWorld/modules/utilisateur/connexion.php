<?php
if (utilisateur_est_connecte()) {
	// On affiche la page d'erreur comme quoi l'utilisateur est déjà connecté   
	include CHEMIN_VUE.'erreur_deja_connecte.php';	
} 
else 
{
	// Création d'un tableau des erreurs
	$erreurs_connexion = array();
	$est_en_erreur = 0;

	// Validation des champs suivant les règles
	if (isset ($_POST['username']))
	{ 
	  $username = $_POST['username'];
	}
	else
	{
	  $username = "";
	}
	if (isset ($_POST['password']))
	{ 
	  $password = $_POST['password'];
	}
	else
	{
	  $password = "";
	}

	// ON VERIFIE LES DONNEES ENVOYEES
	if (empty($username) || empty($password)) //Oublie d'un champ
	{
		$affichage = 'Un des champs (pseudonyme ou mot de passe) est vide.';
	}
	else
	{
		// include_once('modules/visiteurs/connexion.php');
		include_once CHEMIN_CONTROLEUR.'connexion.php';
		$id_utilisateur = connexion($username,$password);
		$id=$id_utilisateur[0][0];
		// Si les identifiants sont valides
		if (false !== $id) 
		{
		    // On enregistre les informations dans la session
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $id;
			$infos_utilisateur = lire_infos_utilisateur($id);       
			var_dump($infos_utilisateur);
		    $_SESSION['nom'] = $infos_utilisateur[0][1];
		    $_SESSION['prenom'] = $infos_utilisateur[0][1];
		    $_SESSION['cp']  = $infos_utilisateur[0][2];
		    $_SESSION['ville'] = $infos_utilisateur[0][3];
		    $_SESSION['adresse']  = $infos_utilisateur[0][4];
			$_SESSION['type']  = $infos_utilisateur[0][5];
			$_SESSION['mail'] = $infos_utilisateur[0][6];
			$_SESSION['telephone_fixe'] = $infos_utilisateur[0][7];
			$_SESSION['telephone_portable'] = $infos_utilisateur[0][8];
			
			// Mise en place des cookies de connexion automatique
			/*if (false != $form_connexion->get_cleaned_data('connexion_auto'))
			{
				$navigateur = (!empty($_SERVER ['HTTP_USER_AGENT'])) ?
				$_SERVER ['HTTP_USER_AGENT'] : '';
				$hash_cookie = sha1('aaa'.$nom.'bbb'.$mdp.'ccc'.$navigateur.'ddd');
				setcookie( 'id', $_SESSION['id'], strtotime("+1 year"), '/');
				setcookie('connexion_auto', $hash_cookie, strtotime("+1 year"), '/');
			}*/
			// Affichage de la confirmation
	        $est_en_erreur= 1;
			$affichage = 'Vous 	êtes maintenant connecté à votre compte '.stripslashes(htmlspecialchars($username)).'';
			// Affichage de la confirmation de la connexion
		    include CHEMIN_VUE.'connexion_ok.php';
		}
		else // Accès pas refusé !
		{
			$affichage = 'Accés refusé car le mot de passe est incorrect, ou le compte est invalide (lisez vos courriers électroniques) !';
			// On réaffiche le formulaire de connexion
			$erreurs_connexion[] = "Nom d'utilisateur ou mot de passe inexistant.";
		}
	}

	// On affiche le formulaire de connexion si on n'est pas déja connecté 
	if ($est_en_erreur != 1)
	{
	 include CHEMIN_VUE.'formulaire_connexion.php';
	}
}
