<div class="container text-center">
<table border="0" cellspacing="0" cellpadding="4">
<tr>
  <th align="center">Référence</th>
  <th align="center">Prix Unitaire</th>
  <th align="center">Quantité</th>
  <th align="center">Montant</th>
  <th align="center">Action</th>
</tr>
<?php
	$total=0;
	foreach ($infos_panier as $produit) {
		$ref=$produit["id_lot"];
		$qte=$produit["qte"];
		$prix=$produit["pu"];
		//$des=$infos_panier[0][$i]["description"];
		$montant=$qte*$prix;
		$total=$total+$montant;
		echo '<tr><td >'.$ref.'</td>';
		echo '<td align="right">'.$prix.' &euro;</td>';
		echo '<td align="right">'.$qte.'</td>';
		echo '<td align="right">'.$montant.' &euro;</td>';
		echo '<td align="center">';



		echo"<form id='ajout' action='index.php?module=panier&action=gestion_panier' method='post'>
			<div class='row col-lg-12'>
          		<input type='hidden' name='id' value=$ref />
          		<div class='row col-lg-3'>
          			<input type='hidden' name='operation' value='Ajouter au panier' />
          		</div>	
          		<div class='row col-lg-3'>
	            	<input type='number' id='quantite' class='form-control' name='quantite'>
	            	<label for='quantite'>quantité</label>
	       		</div>
	       		<div class='row col-lg-3'>
	            	<button class='submit_button btn btn-primary' type='submit' value='ajout' title='Ajouter au panier'><i class='fa fa-shopping-cart'></i></button>
				</div>
			</div>
        </form>";
		echo"<form id='ajout' action='index.php?module=panier&action=gestion_panier' method='post'>
			<div class='row col-lg-12'>
          		<input type='hidden' name='id' value=$ref />
          		<div class='row col-lg-3'>
          			<input type='hidden' name='operation' value='Supprimer du panier' />
          		</div>	
          		<div class='row col-lg-3'>
	            	<input type='number' id='quantite' class='form-control' name='quantite'>
	            	<label for='quantite'>quantité</label>
	       		</div>
	       		<div class='row col-lg-3'>
	            	<button class='submit_button btn btn-primary' type='submit' value='ajout' title='Supprimer du panier'><i class='fa fa-shopping-cart'></i></button>
				</div>
			</div>
        </form>";


		/*echo"
		<form name='formAjouterPanier' method='post' action='index.php?modules=panier&action=gestion_panier'>
	    <input type='hidden' id='id' name='id' value='$ref' />
	    <input type='hidden' name='operation' value='Ajout au panier' />
	    <input type='number' id='quantite' name='quantite' value='1' />
	    <button class='submit_button btn btn-primary' type='submit' value='+' title='Ajouter au panier'><i class='fa fa-shopping-cart'></i></button>
	    </form>
		<form name='formSuppArticle' method='post' action='index.php?modules=panier&action=gestion_panie'>
		<input type='hidden' id='refPdt' name='refPdt' value='$ref' />
		<input type='hidden' name='operation' value='Supprimer du panier' />
		<input type='number' id='quantite' name='quantite' value='1' />
		<button class='submit_button btn btn-primary' type='submit' value='-' title='Retirer au panier'><i class='fa fa-shopping-cart'></i></button>
		<input type='submit' name='Retirer au panier' value='-'/>
		</form>
		</td>
        </tr>";
 */     }
	  echo '<tr>';
	  echo '<td align="right" colspan="4">Total</td>';
	  echo '<td align="right">'.$total.' &euro;</td><td></td>';
	  echo '</tr>';
	  echo "
	    </table>
	    </div>
	    <div class='large-4 columns'>
		 <a href='index.php?module=commerce&action=catalogue'><input type='submit' name='continuer' value='Poursuivre vos achats'></a>";
		  //echo $formViderPanier;
		  //echo $formVCommander;
     ?>
</div>
