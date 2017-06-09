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
	$result="";
	while($data = mysqli_fetch_assoc($requete))  
    { 
    	// on retourne les informations de l'enregistrement en cours
		$result=$data; 
    	return $result;  
    }  
}
//optien toutes les infos de l'utilisateur
function lire_infos_utilisateur($login) 
{
	global $connexion;
	$requeteTxt = "SELECT id_client, login, nom, prenom, cp, ville, adresse, type, mail, telephone_fixe, telephone_portable, password
		FROM clients
		WHERE login = '$login'";
	$requete = mysqli_query($connexion, $requeteTxt) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error($connexion));
	$result="";
	if($data = mysqli_fetch_assoc($requete))  
    { 
    	// on retourne les informations de l'enregistrement en cours
		$result=$data; 
    }
    return $result;  
}
function lire_full_infos_utilisateur($login) 
{
	global $connexion;
	$requeteTxt = "SELECT adresse, cp, ville, type, id_question, reponse 
		FROM clients
		WHERE login = '$login'";
	$requete = mysqli_query($connexion, $requeteTxt) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error($connexion));
	// on fait une boucle qui va faire un tour pour chaque enregistrement 
	$result="";
	if($data = mysqli_fetch_assoc($requete))  
    { 
    	// on retourne les informations de l'enregistrement en cours
		$result=$data; 
    }
    return $result;
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
	$requeteTxt = "UPDATE clients SET
		adresse = '$adresse',
		cp = '$cp',
		ville = '$ville',
		type = '$type',
		iban = '$iban',
		id_question = $id_question,
		reponse = '$reponse'
		WHERE
		login = '$login';";
	// on vérifie que la requète est correctement été exécutée
	if ($requete = mysqli_query($connexion, $requeteTxt) or die('Erreur SQL !<br>'.$requeteTxt.'<br>'.mysqli_error($connexion)))
	{
		$valide=true;
	} 
	return $valide;
}

