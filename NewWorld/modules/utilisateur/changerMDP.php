<?php
if (!utilisateur_est_connecte()) {
	// On affiche la page d'erreur comme quoi l'utilisateur est déjà connecté   
	include CHEMIN_VUE.'erreur_non_connecte.php';	
} 
else 
{
	$changementMDP_effectuee="";
	// Création d'un tableau des erreurs
	// Validation des champs suivant les règles
	if (isset ($_POST['ancienMDP']))
	{ 
	  $ancienMDP = $_POST['ancienMDP'];
	}
	else
	{
	  $ancienMDP = "";
	}
	if (isset ($_POST['nouveauMDP1']))
	{ 
	  $nouveauMDP1 = $_POST['nouveauMDP1'];
	}
	else
	{
	  $nouveauMDP1 = "";
	}
	if (isset ($_POST['nouveauMDP2']))
	{ 
	  $nouveauMDP2 = $_POST['nouveauMDP2'];
	}
	else
	{
	  $nouveauMDP2 = "";
	}
	// ON VERIFIE LES DONNEES ENVOYEES
	if (empty($ancienMDP) || empty($nouveauMDP1) || empty($nouveauMDP2)) //Oublie d'un champ
	{
		$affichage = 'Un des champs (mot de passe) est vide.';
		echo $affichage;
	}
	else
	{
		if (isset ($_SESSION['id']))
		{
	    	if ($nouveauMDP1 != $nouveauMDP2)
	    	{
	    		$affichage = "les deux nouveaux mots de passes ne sont pas identiques";
	    		echo $affichage;
	    	}
			else 
			{
				if (hashPassword($ancienMDP) != $_SESSION['password'])
				{
					$affichage = "l'ancien mot de passe n'es pas valide";
					echo $affichage;
				}
				else 
				{
					$charger=changerMDP($_SESSION['id'], $nouveauMDP1);
					$_SESSION['password']=$nouveauMDP1;
					$affichage = 'Vôtre mot de passe à été mis à jour';
					echo $affichage;
					// Affichage de la confirmation de la changementMDP
		    		include CHEMIN_VUE.'changementMDP_ok.php';
				}
			}
		}
		else // Accès pas refusé !
		{
			$affichage = 'Accés refusé vous compte est incorrectement  !';
			echo $affichage;
			// On réaffiche le formulaire de changementMDP
			$erreurs_changementMDP[] = "Nom d'utilisateur ou mot de passe inexistant.";
		}
	}

	// On affiche le formulaire de changementMDP si on n'est pas déja connecté 
	if (empty($changementMDP_effectuee))
	{
	 include CHEMIN_VUE.'formulaire_changerMDP.php';
	}
}
?>