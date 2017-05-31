<?php
if (!empty($erreurs_inscription))
 {
  echo "<div class='text-center'>
      <div class='large-12 columns'>";
	foreach($erreurs_inscription as $e) 
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
            <h3><i class="fa fa-lock"></i>Inscription:</h3>
        </div>
        <!--Body-->
        <form id="register" class="ajax-auth" action='index.php?module=utilisateur&action=inscription' method="post">
          <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="nom" class="form-control" name="nom" required>
            <label for="nom">Votre nom</label>
          </div>
          <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="prenom" class="form-control" name="prenom" required>
            <label for="prenom">Votre prénom</label>
          </div>
          <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="email" class="form-control" name="email" required>
            <label for="email">Votre email</label>
          </div>
          <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="text" id="login" class="form-control" name="login" required>
            <label for="login">Votre Login </label>
          </div>
          <div class="md-form">
            <i class="fa fa-phone prefix"></i>
            <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" id="telFixe" class="form-control" name="telFixe" required>
            <label for="telFixe">Votre telephone fixe</label>
          </div>
          <div class="md-form">
            <i class="fa fa-mobile prefix"></i>
            <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" id="telPort" class="form-control" name="telPort" required>
            <label for="telPort">Votre telephone portable</label>
          </div>
          <div class="text-center">
            <button class="submit_button btn btn-primary" type="submit" value="inscription">S'inscrire</button>
          </div>
        </form>
      </div>
      <!--Footer-->
      <div class="modal-footer">
        <div class="options">
          <p>Vous avez déjà un compte? <a href='index.php?module=utilisateur&amp;action=connexion'>Se connecter</a></p>
        </div>
      </div>
    </div>
  </div>
</center>