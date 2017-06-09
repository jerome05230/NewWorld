<?php
require_once CHEMIN_MODELE.'commerce.php';
$rayons=chargerRayons();
include CHEMIN_VUE.'categories_info.php';
$produits = chargerProduits($_GET['produit']);
if (@$_POST['action'] == "Vider le Panier") {  // On vide le panier
	include_once 'modules/panier/gestion_panier.php'; // On vide le panier ici puisque action="Vider le Panier"
	include_once 'modules/panier/vues/panier_vide.php'; // inutile
} 
if ((@$_POST['action'] != "Vider le Panier") &&  (@$_POST['action'] != "Passer la Commande")) {
	if (! isset ($_POST['refPdt'])) { 
		include CHEMIN_VUE.'produit_infos.php';
	} 
	if (@isset ($_POST['refPdt'])) { 
		include_once 'modules/panier/gestion_panier.php';
		include_once 'modules/panier/afficher_panier.php';
	}
} 
if (@$_POST['action'] == "Passer la Commande")  {  // ON PASSE LA COMMANDE
    	include 'modules/panier/afficher_commande.php';
}
?>