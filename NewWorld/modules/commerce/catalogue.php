<?php
require_once CHEMIN_MODELE.'commerce.php';
$rayons=chargerRayons();
$produits=chargerTousProduits();
include CHEMIN_VUE.'categories_info.php';
include CHEMIN_VUE.'tous_produits_infos.php';
?> 