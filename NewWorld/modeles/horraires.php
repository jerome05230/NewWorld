horraires.php
DÉTAILS
ACTIVITÉ
Hier
J
Vous avez importé un élément
jeu. 20:08
PHP
horraires.php
Aucune activité enregistrée avant le 8 juin 2017


CREATE table horaire (
	`id_horraire` int(11) not null auto_increment,
	`id_client` int(11) not null,
	`lundi1` varchar(5),
	`lundi2` varchar(5),
	`lundi3` varchar(5),
	`lundi4` varchar(5),
	`mardi1` varchar(5),
	`mardi2` varchar(5),
	`mardi3` varchar(5),
	`mardi4` varchar(5),
	`mercredi1` varchar(5),
	`mercredi2` varchar(5),
	`mercredi3` varchar(5),
	`mercredi4` varchar(5),
	`jeudi1` varchar(5),
	`jeudi2` varchar(5),
	`jeudi3` varchar(5),
	`jeudi4` varchar(5),
	`vendredi1` varchar(5),
	`vendredi2` varchar(5),
	`vendredi3` varchar(5),
	`vendredi4` varchar(5),
	`samedi1` varchar(5),
	`samedi2` varchar(5),
	`samedi3` varchar(5),
	`samedi4` varchar(5),
	`dimanche1` varchar(5),
	`dimanche2` varchar(5),
	`dimanche3` varchar(5),
	`dimanche4` varchar(5),
	`joursFeries` bool,
	`pointFroid` bool,
	primary key (`id_horraire`),
	foreign key (`id_client`) references clients(`id_client`));






$selectHoraires = 'SELECT lundi1, lundi2, lundi3, lundi4, mardi1, mardi2, mardi3, mardi4, mercredi1, mercredi2, mercredi3, mercredi4, jeudi1, jeudi2, jeudi3, jeudi4, vendredi1, vendredi2, 
vendredi3, vendredi4, samedi1, samedi2, samedi3, samedi4, dimanche1, dimanche2, dimanche3, dimanche4, joursFeries, pointFroid FROM horaires WHERE idClient="'.$_SESSION["idUtilisateur"].'";';
	$queryHoraires = mysqli_query($db, $selectHoraires) or die ('Erreur SQL2 !<br>'.mysqli_error($db)); 
	$horaires = mysqli_fetch_array($queryHoraires);





