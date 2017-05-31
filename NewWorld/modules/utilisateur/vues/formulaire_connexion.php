<?php
if (!empty($erreurs_connexion)) 
{
  echo "<div class='text-center'>
			<div class='large-12 columns'>";
			foreach($erreurs_connexion as $e) 
      {
		   echo"<div class='row'>
					<div class='large-12 columns'>
						<li>".$e."</li>
					</div>
				</div> \n";
			}
	   echo"</div> 
		</div>";
}
?>
<br/>
<br/>
<center>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-block">
        <!--Header-->
        <div class="form-header  purple darken-4">
            <h3><i class="fa fa-lock"></i>Authentification:</h3>
        </div>
        <!--Body-->
        <form id="login" class="ajax-auth" action="index.php?module=utilisateur&action=connexion" method="post">
          <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="username" class="form-control" name="username">
            <label for="username">Identifiant</label>
          </div>
          <div class="md-form">
              <i class="fa fa-lock prefix"></i>
              <input type="password" id="password" class="form-control" name="password">
              <label for="password">mot de passe</label>
          </div>
          <div class="text-center">
            <button class="submit_button btn btn-primary" type="submit" value="connexion">Se Connecter</button>
          </div>
        </form>
      </div>
      <!--Footer-->
      <div class="modal-footer">
        <div class="options">
          <p>Pas encore inscrit? <a href='index.php?module=utilisateur&amp;action=inscription'>S'inscrire</a></p>   
          <p> Mot de passe <a href='index.php?module=utilisateur&amp;action=retrouver'> oublie?</a></p>
        </div>
      </div>
    </div>
  </div>
</center>
