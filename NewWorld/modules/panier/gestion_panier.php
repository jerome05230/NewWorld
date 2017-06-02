<?php 
switch($_POST["operation"])
{
		case "Vider le Panier":
			$_SESSION["panier"]=array();
			header('Location: index.php?module=panier&action=afficher_panier_vide');
			break;
		case "Ajouter au panier":
			$trouve = false;
			$i=count($_SESSION["panier"]);
			for ($k = 0; $k < $i ; $k++) { 
			// Est ce que le produit à déja été commandé ?
 				if ( @$_POST["id"] == $_SESSION["panier"][$k]["ref"] )  { 
 				// Cas produit déja commandé
					$_SESSION["panier"][$k]["quantite"] +=$_POST["quantite"];
					$trouve = true;
				} 
			} 
			if (! $trouve) {
				// Cas produit pas déja commandé
				$_SESSION["panier"][$i]["ref"]=$_POST["id"];
				$_SESSION["panier"][$i]["quantite"]=$_POST["quantite"];
			}
			header('Location: index.php?module=panier&action=afficher_panier');
			break;
		case "Supprimer du panier":
			$i=count($_SESSION["panier"]);
			for ($k = 0; $k < $i ; $k++) { // Est ce que le produit à déja été commandé ?
 				if ( $_POST["id"] == $_SESSION["panier"][$k]["ref"] )  {  
					$_SESSION["panier"][$k]["quantite"] -=$_POST["quantite"];
					if ($_SESSION["panier"][$k]["quantite"]<=0 ){ 
						if ($k == $i-1) { // cas 1 occurrence ou dernière occurrence du tableau
						unset($_SESSION["reference"][$k]);
				        unset($_SESSION["quantite"][$k]);
						} else { 
						 	for($n=$k;$n<$i;$n++)  {
								$_SESSION["panier"][$k]=$_SESSION["panier"][$k+1];   
                            }
						   	unset($_SESSION["panier"][$k-1]);
						 }
					}
				}   
			} 
			if (count($_SESSION["panier"]) != 0) {	// le panier est-il vide ?	
			  	header('Location: index.php?module=panier&action=afficher_panier');
			} else	{
			 	header('Location: index.php?module=panier&action=afficher_panier_vide');
			}
	        break;
}
