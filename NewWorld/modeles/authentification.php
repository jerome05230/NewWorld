<?php
require ('global/configMysql.php');
//code les mot de passe 
function hashPassword( $pwd )
{
    return sha1($pwd);
}

//connexion d'un utilisateur
function connexion($username, $password)
{
	global $connexion;
    $mdp = hashPassword(trim($password));
    $requeteTxt = "SELECT login 
    	FROM clients
		WHERE login =  '$username'
        AND  password = '$mdp';";
//echo($requeteTxt);
$requete = mysqli_query($connexion, $requeteTxt) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error($connexion));  
// on fait une boucle qui va faire un tour pour chaque enregistrement 
$cpt=0;
while($data = mysqli_fetch_assoc($requete))  
    { 
    	// on retourne les informations de l'enregistrement en cours
		$result[$cpt]=$data; 
		$cpt++;
    	return $result;  
    }  
}
//optien toutes les infos de l'utilisateur
function lire_infos_utilisateur($login) 
{
	global $connexion;
	$requeteTxt = "SELECT id_client, login, nom, prenom, cp, ville, adresse, type, mail, telephone_fixe, telephone_portable
		FROM clients
		WHERE login = '$login'";
	$requete = mysqli_query($connexion, $requeteTxt) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error($connexion));
	// on fait une boucle qui va faire un tour pour chaque enregistrement 
	$cpt=0;
	while($data = mysqli_fetch_assoc($requete))  
    { 
    	// on retourne les informations de l'enregistrement en cours
		$result[$cpt]=$data; 
		$cpt++;
    	return $result;  
    }
}
function lire_full_infos_utilisateur($login) 
{
	global $connexion;
	$requeteTxt = "SELECT adresse, cp, ville, type, id_question, reponse 
		FROM clients
		WHERE login = '$login'";
	$requete = mysqli_query($connexion, $requeteTxt) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error($connexion));
	// on fait une boucle qui va faire un tour pour chaque enregistrement 
	$cpt=0;
	while($data = mysqli_fetch_assoc($requete))  
    { 
    	// on retourne les informations de l'enregistrement en cours
		$result[$cpt]=$data; 
		$cpt++;
    	return $result;  
    }
}
function inscription($nom, $prenom, $email, $login, $telFixe, $telPort, $password)
{
	global $connexion;
	$valide=false;
	$requeteIdTxt ="SELECT IFNULL(MAX(id_client),0)+1 AS id FROM clients ";
	$requeteId = mysqli_query($connexion, $requeteIdTxt) or die('Erreur SQL !<br>'.$requeteId.'<br>'.mysqli_error($connexion));
	$date=date('Y-m-d');
	$id="";
	if($data = mysqli_fetch_assoc($requeteId))  
    { 
    	// on retourne les informations de l'enregistrement en cours
    	$id=$data[0];
    }  
    $requeteTxt = "INSERT into clients(id_client, nom, prenom, mail, login, telephone_fixe, telephone_portable, password, id_etat, date_inscription)VALUES ($id, '$nom', '$prenom', '$email', '$login', '$telFixe', '$telPort', '$password', 0, '$date')";
    // on vérifie que la requète est correctement été exécutée
	if ($requete = mysqli_query($connexion, $requeteTxt) or die('Erreur SQL !<br>'.$requeteTxt.'<br>'.mysqli_error($connexion))){
		$valide=true;
	}  
	return $valide;
}

//mise a jour des information de l'utilisateur
function completion_profil($login, $adresse, $cp, $ville, $type, $iban, $id_question, $reponse)
{
	global $connexion;
	$requeteTxt = "UPDATE utilisateurs SET
		login = $login,
		adresse = $adresse,
		cp = $cp,
		ville = $ville,
		type = $type,
		iban = $iban,
		id_question = $id_question,
		reponse = $reponse
		WHERE
		login = $login;";
var_dump($requete);
	// on vérifie que la requète est correctement été exécutée
	if ($requete = mysqli_query($connexion, $requeteTxt) or die('Erreur SQL !<br>'.$requeteTxt.'<br>'.mysqli_error($connexion))){
		$valide=true;
	} 
	return $valide;
	}

/*//mise a jour du mot de passe de l'utilisateur
function maj_mdp_membre($login,$mdp)
{
	global $connexion;
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
	global $connexion;
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
}*/

//mysqli_close($connexion);
