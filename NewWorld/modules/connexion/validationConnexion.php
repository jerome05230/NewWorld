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
function generer_mot_de_passe($nb_caractere = 12)
{
        $mot_de_passe = "";
       
        $chaine = "abcdefghjkmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ023456789+@!$%?&";
        $longeur_chaine = strlen($chaine);
       
        for($i = 1; $i <= $nb_caractere; $i++)
        {
            $place_aleatoire = mt_rand(0,($longeur_chaine-1));
            $mot_de_passe .= $chaine[$place_aleatoire];
        }

        return $mot_de_passe;   
}
$mdpRamdom=generer_mot_de_passe(12);
$mail = 'jerome.baroncampos@gmail.com'; // Déclaration de l'adresse de destination.
//=====Déclaration des messages au format texte et au format HTML.
$message='bonjour voici ton mdp:'.$mdpRandom;  
//========== 
//=====Envoi de l'e-mail.
mail($mail,'test',$message);
 
//==========

