<style type="text/css">
.niveau2{margin-left:15px !important;}
.niveau3{margin-left:15px !important;}
.badge{width: 130px;}
</style>
<div class="container">
	<div class="row">
		<div id="gauche" class="col-lg-2"> 
			<br/><br/> 
			<div id="monmenu">
				<ul class="niveau1">
<?php 
					foreach($rayons as $rayon) {
					$idRayon=$rayon['id_rayon'];
					$libelleRayon=$rayon['libelle'];
					echo "<li><span class='badge  light-blue darken-3'><h6>$libelleRayon</h6></span>";
?>
						<ul class="niveau2">
<?php 
						if(isset($rayon['categories']))
						{
							foreach($rayon['categories'] as $categorie)
							{
							$idCategorie=$categorie['id_categorie'];
							$libelleCategorie=$categorie['libelle'];
							echo "<li><span class='badge light-blue darken-2'><h6>$libelleCategorie</h6></span>";
?>
								<ul class="niveau3">
<?php 
								if(isset($categorie['produits']))
								{
									foreach($categorie['produits'] as $produit)
									{
									$idProduit=$produit['id_produit'];
									$libelleProduit=$produit['libelle'];   				
									echo "<li><span class='badge  light-blue lighten-1'><a href='index.php?module=commerce&action=produit&produit=$idProduit'><h6>$libelleProduit</h6></a></span></li>";
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