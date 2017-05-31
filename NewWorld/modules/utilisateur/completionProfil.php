<?php
if (!utilisateur_est_connecte()) {
    // On affiche la page d'erreur comme quoi l'utilisateur est déjà connecté   
    include CHEMIN_VUE.'erreur_non_connecte.php';  
} 
else 
{
    $completion_inscription = false;
    // Création d'un tableau des erreurs
    $erreurs_completion = array();

    // Validation des champs suivant les règles
    if (isset ($_POST['adresse']))
    { 
      $adresse = $_POST['adresse'];
    }
    else
    {
      $adresse="";
    }
    if (isset ($_POST['cp']))
    { 
      $cp = $_POST['cp'];
    }
    else
    {
      $cp="";
    }
        if (isset ($_POST['ville']))
    { 
      $ville = $_POST['ville'];
    }
    else
    {
      $ville="";
    }
    if (isset ($_POST['type']))
    { 
      $type = $_POST['type'];
    }
    else
    {
      $type="";
    }
        if (isset ($_POST['iban']))
    { 
      $iban = $_POST['iban'];
    }
    else
    {
      $iban="";
    }
        if (isset ($_POST['id_question']))
    { 
      $id_question = $_POST['id_question'];
    }
    else
    {
      $id_question="";
    }
            if (isset ($_POST['reponse']))
    { 
      $reponse = $_POST['reponse'];
    }
    else
    {
      $reponse="";
    }
    // Si d'autres erreurs ne sont pas survenues
    if (empty($erreurs_completion)&& !empty($adresse) && !empty($cp) && !empty($ville) && !empty($type) && !empty($iban) && !empty($id_question) && !empty($reponse)) {
        require_once CHEMIN_MODELE.'authentification.php';
        // completion_profil()) est défini dans ~/modeles/authentification.php
        $completion_inscription= completion_profil($type, $adresse, $cp, $ville, $type, $iban, $id_question, $reponse);
        //include CHEMIN_VUE.'completer_inscription_effectuee.php';
    } 
    else 
    { 
            $erreur =& $id_utilisateur; // Changement de adresse de variable (plus lisible)
            // On vérifie que l'erreur concerne bien un doublon
            if (23000 == $erreur[0]) {  
                // Le code d'erreur 23000 siginife "doublon" dans le standard ANSI SQL
                preg_match("`Duplicate entry '(.+)' for key \d+`is", $erreur[2], $valeur_probleme);
                $erreurs_completion[] = "Cette adresse e-mail ou ce même adresse et préadresse sont déja utilisé.";
                //  include CHEMIN_VUE.'inscription_non_effectuee.php';
                if (isset ($valeur_probleme[1]))
                { 
                    $erreurs_completion[] = $valeur_probleme[1];
                }
                
            } else {

                $erreurs_completion[] = "Erreur ajout SQL : cas non trait&eacute; (SQLSTATE = %d) $erreur[0]";
            }
                }
    //}
    if (! $completion_inscription) {
      // Affichage du formulaire inscription
        include CHEMIN_VUE.'formulaire_completion.php';
    }
}