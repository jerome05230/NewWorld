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
        <div class="form-header  blue darken-4">
            <h3><i class="fa fa-lock"></i>Completion Profil:</h3>
        </div>
        <!--Body-->
        <form id="register" class="ajax-auth" action='index.php?module=utilisateur&action=completionProfil' method="post">
          <div class="md-form">
            <i class="fa fa-globe prefix"></i>
            <input type="text" id="adresse" class="form-control" name="adresse" maxlenght="255" required>
            <label for="adresse">Votre adresse</label>
          </div>
          <div class="md-form">
            <i class="fa fa-globe prefix"></i>
            <input type="text" id="cp" class="form-control" name="cp" maxlenght="10" required>
            <label for="cp">Votre cp</label>
          </div>
          <div class="md-form">
            <i class="fa fa-globe prefix"></i>
            <input type="text" id="ville" class="form-control" name="ville" maxlenght="30" required>
            <label for="ville">Votre ville</label>
          </div>
          <div class="md-form">
            <i class="fa fa-phone prefix"></i>
            <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" id="tel_fixe" class="form-control" name="telFixe" required>
            <label for="telFixe">Votre telephone fixe</label>
          </div>
          <div class="md-form">
            <i class="fa fa-phone prefix"></i>
            <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" id="tel_Port" class="form-control" name="telPort" required>
            <label for="telPort">Votre telephone fixe</label>
          </div>
          <div class="md-form">
            <i class="fa fa-credit-card prefix"></i>
            <input type="text" id="iban" class="form-control" name="iban" minlenght="34" maxlenght="34" required>
            <label for="iban">Votre iban </label>
          </div>
<?php
          // Material Select Initialization
          //$(document).ready(function() {
          //  $('.mdb-select').material_select();
          //});
?>
          <!--question secrete -->
          <div class="md-form">
            <div class="md-form">
            <select class="mdb-select" id="id_question" class="form-control" name="id_question" required>
              <option value="" disabled selected>Question secrète</option>
<?php
              foreach($questions as $question)
              {
                $id_question=$question['id_question'];
                $libelle=$question['libelle'];
                echo"<option value='$id_question'>$libelle</option>";
              }
?>  
            </select>
            </div>
            <div class="md-form">
              <i class="fa fa-font prefix"></i>
              <input type="text" id="reponse" class="form-control" name="reponse" maxlenght="50" required>
              <label for="reponse">Votre réponse secrète</label>
            </div>
          </div>
          <div class="md-form col-lg-10">
              <input name="client" type="checkbox" class="form-control" id="client" checked> 
              <label for="checkboxC">Client</label>
          </div>
          <div class="md-form col-lg-10">
              <input name="pointRelai" type="checkbox" class="form-control" id="pointRelai">
              <label for="checkboxR">Point Relai</label>
          </div>
          <div class="md-form col-lg-10">
              <input name="producteur" type="checkbox" class="form-control" id="producteur">
              <label for="checkboxP">Producteur</label>
          </div>
          <div class="text-center">
            <button class="submit_button btn btn-primary" type="submit" value="connexion">Completer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</center>
