<h2>Modification de votre profil utilisateur</h2>
<?php
if (!empty($msg_confirm))
 {
	echo '<ul>'."\n";
	foreach($msg_confirm as $m) {
		echo '	<li>'.$m.'</li>'."\n";
	}
	echo '</ul>';
}
if (!empty($erreurs_form_modif_infos))
 {
	echo '<ul>'."\n";
	foreach($erreurs_form_modif_infos as $e) {
		echo '	<li>'.$e.'</li>'."\n";
	}
	echo '</ul>';
}

if (!empty($erreurs_form_modif_infos_localisation))
 {
	echo '<ul>'."\n";
	foreach($erreurs_form_modif_infos_localisation as $e) {
		echo '	<li>'.$e.'</li>'."\n";
	}
	echo '</ul>';
}


$form_modif_infos_localisation->fieldsets(array("Modification de l'adresse, de la ville et du code postal " => array('adresse', 'codePostal', 'ville')));
echo $form_modif_infos_localisation;

// $form_modif_infos->fieldsets("Modification de l'e-mail et de l'avatar", array('email', 'suppr_avatar', 'avatar'));
$form_modif_infos->fieldsets(array("Modification de l'e-mail et de l'avatar" => array('email', 'suppr_avatar', 'avatar')));
echo $form_modif_infos;
if (!empty($erreurs_form_modif_mdp)) {
	echo '<ul>'."\n";
	foreach($erreurs_form_modif_mdp as $e) {
		echo '	<li>'.$e.'</li>'."\n";
	}
	echo '</ul>';
}


// $form_modif_mdp->fieldsets("Modification du mot de passe", array('mdp_ancien', 'mdp', 'mdp_verif'));
$form_modif_mdp->fieldsets(array("Modification du mot de passe" => array('mdp_ancien', 'mdp', 'mdp_verif')));
echo $form_modif_mdp;


