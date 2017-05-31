<?php
/*if (!empty($erreurs_Completion))
 {
	echo "<div class='text-center'>
      <div class='large-12 columns'>";
  foreach($erreurs_completion as $e) 
      {
       echo"<div class='row'>
          <div class='large-12 columns'>
            <li>".$e."</li>
          </div>
        </div> \n";
      }
     echo"</div> 
    </div>";
  }*/
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
        <form id="register" class="ajax-auth" action='index.php?module=utilisateur&action=completionProfil' method="post">
          <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="adresse" class="form-control" name="adresse" required>
            <label for="adresse">Votre adresse</label>
          </div>
          <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="cp" class="form-control" name="cp" required>
            <label for="cp">Votre cp</label>
          </div>
          <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="ville" class="form-control" name="ville" required>
            <label for="ville">Votre ville</label>
          </div>
          <fieldset class="form-group">
            <input type="checkbox" class="filled-in" id="checkboxC">
            <label for="checkboxC">Client</label>
          </fieldset>
          <fieldset class="form-group">
            <input type="checkbox"  id="checkboxR">
            <label for="checkboxR">Point Relai</label>
          </fieldset>
          <fieldset class="form-group">
            <input type="checkbox" id="checkboxP">
            <label for="checkboxP">Producteur</label>
          </fieldset>
          <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="text" id="iban" class="form-control" name="iban" required>
            <label for="iban">Votre iban </label>
          </div>
<?php
          // Material Select Initialization
          //$(document).ready(function() {
          //  $('.mdb-select').material_select();
          //});
?>
          <select class="mdb-select">
            <option value="" disabled selected>Choose your option</option>
            <?php
            //foreach .......
            //  <option value="1"></option>
            ?>  
          </select>
          <label>Example label</label>
          <!--question secrete -->
          <div class="md-form">
            <i class="fa fa-phone prefix"></i>
            <input type="text" id="reponse" class="form-control" name="reponse" required>
            <label for="reponse">Votre telephone fixe</label>
          </div>
          <div class="text-center">
            <button class="submit_button btn btn-primary" type="submit" value="connexion">Se Connecter</button>
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