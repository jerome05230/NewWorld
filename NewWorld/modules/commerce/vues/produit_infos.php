<div class="container text-center">
	<section class='section'>
    <!--First row-->
    	<div class='row'>
<?php
echo"
	        <div class='col-lg-3 col-md-6 mb-r'>
	            <!--Card-->
	            <div class='card'>
	                <!--Card image-->
	                <div class='img-fluid'>
	                    <img src='https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(15).jpg' class='img-fluid' alt=''>
	                </div>
	                <!--/.Card image-->
	                <!--Card content-->
	                <div class='card-block text-center'>
	                    <!--Category & Title-->
	                    <h4 class='card-title'>$id_produit</h4>
	                    <ul class='rating'>
	                        <li>$id</li>
	                        <li><$qte</li>
	                        <li>$dateRecolte</li>
	                        <li>$conservation</li>
	                        <li>$modeProd</li>
	                        <li>$rammassage</li>
	                    </ul>
	                    <!--Description-->
	                    <!--<p class='card-text'>$description</p>-->
	                    <!--Card footer-->
	                    <div class='card-footer'>
	                        <span class='left'>$pu / $unite</span>
	                        <span class='right'>
	                        
	                        	<form id='ajout' action='index.php?module=panier&action=gestion_panier' method='post'>
						          	<div class='md-form'>
						          		<input type='hidden' name='id' value=$id />
						          		<input type='hidden' name='operation' value='Ajouter au panier' />
							            <input type='number' id='quantite' class='form-control' name='quantite'>
							            <label for='quantite'>quantité</label>
						          	</div>
						          	<div class='text-center'>
							            <button class='submit_button btn btn-primary' type='submit' value='ajout' title='Ajouter au panier'><i class='fa fa-shopping-cart'></i></button>
						          	</div>
						        </form>
				            </span>
	                    </div>
	                </div>
	                <!--/.Card content-->
	            </div>
	            <!--/.Card-->
	        </div>";
?>
	        <!--/First column-->
	    </div>
	    <!--/First row-->
	</section>
	<!--/Section: Products v.1-->
</div>