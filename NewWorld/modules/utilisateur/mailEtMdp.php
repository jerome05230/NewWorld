<?php
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
		$mail = 'jerome.baroncampos@gmail.com'; // Déclaration de l'adresse de destination.
		//=====Déclaration des messages au format texte et au format HTML.
		$message='bonjour voici ton mdp :'.$mot_de_passe.'<br/>veillez vous connectez et modifier vôte profil pour valider vôtre compte';  
		//========== 
		//=====Envoi de l'e-mail.
		mail($mail,'test',$message);
        return $mot_de_passe;   
}


