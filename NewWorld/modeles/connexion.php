<?php
//code les mot de passe 
function hashPassword( $pwd )
{
    return sha1('e*?g^*~Ga7' . $pwd . '9!cF;.!Y)?');
}

//connexion d'un utilisateur
function connexion($login, $mdp)
{
    $mdp = hashPassword($mdp);
	 
    $requete = "SELECT login FROM utilisateurs
		WHERE login =  $login
        AND  mdp = $mdp;";
var_dump($requete);
$req = mysql_query($requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysql_error());  
// on fait une boucle qui va faire un tour pour chaque enregistrement 
$cpt=0;
while($data = mysql_fetch_array($requete))  
    { 
    	// on retourne les informations de l'enregistrement en cours
		$result[$cpt]=$result; 
		$cpt++;
    	return $result;  
    }  
}
function inscription()
{
    $requete = "INSERT into utilisateurs VALUES ($nom, $prenom, $sexe, $departement, $cp, $ville, $adresse, $mail, $fixe, $portable, $question, $reponse, $type)";
?><script>alert ("bonjour");</script><?php
var_dump($requete);
$req = mysql_query($requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysql_error());  
// on fait une boucle qui va faire un tour pour chaque enregistrement 
$cpt=0;
while($data = mysql_fetch_array($requete))  
    { 
    	// on retourne les informations de l'enregistrement en cours
		$result[$cpt]=$result; 
		$cpt++;
    	return $result;  
    }  
}

//mise a jour des information de l'utilisateur
function maj_infos_membre($login,$adresse,$codePostal,$ville)
{
	$requete = "UPDATE utilisateurs SET
		adresse = $adresse,
		cp = $codePostal,
		ville = $ville
		WHERE
		login = $login;";
var_dump($requete);
	// on vérifie que la requète est correctement été exécutée
	if ($conn->query($sql) === TRUE) 
	{
	    echo "update member's information successfully";
	} else
 	{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

//mise a jour du mot de passe de l'utilisateur
function maj_mdp_membre($login,$mdp)
{
	$requete = "UPDATE utilisateurs SET
		mdp = $mdp
		WHERE
		login = $login;";
var_dump($requete);

	// on vérifie que la requète est correctement été exécutée
	if ($conn->query($sql) === TRUE) 
	{
	    echo "update member's password successfully";
	} else
 	{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

//mise a jour du mail de l'utilisateur
function maj_email_membre($login, $email)
{
	$requete = "UPDATE utilisateurs SET
		email = $email
		WHERE
		login = $login;";
var_dump($requete);

	// on vérifie que la requète est correctement été exécutée
	if ($conn->query($sql) === TRUE) 
	{
	    echo "update member's mail successfully";
	} else
 	{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

//optien toutes les infos de l'utilisateur
function lire_infos_utilisateur($login) 
{
	$requete = "SELECT nom, prenom, sexe, departement_id, cp, ville_id, adresse, type, mail, telephone_fixe, telephone_portable
		FROM utilisateurs
		WHERE
		login = $login;";
var_dump($requete);

// on fait une boucle qui va faire un tour pour chaque enregistrement 
$cpt=0;
while($data = mysql_fetch_array($requete))  
    { 
    	// on retourne les informations de l'enregistrement en cours
		$result[$cpt]=$result; 
		$cpt++;
    	return $result;  
    }
}

