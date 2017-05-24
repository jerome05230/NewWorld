<?php
if (!empty($erreurs_connexion)) {
	echo "bonjour";
  echo "<div class='row'>
			<div class='large-12 columns'>";
			foreach($erreurs_connexion as $e) {
				echo "erreur";
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
<!-- Modals -->
<!-- login Modal -->
<!--<div class="modal fade modal-ext" id="modal_login" tabindex="-1" role="dialog">
 	<div class="modal-dialog" role="document">
   		<div class="modal-content">-->
<form id="login" class="ajax-auth" action="index.php?module=utilisateur&action=connexion" method="post">
    <div class="text-center">
    	<h3 class="h3-responsive"><i class="fa fa-user"></i>Authentification: </h3>
    	<style type="text/css">.wp-social-login-connect-with{}.wp-social-login-provider-list{}.wp-social-login-provider-list a{}.wp-social-login-provider-list img{}.wsl_connect_with_provider{}</style>
    	<div class="wp-social-login-widget">
        	<div class="wp-social-login-connect-with">Se connecter avec:
        	</div>
        	<div class="wp-social-login-provider-list">
				<a rel="nofollow" href="pas de domaine" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
	        		<img alt="Facebook" title="Connect with Facebook" src="https://mdbootstrap.com/wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom/facebook.png" />
	        	</a>
	        	<a rel="nofollow" href="pas de domaine" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google">
	        		<img alt="Google" title="Connect with Google" src="https://mdbootstrap.com/wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom/google.png" />
	        	</a>
	        	<a rel="nofollow" href="pas de domaine" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter">
	        		<img alt="Twitter" title="Connect with Twitter" src="https://mdbootstrap.com/wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom/twitter.png" />
	        	</a>
    		</div>
        	<div class="wp-social-login-widget-clearing">
			</div>
    	</div>
    	<hr>
    	<div class="wp-social-login-widget">
      		<div class="wp-social-login-connect-with">Ou:
       		</div>
    	</div>
    </div><!-- fin du textcenter-->
    <p class="status"></p>
    <input type="hidden" id="security" name="security" value="aaeeddaed125" /><input type="hidden" name="_wp_http_referer" value="/" />
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
    <hr>
    <div class="text-center">
    	<p>Pas encore inscrit? <a href='index.php?module=utilisateur&amp;action=inscription'>S'inscrire</a></p>   
      <p> Mot de passe <a href='index.php?module=utilisateur&amp;action=retrouver'> oublie?</a></p>
    </div>
</form>
	   	<!-- fin de la form login -->
<!--    </div>
  </div>
</div>-->
  <!-- fin de login modal-->