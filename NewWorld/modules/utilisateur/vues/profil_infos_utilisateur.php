<h2>Votre Profil</h2>
<p>
	<img class="flottant_droite" src="<?php echo $avatar; ?>" title="Avatar de <?php echo htmlspecialchars($nom); ?>" />
	<span class="label_profil"><br />ID</span> : <?php echo htmlspecialchars($id); ?><br />
	<span class="label_profil">Nom</span> : <?php echo htmlspecialchars($nom); ?><br />
	<span class="label_profil">Pr&eacute;nom</span> : <?php echo htmlspecialchars($prenom); ?><br />
	<span class="label_profil">Adresse email</span> : <?php echo htmlspecialchars($email); ?><br />
	<span class="label_profil">Adresse </span> : <?php echo htmlspecialchars($adresse); ?><br />
	<span class="label_profil">Ville</span> : <?php echo htmlspecialchars($ville); ?><br />
	<span class="label_profil">Code postal</span> : <?php echo htmlspecialchars($codePostal); ?><br />
	<span class="label_profil">Date d'inscription</span> : <?php echo $dateinscription; ?><br />
	<span class="label_profil">Fonction : </span>  <?php echo $fonction; ?>
</p>