function question()
{
	global $connexion;
	$requeteTxt = "SELECT * FROM questions_secrete";
	// on vérifie que la requète est correctement été exécutée
	$requete = mysqli_query($connexion, $requeteTxt) or die('Erreur SQL !<br>'.$requeteTxt.'<br>'.mysqli_error($connexion));
	$questions="";
	$cpt=0;
	while($data = mysqli_fetch_assoc($requete))  
    { 
    	// on retourne les informations de l'enregistrement en cours
		$result[$cpt]=$data; 
		$cpt++;  
    }
    return $result;
}
function changerMDP($id,$mdp)
{
	global $connexion;
	$password=hashPassword(trim($mdp));
	$requeteTxt = "UPDATE clients SET
		password = '$password'
		WHERE
		id_client = $id";
	if ($requete = mysqli_query($connexion, $requeteTxt) or die('Erreur SQL !<br>'.$requeteTxt.'<br>'.mysqli_error($connexion)))
	{
		$valide=true;
	} 
	return $valide;
}
function chargerHorraires()
{
	global $connexion;
	$requeteTxt = 'SELECT lundi1, lundi2, lundi3, lundi4, mardi1, mardi2, mardi3, mardi4, mercredi1, mercredi2, mercredi3, mercredi4, jeudi1, jeudi2, jeudi3, jeudi4, vendredi1, vendredi2, 
vendredi3, vendredi4, samedi1, samedi2, samedi3, samedi4, dimanche1, dimanche2, dimanche3, dimanche4, joursFeries, pointFroid FROM horaire WHERE id_client="'.$_SESSION["id"].'";';
	$requete = mysqli_query($connexion, $requeteTxt) or die ('Erreur SQL2 !<br>'.mysqli_error($connexion)); 
	$result="";
	while($data = mysqli_fetch_assoc($requete))  
    { 
    	// on retourne les informations de l'enregistrement en cours
		$result=$data; 
    }
    return $result;
}
function changerHorraires($idClient, $lundi1, $lundi2, $lundi3, $lundi4, $mardi1, $mardi2, $mardi3, $mardi4, $mercredi1, $mercredi2, $mercredi3, $mercredi4, $jeudi1, $jeudi2, $jeudi3, $jeudi4, $vendredi1, $vendredi2, $vendredi3, $vendredi4, $samedi1, $samedi2, $samedi3, $samedi4, $dimanche1, $dimanche2, $dimanche3, $dimanche4, $joursFeries, $pointFroid)
{
	global $connexion;
	$id_client=$_SESSION['id'];
	$requeteTxt1 = 'SELECT id_horraire from horaire where id_client="'.$idClient.'";';
	$requete1 = mysqli_query($connexion, $requeteTxt1) or die ('Erreur SQL !<br>'.$requeteTxt1.'<br>'.mysqli_error($connexion)); 
	$data = mysqli_fetch_array($requete1);
	if (!$data)
	{
	$requeteTxt2 = 'INSERT INTO horaire (id_client, lundi1, lundi2, lundi3, lundi4, mardi1, mardi2, mardi3, mardi4, mercredi1, mercredi2, mercredi3, mercredi4, jeudi1, jeudi2, jeudi3, jeudi4, 
vendredi1, vendredi2, vendredi3, vendredi4, samedi1,samedi2, samedi3, samedi4, dimanche1, dimanche2, dimanche3, dimanche4, joursFeries, pointFroid) VALUES (
	"'.$idClient.'",
	"'.$lundi1.'", 
	"'.$lundi2.'", 
	"'.$lundi3.'", 
	"'.$lundi4.'", 
	"'.$mardi1.'", 
	"'.$mardi2.'", 
	"'.$mardi3.'", 
	"'.$mardi4.'", 
	"'.$mercredi1.'",
	"'.$mercredi2.'",
	"'.$mercredi3.'",
	"'.$mercredi4.'",
	"'.$jeudi1.'",
	"'.$jeudi2.'",
	"'.$jeudi3.'",
	"'.$jeudi4.'",
	"'.$vendredi1.'",
	"'.$vendredi2.'",
	"'.$vendredi3.'",
	"'.$vendredi4.'",
	"'.$samedi1.'",
	"'.$samedi2.'",
	"'.$samedi3.'",
	"'.$samedi4.'",	
	"'.$dimanche1.'",	
	"'.$dimanche2.'",
	"'.$dimanche3.'",
	"'.$dimanche4.'",
	"'.$joursFeries.'",
	"'.$pointFroid.'")';
	}
	else
	{
	$requeteTxt2 = "UPDATE horaire set id_client=$id_client, lundi1='$lundi1', lundi2='$lundi2', lundi3='$lundi3', lundi4='$lundi4', mardi1='$mardi1', mardi2='$mardi2', mardi3='$mardi3', mardi4='$mardi4', mercredi1='$mercredi1', mercredi2='$mercredi2', mercredi3='$mercredi3', mercredi4='$mercredi4', jeudi1='$jeudi1', jeudi2='$jeudi1', jeudi3='$jeudi3', jeudi4='$jeudi4', vendredi1='$vendredi1', vendredi2='$vendredi2', vendredi3='$vendredi3', vendredi4='$vendredi4', samedi1='$samedi1', samedi2='$samedi2', samedi3='$samedi3', samedi4='$samedi4', dimanche1='$dimanche1', dimanche2='$dimanche2', dimanche3='$dimanche3', dimanche4='$dimanche4', joursFeries=$joursFeries, pointFroid=$pointFroid WHERE id_client=$id_client";
	}
	if ($requete = mysqli_query($connexion, $requeteTxt2) or die('Erreur SQL !<br>'.$requeteTxt2.'<br>'.mysqli_error($connexion)))
	{
		$valide=true;
	} 
	return $valide;
}
/*
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
?>
