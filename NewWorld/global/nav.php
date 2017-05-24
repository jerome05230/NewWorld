<?php
/*
<!----------------------------------------------------------------------------------
# Nom du programme                   : nom_du_fichier.html
# Version                            : 1.0
# Description                        : Page nom_de_la_page HTML5 du site nom_du_site
# Date de création                   : jj/mm/aaaa
# Date de modification               : jj/mm/aaaa
# Auteur                             : Baron-campos Jérôme 
# Commentaire                        : 
------------------------------------------------------------------------------------>
 */
?>
<!--Navbar-->
<nav class="navbar navbar-toggleable-md navbar-dark bg-primary">
	<div class="container">
  	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
		</button>
    <a class="navbar-brand active" href="index.php"><span class="sr-only">(current)</span><strong>NW</strong></a>
    <div class="collapse navbar-collapse" id="navbarNav1">
     	<ul class="navbar-nav mr-auto">
        <li class="nav-item "><a class="nav-link" href='index.php?module=vitrine&amp;action=leLaboratoire'>>Acheter</a></li>
        <li class="nav-item "><a class="nav-link" href='index.php?module=vitrine&amp;action=lesVisites'>>Produire</a></li>
        <li class="nav-item "><a class="nav-link" href='index.php?module=vitrine&amp;action=nousContacter'>>Distribuer</a></li>
<?php 
  if (! utilisateur_est_connecte()) {
    $type = $_SESSION["type"] ;
    var_dump($_SESSION);
    switch ($type) {
      
      //cas client
      case "C" :  
?>
        <li class="nav-item "><a class="nav-link">Info</a></li>
        <li class="nav-item "><a class="nav-link">Panier</a></li>
        <li class="nav-item "><a class="nav-link" href='index.php?module=utilisateur&amp;action=deconnexion'><i class="fa fa-sign-in" ></i>Connexion</a></li>
<?php          
        break;
      //cas point relai
      case "R" :
?>
        <li class="nav-item "><a class="nav-link">Info</a></li>
        <li class="nav-item "><a class="nav-link" href='index.php?module=utilisateur&amp;action=deconnexion'><i class="fa fa-sign-in" ></i>Connexion</a></li>
<?php    
            break;
      //cas producteur
      case "P" :
?>
        <li class="nav-item "><a class="nav-link">Info</a></li>
        <li class="nav-item "><a class="nav-link">Produits</a></li>
        <li class="nav-item "><a class="nav-link" href='index.php?module=utilisateur&amp;action=desconnexion'><i class="fa fa-sign-in" ></i>Connexion</a></li>
<?php 
            break;
      default : 
      break; 
    }     
  }
  else { 
    // index.php?module=visiteurs&amp;action=afficher_profil&amp;id=$id_utilisateur
    // <a href='index.php?module=visiteurs&amp;action=connexion'>Connexion</a>*/
?>
 				<!--<li class="nav-item"><a href="#modal_login" id="show_login" class="nav-link" data-toggle="modal" data-target="#modal_login"><i class="fa fa-sign-in" ></i>Connexion</i>-->
        <li class="nav-item "><a class="nav-link" href='index.php?module=utilisateur&amp;action=connexion'><i class="fa fa-sign-in" ></i>Connexion</a></li>
        <li class="nav-item "><a class="nav-link" href='index.php?module=utilisateur&amp;action=inscription'>Inscription</a></li>
<?php } ?>
    	</ul>
      <form class="form-inline waves-effect waves-light">
       	<input class="form-control" type="text" placeholder="Search">
     	</form>
  	</div>
	</div>

</nav>

<!-- Modals -->
<!-- login Modal -->
<div class="modal fade modal-ext" id="modal_login" tabindex="-1" role="dialog">
 	<div class="modal-dialog" role="document">
   	<div class="modal-content">
     	<form id="login" class="ajax-auth" action="" method="post">
       	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
         	<span aria-hidden="true">&times;</span>
         </button>
         <div class="text-center">
         	<h3 class="h3-responsive"><i class="fa fa-user"></i> S'authentifier avec: </h3>
         	<style type="text/css">.wp-social-login-connect-with{}.wp-social-login-provider-list{}.wp-social-login-provider-list a{}.wp-social-login-provider-list img{}.wsl_connect_with_provider{}</style>
           <div class="wp-social-login-widget">
           	<div class="wp-social-login-connect-with">Se connecter avec:</div>
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
          <h3 class="h3-responsive"> Or:</h3>
          <p class="status"></p>
          <input type="hidden" id="security" name="security" value="aaeeddaed125" /><input type="hidden" name="_wp_http_referer" value="/" />
          <div class="md-form">
          	<i class="fa fa-user prefix"></i>
            <input type="text" id="username" class="form-control" name="username" placeholder="Identifiant">                
          </div>
          <div class="md-form">
	         	<i class="fa fa-lock prefix"></i>
            <input type="password" id="password" class="form-control" name="password" placeholder="Mot de passe">
          </div>
          <div class="text-center">
          	<button class="submit_button btn btn-primary" type="submit" value="LOGIN">Se Connecter</button>
          </div>
          <hr>
          <div class="text-center">
          	<p>Pas encore inscrit? <a href="#modal_register" id="pop_signup" data-toggle="modal" data-target="#modal_register">S'inscrire</a></p>   <!-- remplir -->
            <p> Mot de passe <a href="#modal_mdpOubliee" id="pop_signup2" data-toggle="modal" data-target="#modal_mdpOubliee"> oublie?</a></p>  <!-- remplir -->
          </div>
        </div>
      </form>
	   	<!-- fin de la form login -->
    </div>
  </div>
