<?php
// Pas de vérification des droits d'accès nécessaires : tout le monde peut voir une commande :)

// Si le paramètre id est manquant ou invalide
// var_dump($_POST);
// var_dump($_GET);
	 $saisieCommande_effectuee = false;
	// Ne pas oublier d'inclure la librarie Form
	
	// "formulaire_saisieFrais" est l'ID unique du formulaire
	$form_saisieCommande = new Form('formulaire_saisieCommande');
	
	$form_saisieCommande->method('POST');
	
	$form_saisieCommande->add('text','Prenom')
	                ->Required(true)
	                ->label("Prenom");
					 
	$form_saisieCommande->add('text','Nom')
	                ->Required(true)
	                ->label("Nom");
			
	$form_saisieCommande->add('text','Adresse')
	                ->Required(true)
	                ->label("Adresse personnelle");						
									
	$form_saisieCommande->add('text','CodePost')
	                ->Required(true)
	                ->label("Code Postal");
		
	// $form_saisieCommande->add('reset', 'reset')
	                // ->Required(true)
	                // ->label("Votre ville*");				 
						 
	$form_saisieCommande->add('Submit', 'submit')
	                ->value("valider les modifications");
									
	// Pré-remplissage avec les valeurs précédemment entrées (s'il y en a)
	// $form_saisieCommande->bound($_POST);

	// Création d'un tableau des erreurs
	$erreurs_saisieCommande = array();
	
	// Si d'autres erreurs ne sont pas survenues
	echo $form_saisieCommande;
	if (empty($erreurs_saisieFrais)) {
	
	//list($nbNuitForfait, $nbKm,$nbNuitHotel,$nbRepas) =
		//	  $form_saisieCommande->get_cleaned_data('nom', 'prenom','dateEmb');

	
		// Tentative d'ajout du membre dans la base de données
		
		$nbNuitForfait = $form_saisieCommande->get_bounded_data('nbNuitForfait');
		$nbKm = $form_saisieCommande->get_bounded_data('nbKm');
		$nbNuitHotel =$form_saisieCommande->get_bounded_data('nbNuitHotel');
		$nbRepas = $form_saisieCommande->get_bounded_data('nbRepas');
		
		// Tiré de la documentation PHP sur <http://fr.php.net/uniqid>
		$hashvalidation = md5(uniqid(rand(), true));

		// ajouter_membre_dans_bdd() est défini dans ~/modeles/saisieFrais.php
		// Redimensionnement et sauvegarde de l'avatar (eventuel) dans le bon dossier
// a faire marcher
	if (! $saisieCommande_effectuee) {
	  // Affichage du formulaire saisieFrais
	  include 'modules/panier/vues/formulaires_infos_commande.php';
	}
}