<div class="card">
  <div class="card-block">
    <!--Header-->
    <div class="form-header  purple darken-4">
      <h3><i class="fa fa-lock"></i> Horraires d'ouverture:</h3>
    </div>
		<form method="POST" action="traitementModifHoraires.php">
			<?php echo '
			<label for="nomCommerce">Nom du commerce :</label>
			<input class="form-control" type="text" class="champsModifHoraires" name="nomCommerce" id="nomCommerce" value="" /><br/><br/>
			<div class="md-form">
			<label for="lundi">Lundi :</label>&nbsp;&emsp;&emsp; 
			<input class="form-control" type="time" placeholder="Ex: 8:00" class="champsModifHoraires" name="lundi1" id="lundi1" value="'.$horaires['lundi1'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 12:00" class="champsModifHoraires" name="lundi2" id="lundi2" value="'.$horaires['lundi2'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 14:00" class="champsModifHoraires" name="lundi3" id="lundi3" value="'.$horaires['lundi3'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 18:00" class="champsModifHoraires" name="lundi4" id="lundi4" value="'.$horaires['lundi4'].'" /><br/><br/>
			</div>

			<div class="md-form">
			<label for="mardi">Mardi :</label>&emsp;&emsp;&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 8:00" class="champsModifHoraires" name="mardi1" id="lundi1" value="'.$horaires['mardi1'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 12:00" class="champsModifHoraires" name="mardi2" id="lundi2" value="'.$horaires['mardi2'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 14:00" class="champsModifHoraires" name="mardi3" id="lundi3" value="'.$horaires['mardi3'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 18:00" class="champsModifHoraires" name="mardi4" id="lundi4" value="'.$horaires['mardi4'].'" /><br/><br/>
			</div>

			<div class="md-form">
			<label for="mercredi">Mercredi :</label>&nbsp;&nbsp;&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 8:00" class="champsModifHoraires" name="mercredi1" id="lundi1" value="'.$horaires['mercredi1'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 12:00" class="champsModifHoraires" name="mercredi2" id="lundi2" value="'.$horaires['mercredi2'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 14:00" class="champsModifHoraires" name="mercredi3" id="lundi3" value="'.$horaires['mercredi3'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 18:00" class="champsModifHoraires" name="mercredi4" id="lundi4" value="'.$horaires['mercredi4'].'" /><br/><br/>
			</div>

			<div class="md-form">
			<label for="jeudi">Jeudi :</label>&emsp;&emsp;&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 8:00" class="champsModifHoraires" name="jeudi1" id="lundi1" value="'.$horaires['jeudi1'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 12:00" class="champsModifHoraires" name="jeudi2" id="lundi2" value="'.$horaires['jeudi2'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 14:00" class="champsModifHoraires" name="jeudi3" id="lundi3" value="'.$horaires['jeudi3'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 18:00" class="champsModifHoraires" name="jeudi4" id="lundi4" value="'.$horaires['jeudi4'].'" /><br/><br/>
			</div>

			<div class="md-form">
			<label for="vendredi">Vendredi :</label>&nbsp;&nbsp;&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 8:00" class="champsModifHoraires" name="vendredi1" id="lundi1" value="'.$horaires['vendredi1'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 12:00" class="champsModifHoraires" name="vendredi2" id="lundi2" value="'.$horaires['vendredi2'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 14:00" class="champsModifHoraires" name="vendredi3" id="lundi3" value="'.$horaires['vendredi3'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 18:00" class="champsModifHoraires" name="vendredi4" id="lundi4" value="'.$horaires['vendredi4'].'" /><br/><br/>
			</div>

			<div class="md-form">
			<label for="samedi">Samedi :</label>&emsp;&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 8:00" class="champsModifHoraires" name="samedi1" id="lundi1" value="'.$horaires['samedi1'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 12:00" class="champsModifHoraires" name="samedi2" id="lundi2" value="'.$horaires['samedi2'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 14:00" class="champsModifHoraires" name="samedi3" id="lundi3" value="'.$horaires['samedi3'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 18:00" class="champsModifHoraires" name="samedi4" id="lundi4" value="'.$horaires['samedi4'].'" /><br/><br/>
			</div>

			<div class="md-form">
			<label for="dimanche">Dimanche :</label>&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 8:00" class="champsModifHoraires" name="dimanche1" id="lundi1" value="'.$horaires['dimanche1'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 12:00" class="champsModifHoraires" name="dimanche2" id="lundi2" value="'.$horaires['dimanche2'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 14:00" class="champsModifHoraires" name="dimanche3" id="lundi3" value="'.$horaires['dimanche3'].'" />&nbsp;
			<input class="form-control" type="time" placeholder="Ex: 18:00" class="champsModifHoraires" name="dimanche4" id="lundi4" value="'.$horaires['dimanche4'].'" /><br/><br/><br/>'?>

			<label><input type="checkbox" name="joursFeries" id="joursFeries" value="checkboxFeries" <?php if(isset($horaires['joursFeries'])){echo 'checked';} ?>>Ouvert pendant les jours fériés</label><br/>
			<div class="text-center">
				<button class="btn btn-deep-purple">Login</button>
			</div>
		</form>
	</div>
</div>



	$nomCommerce = $_POST['nomCommerce'];
	$idUtilisateur = $_SESSION['idUtilisateur'];
	
	$lundi1 = $_POST['lundi1'];
	$lundi2 = $_POST['lundi2'];
	$lundi3 = $_POST['lundi3'];
	$lundi4 = $_POST['lundi4'];
	$mardi1 = $_POST['mardi1'];
	$mardi2 = $_POST['mardi2'];
	$mardi3 = $_POST['mardi3'];
	$mardi4 = $_POST['mardi4'];
	$mercredi1 = $_POST['mercredi1'];
	$mercredi2 = $_POST['mercredi2'];
	$mercredi3 = $_POST['mercredi3'];
	$mercredi4 = $_POST['mercredi4'];
	$jeudi1 = $_POST['jeudi1'];
	$jeudi2 = $_POST['jeudi2'];
	$jeudi3 = $_POST['jeudi3'];
	$jeudi4 = $_POST['jeudi4'];
	$vendredi1 = $_POST['vendredi1'];
	$vendredi2 = $_POST['vendredi2'];
	$vendredi3 = $_POST['vendredi3'];
	$vendredi4 = $_POST['vendredi4'];
	$samedi1 = $_POST['samedi1'];
	$samedi2 = $_POST['samedi2'];
	$samedi3 = $_POST['samedi3'];
	$samedi4 = $_POST['samedi4'];
	$dimanche1 = $_POST['dimanche1'];
	$dimanche2 = $_POST['dimanche2'];
	$dimanche3 = $_POST['dimanche3'];
	$dimanche4 = $_POST['dimanche4'];
	
	if(isset($_POST['joursFeries']))
	{ $joursFeries = true; }
	else { $joursFeries = false; }
	
	if(isset($_POST['pointFroid']))
	{ $pointFroid = true; }
	else { $pointFroid = false; }
	



	//on verifie si l'utilisateur a deja entré ses horaires
	include 'connexionBDD.php';
	$verifId = 'SELECT id from horaires where idClient="'.$idUtilisateur.'";';
	$queryId = mysqli_query($db, $verifId) or die ('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error($db)); 
	$data = mysqli_fetch_array($queryId);
	if (!$data)
	{
	$sql = 'INSERT INTO horaires (idClient, lundi1, lundi2, lundi3, lundi4, mardi1, mardi2, mardi3, mardi4, mercredi1, mercredi2, mercredi3, mercredi4, jeudi1, jeudi2, jeudi3, jeudi4, 
vendredi1, vendredi2, vendredi3, vendredi4, samedi1,samedi2, samedi3, samedi4, dimanche1, dimanche2, dimanche3, dimanche4, joursFeries, pointFroid) VALUES (
	"'.$idUtilisateur.'",
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
	"'.$dimanche4.')";
	}
	else
	{
	$sql = "UPDATE horaires set idClient=, lundi1=$lundi1, lundi2=$lundi2, lundi3=$lundi3, lundi4=$lundi4, mardi1=$mardi1, mardi2=$mardi2, mardi3=$mardi3, mardi4=$mardi4, mercredi1=$mercredi1, mercredi2=$mercredi2, mercredi3=$mercredi3, mercredi4=$mercredi4, jeudi1=$jeudi1, jeudi2=$jeudi1, jeudi3=$jeudi3, jeudi4=$jeudi4, vendredi1=$vendredi1, vendredi2=$vendredi2, vendredi3=$vendredi3, vendredi4=$vendredi4, samedi1=$samedi1,samedi2=$samedi2, samedi3=$samedi3, samedi4=$samedi4, dimanche1=$dimanche1, dimanche2=$dimanche2, dimanche3=$dimanche3, dimanche4=$dimanche4, joursFeries=$joursFeries, pointFroid=$pointFroid WHERE id_client=$idUtilisateur";
	}


								<label><input type="checkbox" name="pointFroid" id="pointFroid" value="checkboxFroid" <?php if(isset($horaires['pointFroid'])){echo 'checked';} ?>>Possession d'un point froid</label><br/>

								<input class="form-control" type="submit" value="Modifier les horaires" style="float:right;"/>
							</form>
					</fieldset>
				</div> ,