</div>
  <!-- fin de login modal-->
  <!-- ouverture register modal -->
	<div class="modal fade modal-ext" id="modal_register" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      	<form id="register" class="ajax-auth" action="inscriptionNW.php" method="post">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          	<span aria-hidden="true">&times;</span>
        	</button>
          <div class="text-center">
	          <h3 class="h3-responsive"><i class="fa fa-user"></i> s'authentifier avec:</h3>       
            <style type="text/css">.wp-social-login-connect-with{}.wp-social-login-provider-list{}.wp-social-login-provider-list a{}.wp-social-login-provider-list img{}.wsl_connect_with_provider{}</style>
            <div class="wp-social-login-widget">
            	<div class="wp-social-login-connect-with">Se connecter avec:
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
            <h3 class="h3-responsive"> Ou:</h3>
          </div>
          <!-- fin du textcenter-->
          <p class="status"></p>
          <input type="hidden" id="signonsecurity" name="signonsecurity" value="256874042c" /><input type="hidden" name="_wp_http_referer" value="/" />
          <div class="md-form">
          	<i class="fa fa-user prefix"></i>
            <input type="text" id="signonname" class="form-control" name="nom">
            <label for="signonname">Votre nom</label>
          </div>
          <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="signonpname" class="form-control" name="prenom">
            <label for="signonpname">Votre prénom</label>
          </div>
          <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="email" class="form-control" name="email">
            <label for="email">Votre email</label>
          </div>
          <div class="md-form">
             <i class="fa fa-lock prefix"></i>
             <input type="password" id="signonpassword" class="form-control" name="passwd1">
             <label for="signonpassword">Votre mot de passe</label>
           </div>
           <div class="md-form">
             <i class="fa fa-lock prefix"></i>
             <input type="password" id="password2" class="form-control" name="passwd2">
             <label for="password2">Repetez le mot de passe</label>
           </div>
           <div class="text-center">
             <button class="submit_button btn btn-primary" type="submit" value="SIGNUP">S'inscrire</button>
             <hr>
             <p>Vous avez déjà un compte? <a href="#modal_login" id="pop_login3" data-toggle="modal" data-target="#modal_login">Se connecter</a></p>
           </div>
        </form>
    	</div>
 		</div>
	</div>
	<!-- fin du modal_register -->




<!-- ouverture register modal -->
	<div class="modal fade modal-ext" id="modal_mdpOubliee" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      	<form id="register" class="ajax-auth" action="inscriptionNW.php" method="post">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          	<span aria-hidden="true">&times;</span>
        	</button>
          <div class="text-center">
	          <h3 class="h3-responsive"><i class="fa fa-user"></i> s'authentifier avec:</h3>       
            <style type="text/css">.wp-social-login-connect-with{}.wp-social-login-provider-list{}.wp-social-login-provider-list a{}.wp-social-login-provider-list img{}.wsl_connect_with_provider{}</style>
            <div class="wp-social-login-widget">
            	<div class="wp-social-login-connect-with">Se connecter avec:
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
            <h3 class="h3-responsive"> Ou:</h3>
          </div>
          <!-- fin du textcenter-->
          <p class="status"></p>
          <input type="hidden" id="signonsecurity" name="signonsecurity" value="256874042c" /><input type="hidden" name="_wp_http_referer" value="/" />
          <div class="md-form">
          	<i class="fa fa-user prefix"></i>
            <input type="text" id="signonname" class="form-control" name="nom">
            <label for="signonname">Votre nom</label>
          </div>
          <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="signonpname" class="form-control" name="prenom">
            <label for="signonpname">Votre prénom</label>
          </div>
          <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="email" class="form-control" name="email">
            <label for="email">Votre email</label>
          </div>
          <div class="md-form">
             <i class="fa fa-lock prefix"></i>
             <input type="password" id="signonpassword" class="form-control" name="passwd1">
             <label for="signonpassword">Votre mot de passe</label>
           </div>
           <div class="md-form">
             <i class="fa fa-lock prefix"></i>
             <input type="password" id="password2" class="form-control" name="passwd2">
             <label for="password2">Repetez le mot de passe</label>
           </div>
           <div class="text-center">
             <button class="submit_button btn btn-primary" type="submit" value="SIGNUP">S'inscrire</button>
             <hr>
             <p>Vous avez déjà un compte? <a href="#" id="pop_login">Se connecter</a></p>
           </div>
        </form>
    	</div>
 		</div>
	</div>
	<!-- fin du modal_register -->


	
<!-- chargement de jquery -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
<script>
//rechargement de la page principale lors de la fermeture de la fenêtre de login
  $('#modal_login').on('hidden.bs.modal', function () {
    location.reload();
  });
</script>

