<div id="contenu">
	<div class="row">
		<div class="large-12 columns">
			<div class="large-8 columns">
				<table border="0" cellspacing="0" cellpadding="4">
					<tr>
						<td align="center">R&eacute;f&eacute;rence</td>
						<td align="center">D&eacute;signation</td>
						<td align="center">Prix Unitaire</td>
						<td align="center">Quantit&eacute;</td>
						<td align="center">Montant</td>
						<td align="center">Action</td>
					</tr>
<?php
				$total=0;
				$c=count($infos_panier["ref"], COUNT_RECURSIVE);
				for($i = 0; $i< $c; $i++) {
					$ref=$infos_panier["ref"][$i];
					$qte=$infos_panier["qpte"][$i];
					$prix=$infos_panier["prix"][$i];
					$des=$infos_panier["description"][$i];
					$montant=$qte*$prix;
					$total=$total+$montant;
					echo '<tr>';
						echo '<td >'.$ref.'</td>';
						echo '<td >'.$des.'</td>';
						echo '<td align="right">'.$prix.' &euro;</td>';
						echo '<td align="right">'.$qte.'</td>';
						echo '<td align="right">'.$montant.' &euro;</td>';
						echo '<td align="center">';
?>
							<form name='formAjouterPanier' method='post' action='modules/panier/gestion_panier.php'>
							    <input type='hidden' id='refPdt' name='refPdt' value='$ref' />
							    <input type='hidden' name='action' value='Ajout au panier2' />
							    <input type='text' id='quantite' name='quantite' value='1' />
							    <input type='image' src='./images/mettrepanier.png' name='Ajouter au panier'  />
						    </form>
								<form name='formSuppArticle' method='post' action='modules/panier/gestion_panier.php'>
								<input type='hidden' id='refPdt' name='refPdt' value='$ref' />
								<input type='text' id='quantite' name='quantite' value='1' />
								<input type='hidden' name='action' value='Supprimer du panier2' />
								<input type='image' src='./images/retirerpanier.png' name='Retirer au panier' />
							</form>
						</td>
			        </tr>";
<?php
				}
					echo '<tr>';
					echo '<td align="right" colspan="4">Total</td>';
					echo '<td align="right">'.$total.' &euro;</td><td></td>';
					echo '</tr>';
?>
			    </table>
			</div>
		    <div class='large-4 columns'>
			 	<a href='index.php?module=visiteurs&amp;action=afficher_categories'><input type='submit' name='continuer' value='Poursuivre vos achats'></a>
<?php
			  	//echo $formViderPanier;
			  	//echo $formVCommander;
?>
			</div>
		</div>
	</div>
</div>

