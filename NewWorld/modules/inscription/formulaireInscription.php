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
include ("../contenu/langue/francais.php");
?>
<section class=cl-12-l  id="section-accueil">
	<div id="inscription">
	<div class=cl-6-l>		
		<form method="post" action="../page/inscription/validationInscription.php">	
			<table class="tg">
			  <tr>
				<th class="tg-yw4l" colspan="2"><?=$nom?></th>
				<th class="tg-yw4l" colspan="2"><input type= "text" name="nom" maxlength="50"/></th>
			  </tr>
			  <tr>
				<td class="tg-yw4l" colspan="2"><?=$prenom?></td>
				<td class="tg-yw4l" colspan="2"><input type= "text" name="prenom" maxlength="50"/></td>
			  </tr>
			  <tr>
				<td class="tg-yw4l"><?=$sexe?></td>
				<td class="tg-yw4l"><input type= "radio" name="sexe" value="m"><?=$masculin?></td>
				<td class="tg-yw4l"><input type= "radio" name="sexe" value="f"><?=$feminin?></td>
				<td class="tg-yw4l"><input type= "radio" name="sexe" value="a"><?=$autre?></td>
			  </tr>
			  <tr>
				<td class="tg-yw4l" colspan="2"><?=$departement?></td>
				<td class="tg-yw4l" colspan="2"><input type="text" name="departement_id" maxlength="2"/></td>
			  </tr>
			  <tr>
				<td class="tg-yw4l" colspan="2"><?=$cp?></td>
				<td class="tg-yw4l" colspan="2"><input type="text" name="cp" maxlength="5"/></td>
			  </tr>
			  <tr>
				<td class="tg-yw4l" colspan="2"><?=$ville?></td>
				<td class="tg-yw4l" colspan="2"><select name="ville" maxlength="50">
					<!-- code  top: 29px;
  left: 0;
 php pour gérer les commune en fonction du cp -->
					<option value="france">France</option>
					<option value="espagne">Espagne</option>
					<option value="italie">Italie</option>
					<option value="royaume-uni">Royaume-Uni</option>
					<option value="canada">Canada</option>
					<option value="etats-unis">États-Unis</option>
					<option value="chine">Chine</option>
					<option value="japon">Japon</option></select></td>
			  </tr>
			  <tr>
				<td class="tg-yw4l" colspan="2"><?=$adresse?></td>
				<td class="tg-yw4l" colspan="2"><input type="text" name="adresse" maxlength="50"/></td>
			  </tr>
			  <tr>
				<td class="tg-yw4l" colspan="2"><?=$mail?></td>
				<td class="tg-yw4l" colspan="2"><input type="text" name="Mail" maxlength="50"/></td>
			  </tr>
			  <tr>
				<td class="tg-yw4l" colspan="2"><?=$telFixe?></td>
				<td class="tg-yw4l" colspan="2"><input id="telephoneFixe" type="text" name="telephoneFixe" maxlength="10" onblur="valider_numeroFixe()"/></td>
			  </tr>
			  <tr>
				<td class="tg-yw4l" colspan="2"><?=$telPortable?></td>
				<td class="tg-yw4l" colspan="2"><input id="telephonePort" type="text" name="telephonePortable" maxlength="10" onblur="valider_numeroPort()"/></td>
			  </tr>
			  <tr>
				<td class="tg-yw4l" colspan="2"><?=$questSecrete?></td>
				<td class="tg-yw4l" colspan="2"><select name="ville">
					<!-- code php pour gérer les questions -->
					<option value="france">France</option>
					<option value="espagne">Espagne</option>
					<option value="italie">Italie</option>
					<option value="royaume-uni">Royaume-Uni</option>
					<option value="canada">Canada</option>
					<option value="etats-unis">États-Unis</option>
					<option value="chine">Chine</option>
					<option value="japon">Japon</option></select></td>
			  </tr>
			  <tr>
				<td class="tg-yw4l" colspan="2"><?=$reponse?></td>
				<td class="tg-yw4l" colspan="2"><input id="reponse" type="text" name="reponse" maxlength="50"></td>
			  </tr>
			  <tr>
				<td class="tg-yw4l"><?=$userType?></td>
				<td class="tg-yw4l"><input type= "radio" name="type-user" value="pr" onclick="afficherForm('visible','hidden')"><?=$producteur?></td>
				<td class="tg-yw4l"><input type= "radio" name="type-user" value="cl" onclick="afficherForm('hidden','hidden')"><?=$client?></td>
				<td class="tg-yw4l"><input type= "radio" name="type-user" value="pv" onclick="afficherForm('visible','visible')"><?=$pointRelai?></td>
			  </tr>
			  <tr>
				<td class="tg-yw4l" colspan="4"><input type="submit" name="inscription" value="M'inscrire"/></td>
			  </tr>
			</table>
		</form>
	</div>

	<div class="cl-6-l" id="pv">
	<?php 
		$jour[0]="lundi";
		$jour[1]="mardi";
		$jour[2]="mercredi";
		$jour[3]="jeudi";
		$jour[4]="vendredi";
		$jour[5]="samedi";
		$jour[6]="dimanche";
		$debutMatinH[0]="DMHLundi";
		$debutMatinM[0]="DMMLundi";
		$finMatinH[0]="FMHLundi";
		$finMatinM[0]="FMMLundi";

		$debutMatinH[1]="DMHMardi";
		$debutMatinM[1]="DMMMardi";
		$finMatinH[1]="FMHMardi";
		$finMatinM[1]="FMMMardi";

		$debutMatinH[2]="DMHMercredi";
		$debutMatinM[2]="DMMMercredi";
		$finMatinH[2]="FMHMercredi";
		$finMatinM[2]="FMMMercredi";

		$debutMatinH[3]="DMHJeudi";
		$debutMatinM[3]="DMMJeudi";
		$finMatinH[3]="FMHJeudi";
		$finMatinM[3]="FMMJeudi";

		$debutMatinH[4]="DMHVendredi";
		$debutMatinM[4]="DMMVendredi";
		$finMatinH[4]="FMHVendredi";
		$finMatinM[4]="FMMVendredi";

		$debutMatinH[5]="DMHSamedi";
		$debutMatinM[5]="DMMSamedi";
		$finMatinH[5]="FMHSamedi";
		$finMatinM[5]="FMMSamedi";

		$debutMatinH[6]="DMHDimanche";
		$debutMatinM[6]="DMMDimanche";
		$finMatinH[6]="FMHDimanche";
		$finMatinM[6]="FMMDimanche";?>
	
		<form method="post">
		<?php for($jr=0;$jr<7;$jr++){ ?>
			<table class="tg">
			  <tr>
				<th class="tg-yw4l" colspan="4"><?php echo"$jour[$jr] :"; ?></th>
			  </tr>
			  <tr>
				<td class="tg-yw4l"><?=$de?></td>
				<td class="tg-yw4l"><input type="number" min="0" max="23" name="<?php $debutMatinH[$jr] ?>"><?=$heure?></td>
				<td class="tg-yw4l"><input type="number" min="0" max="59" name="<?php $debutMatinM[$jr] ?>"><?=$minute?></td>
				<td class="tg-yw4l"><?=$a?></td>
				<td class="tg-yw4l"><input type="number" min="0" max="23" name="<?php $finMatinH[$jr] ?>"><?$heure?></td>
				<td class="tg-yw4l"><input type="number" min="0" max="59" name="<?php $finMatinM[$jr] ?>"><?$minute?></td>
			  </tr>
			</table>		
			<?php } ?>
		</form>
	</div>
	<div class="cl-6-l" id="pr">
		<form method="post">
			<label class="white"> *IBAN: <input type= "text" name="iban"/>
		</form>	
	</div>
	</div>
</section>
			

<?php

if(!empty($_POST['pseudo']))
{
	// D'abord, je me connecte à la base de données.
	mysql_connect("localhost", "root", "");
	mysql_select_db("nom_db");
	// Je mets aussi certaines sécurités ici…
	$passe = mysql_real_escape_string(htmlspecialchars($_POST['passe']));
	$passe2 = mysql_real_escape_string(htmlspecialchars($_POST['passe2']));
	if($passe == $passe2)
	{
		$pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
		$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
		// Je vais crypter le mot de passe.
		$passe = sha1($passe);
		mysql_query("INSERT INTO validation VALUES('', '$pseudo', '$passe', '$email')");
	}
	else
	{
		echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
	}
}
?>


