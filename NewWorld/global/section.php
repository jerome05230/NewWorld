<?php
/*
<!-------------------------------------------------------------------------------------
# Nom du programme                   : nom_du_fichier.html
# Version                            : 1.0
# Description                        : Page nom_de_la_page HTML5 du site nom_du_site
# Date de création                   : jj/mm/aaaa
# Date de modification               : jj/mm/aaaa
# Auteur                             : BARON-CAMPOS Jérôme
# Commentaire                        : 
------------------------------------------------------------------------------------->
*/
?>
<div class="row">
	<div id="gauche" class="col-lg-8">
  	<div id="texteGauche" style="text-align:center; font-family: 'Great Vibes', cursive; font-size:1.5em;">


    <?php /*if (utilisateur_est_connecte()) { ?>
    <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['pseudonyme']); ?>.</h>
    <?php }*/ ?>

    	<p>Les meilleurs produits de saison.</p>
    	<p>Du producteur à l'artisan et au  consommateur</p>
    	<p>Ni usine, ni camion, ni grande surface.</p>
    	<p>La terre et l'homme  à nouveau respectés.</p>
    	<p>New World</p>
    </div>
    <hr>
    <div class="row col-lg-12" id="complementTexteGauche">
    	<!--carte producteur-->	
    	<div class="card col-xs-12  default-color text-center  col-lg-3 ">
      	<div class="card-header default-color-dark white-text">
        	Producteur
        </div>
        <div class="card-block">
        	<h4 class="card-title">Agriculteurs, éleveurs</h4>
          <p class="white-text">Vous souhaitez proposer au juste prix des produits de qualité, sains, frais et de saison.</p>
          <a class="btn btn-default" href="inscriptionNW.php?role=producteur">S'inscrire</a>
        </div>
        <div class="card-footer text-muted default-color-dark white-text">
        	<p>déjà 243 inscrits</p>
        </div>		
      </div>
      <!--fin carte producteur-->
      <!--carte consommateur-->	
      <div class="card col-xs-12 card-info text-center  col-lg-4 offset-lg-1 offset-md-1">
      	<div class="card-header default-color-dark white-text">
        	Consommateur
        </div>
      	<div class="card-block">
        	<h4 class="card-title">Adulte éco-responsable</h4>
          <p class="white-text">Vous êtes un père ou une mère de famille responsable qui sait non seulement que l'on doit manger sain mais aussi que pour maintenir un centre ville et des campagnes peuplés, il est nécessaire de donne leurs chances aux producteurs et artisants.Les emplois que vous maintenez aujourd'hui seront peut-être ceux de vos enfants. Il faut développer l'activité locale en réduisant les coûts de transport ainsi que les intermédiaires.
        			Vous souhaitez proposer au juste prix des produits de qualité, sains, frais et de saison.</p>
          <a class="btn btn-default" href="inscriptionNW.php?role=client">S'inscrire</a>
        </div>
        <div class="card-footer text-muted default-color-dark white-text">
        	<p>déjà 5243 inscrits</p>
        </div>		
      </div>
      <!--fin carte consommateur-->
      <!--carte pointDeVente-->	
      <div class="card col-xs-12 default-color text-center  col-lg-3 offset-lg-1 offset-md-1">
      	<div class="card-header default-color-dark white-text">
        	Artisans
        </div>
        <div class="card-block">
        	<h4 class="card-title">Artisan de l'alimentaire</h4>
          <p class="white-text">Vous transformez les produits frais locaux et souhaitez maintenir votre commerce de centre ville face à l'omniprésence des grandes surfaces. Vous voyez chaque jour autour de vous des magasins qui ferment. NewWorld peut vous permettre un complément d'activité. Tentez cela ne coûte rien.</p>
          <a class="btn btn-default" href="inscriptionNW.php?role=distributeur">S'inscrire</a>
        </div>
        <div class="card-footer text-muted default-color-dark white-text">
        	<p>déjà 302 inscrits</p>
        </div>		
      </div>
      <!--fin carte consommateur--> 		
  	</div><!-- fin de la row des cartes -->
	</div><!--fin de la div gauche -->
	<div id="droite"class="col-lg-4" >
	<!--Card-->
  	<div class="card">
    	<!--Card image-->
    	<img class="img-fluid" src="img/jardinier.jpg" alt="jardinier">
    	<!--fin de la Card image-->
    	<!--Card content-->
    	<div class="card-block">
    	<!--Title-->
    		<h4 class="card-title">Paysans/Maraicher</h4>
        <!--Text-->
        <p class="card-text">En cultivant la Terre, ils la rendent plus propice à la vie.</p>
      </div>
      <!--fin de la Card content-->
    </div>
    <!--fin de la Card-->
    <!--Card-->
    <div class="card">
    	<!--Card image-->
      <img class="img-fluid" src="img/boucher.jpg" alt="boucher">
      <!--fin de la Card image-->
      <!--Card content-->
      <div class="card-block">
  	    <!--Title-->
	      <h4 class="card-title">Boucher, charcutier, boulanger</h4>
        <!--Text-->
        <p class="card-text">Ils transforment les produits locaux en respectant la charte et maintiennent les savoir faire et les centre villes vivants.</p>
      </div>
      <!--fin de la Card content-->
    </div>
    <!--fin de la Card-->   	
	</div><!-- fin de la div de droite -->
</div> <!-- fin de la div row --> 