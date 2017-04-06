<?php
/*
<!----------------------------------------------------------------------------------
# Nom du programme                   : nom_du_fichier.html
# Version                            : 1.0
# Description                        : Page nom_de_la_page HTML5 du site nom_du_site
# Date de création                   : jj/mm/aaaa
# Date de modification               : jj/mm/aaaa
# Auteur                             : Baron-campos Jérôme 
# Commentaire                        : 
------------------------------------------------------------------------------------>
 */
?>
<nav class="cl-12-l degrade">
	<!-- Liens de navigation "menu"  -->
	<div class=cl-12-l><p class=align-right>france|<a class=align-right href="modules/inscription/inscription.php">Connexion/inscription</a></p></div>
	<ul id="menu-bar">
	  <li class="active cl-1-l"><a href="index.php">NW</a></li>
	  <li class=cl-2-l><a href="#">Acheter</a>
	   <ul>
		<li><a href="">Products 1</a></li>
		<li><a href="#">Products 2</a></li>
		<li><a href="#">Products 3</a></li>
		<li><a href="#">Products 4</a></li>
	   </ul>
	  </li>
	  <li class=cl-2-l><a href="#">Produire</a>
	   <ul>
		<li><a href="#">Produire 1</a></li>
		<li><a href="#">Produire 2</a></li>
		<li><a href="#">Produire 3</a></li>
		<li><a href="#">Produire 4</a></li>
	   </ul>
	  </li>
	  <li class=cl-2-l><a href="#">Distribuer</a>
	   <ul>
		<li><a href="#">Distribuer 1</a></li>
		<li><a href="#">Distribuer 2</a></li>
		<li><a href="#">Distribuer 3</a></li>
		<li><a href="#">Distribuer 4</a></li>
	   </ul>
	  </li>
	 <!-- Barre de recherche -->
	  <li class=cl-3-l><form action="/search" id="searchthis" method="get">
	   <input id="search" name="q" type="text" placeholder="Mot cle" />
	   <input id="search-btn" type="submit" value="Rechercher" />
	  </form></li>
	</ul>
</nav>
