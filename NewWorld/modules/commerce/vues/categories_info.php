<div class="container text-center">
	<div id="monmenu">
		<ul class="niveau1">
<?php 
			foreach($rayons as $rayon) {
			$idRayon=$rayon['id_rayon'];
			$libelleRayon=$rayon['libelle'];
			echo "<li>$libelleRayon";
?>
				<ul class="niveau2">
<?php 
				if(isset($rayon['categories']))
				{
					foreach($rayon['categories'] as $categorie)
					{
					$idCategorie=$categorie['id_categorie'];
					$libelleCategorie=$categorie['libelle'];
					echo "<li>$libelleCategorie";
?>
						<ul class="niveau3">
<?php 
						if(isset($categorie['produits']))
						{
							foreach($categorie['produits'] as $produit)
							{
							$idProduit=$produit['id_produit'];
							$libelleProduit=$produit['libelle'];	      				
							echo "<li><a href='index.php?module=commerce&action=produit&produit=$idProduit'>$libelleProduit</a></li>";
?>
							</li>
<?php
							}						
						}
?>
						</ul>
					</li>
<?php
					}
				}
?>
	    		</ul>
			</li>
<?php
			}
?>
		</ul>
	</div>
</div>