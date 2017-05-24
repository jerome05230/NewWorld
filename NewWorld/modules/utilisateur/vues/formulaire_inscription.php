<?php
/*if (!empty($erreurs_inscription))
 {
	echo "<ul>"."\n";
	foreach($erreurs_inscription as $e) {
		echo '	<li>'.$e.'</li>'."\n".
	}.
"</ul>";
}*/
?>
<form id="register" class="ajax-auth" action='index.php?module=utilisateur&action=inscription' method="post">
   	<div class="text-center">
        <h3 class="h3-responsive"><i class="fa fa-user"></i>Inscription:</h3>       
        <style type="text/css">.wp-social-login-connect-with{}.wp-social-login-provider-list{}.wp-social-login-provider-list a{}.wp-social-login-provider-list img{}.wsl_connect_with_provider{}</style>
        <div class="wp-social-login-widget">
         	<div class="wp-social-login-connect-with">S'inscrire avec:
			</div>
            <div class="wp-social-login-provider-list">
               	<a rel="nofollow" href="pas de domaine" title="Connecter avec Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
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
    <input type="hidden" id="signonsecurity" name="signonsecurity" value="256874042c" /><input type="hidden" name="_wp_http_referer" value="/" />
    <div class="md-form">
      	<i class="fa fa-user prefix"></i>
       	<input type="text" id="nom" class="form-control" name="nom">
        <label for="nom">Votre nom</label>
    </div>
    <div class="md-form">
        <i class="fa fa-user prefix"></i>
        <input type="text" id="prenom" class="form-control" name="prenom">
        <label for="prenom">Votre prénom</label>
    </div>
    <div class="md-form">
    	<i class="fa fa-envelope prefix"></i>
        <input type="text" id="email" class="form-control" name="email">
        <label for="email">Votre email</label>
    </div>
    <div class="md-form">
        <i class="fa fa-lock prefix"></i>
        <input type="password" id="password1" class="form-control" name="password1">
        <label for="signonpassword">Votre mot de passe</label>
    </div>
    <div class="md-form">
       	<i class="fa fa-lock prefix"></i>
        <input type="password" id="password2" class="form-control" name="password2">
        <label for="password2">Répétez le mot de passe</label>
    </div>
    <div class="text-center">
        <button class="submit_button btn btn-primary" type="submit" value="inscription">S'inscrire</button>
        <hr>
        <p>Vous avez déjà un compte? <a href='index.php?module=utilisateur&amp;action=connexion'>Se connecter</a></p>
    </div>
</form>