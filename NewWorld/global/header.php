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
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
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
	
