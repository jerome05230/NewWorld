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
		<head><!-- En-tête de page -->
<link rel="stylesheet" type="text/css" href="style/template.css">
<title>NewWorld</title>
<script>
//affiche les formulaires correspondant au type d'utilisateur demandé
function afficherForm(etat1,etat2){
	document.getElementById('pr').style.visibility=etat1;
	document.getElementById('pv').style.visibility=etat2;
	}
	
function valider_numeroPort() {
	var nombre = document.getElementById("telephoneFixe").value;
	var chiffres = new String(nombre);
	// Enlever tous les charactères sauf les chiffres
	chiffres = chiffres.replace(/[^0-9]/g, '');
	// Le champs est vide
	if ( nombre == "" )
	{
		alert ( "Le champs est vide !" );
		return;
	}
	// Nombre de chiffres
	compteur = chiffres.length;
	if (compteur!=10)
	{
		alert("Assurez-vous de rentrer un numéro à 10 chiffres (xxx-xxx-xxxx)");
		return;
	}
	else
	{
		alert("Le numéro me semble bon !");
	}
}
function valider_numeroFixe() 
{
	var nombre = document.getElementById("telephonePort").value;
	var chiffres = new String(nombre);
	// Enlever tous les charactères sauf les chiffres
	chiffres = chiffres.replace(/[^0-9]/g, '');
	// Le champs est vide
	if ( nombre == "" )
	{
		alert ( "Le champs est vide !" );
		return;
	}
	// Nombre de chiffres
	compteur = chiffres.length;
	if (compteur!=10)
	{
		alert("Assurez-vous de rentrer un numéro à 10 chiffres (xxx-xxx-xxxx)");
		return;
	}
	else
	{
		alert("Le numéro me semble bon !");
	}
}
</script>

		</head>
	
