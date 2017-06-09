<footer class="page-footer center-on-small-only ">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-3 offset-md-1">
                <h5 class="title">NewWorld</h5>
                <p>NewWorld vous propose une large diversité d'options.</p>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-md-2 offset-md-1">
                <h5 class="title">Participer</h5>
                <ul>
                    <li><a href="#!">-Proposer des produits</a></li>
                    <li><a href="#!">-Transformer</a></li>
                    <li><a href="#!">-Devenir client</a></li>
                    <li><a href="#!">-Distribuer</a></li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title">Comprendre</h5>
                <ul>
                    <li><a href="#!">-Savoir faire local</a></li>
                    <li><a href="#!">-Réduire les stranports</a></li>
                    <li><a href="#!">-Produits frais</a></li>
                    <li><a href="#!">-Qalité</a></li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title">Communiquer</h5>
                <ul>
                    <li><a href="#!">-Les secrets des producteurs</a></li>
                    <li><a href="#!">-Le savoir des artisants</a></li>
                    <li><a href="#!">-Les recettes de grand-mère</a></li>
                    <li><a href="#!">-La conservation des aliments</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr>
<?php  if (! utilisateur_est_connecte()) { ?>
    <!--Call to action-->
    <div class="call-to-action">
        <ul>
            <li>
                <h5>S'incrire gratuitement !</h5></li>
            <li><a href='index.php?module=utilisateur&amp;action=inscription' class="btn btn-danger">Inscription!</a></li>
        </ul>
    </div>
    <!--/.Call to action-->
<?php  }  ?>
    <hr>

    <!--Social buttons-->
    <div class="social-section">
        <ul>
            <li><a class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
            <li><a class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
            <li><a class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
            <li><a class="btn-floating btn-small btn-li"><i class="fa fa-linkedin"> </i></a></li>
            <li><a class="btn-floating btn-small btn-git"><i class="fa fa-github"> </i></a></li>
            <li><a class="btn-floating btn-small btn-pin"><i class="fa fa-pinterest"> </i></a></li>
            <li><a class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://http://www.jbaron-portfolio.ovh/">Baron-Campos Jérôme</a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->


