<?php
    // require 'assets/objets/Lien_reservation.php';
function writeHome(){

?>
<div class="" id="home">               
                            <h1>
                                <a class="navbar-brand d-flex justify-content-center text-dark text-center mx-auto text-wrap" href="#">
                                    <i class="fas fa-biking fa-4x mr-1 d-none d-sm-block"></i>
                                    <h2 class="display-4"><u><span class="righteous">Véloc.</span></u> la location de vélo en 2"2'</h2>
                                </a>
                            </h1>
        <!-- CAROUSEL-->
                        <div class="bd-example d-flex justify-content-center">
                            <div id="carouselExampleCaptions" class="carousel slide shadow_perso" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/img/img-velib-bleu.jpeg" class="d-block mx-auto img-fluid shadow_perso" alt="...">
                                        <div class="carousel-caption d-none d-sm-block">
                                            <h5 class="ovf display-4"><u class="h5_carousel h5_carousel_bleu righteous">Le vélo électrique</u></h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/img-velib-vert.jpg" class="d-block mx-auto img-fluid shadow_perso" alt="...">
                                        <div class="carousel-caption d-none d-sm-block">
                                            <h5 class="ovf display-4"><u class="h5_carousel righteous">Le vélo mécanique</u></h5>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
        <!-- //CAROUSEL-->
                        <br>
                        <h2 class="ovf text-center"><a class="ebauche" href="#caracteristiques">Découvrez ici nos différents types de vélo</a></h2>
                        <hr class="hr_perso ">
                        <h3 class="ovf text-center righteous my-4">Libre service 24h/24 7j/7 !</h3>
                        
        <!-- CARD 1 -->
                        <div class="row justify-content-center mt-4 pt-4">
                            <div class="col-sm-8 col-md-3 col-10 my-1 rounded">
                                <div class="card shadow_perso card_gauche card_1 h-100">
                                    <div class="card-body text-center">
                                        <h5 class="ovf card-title"><b>Simple !</b></h5>
                                        <p class="card-text">24h/24, 7j/7, vous pouvez voyagez à vélo d'une station à une autre parmi les x stations implantées dans nous 4 villes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-3 col-10 my-1 rounded">
                                <div class="card shadow_perso card_1 h-100">
                                    <div class="card-body text-center">
                                        <h5 class="ovf card-title"><b>Pas cher</b></h5>
                                        <p class="card-text">Des coûts d'accès au service à partir de 1,10€ par heure, 5,30€ par jour et 32,50€ (hors coût d'utilistation).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-3 col-10 my-1 rounded">
                                <div class="card shadow_perso card_droite card_1 h-100">
                                    <div class="card-body text-center">
                                        <h5 class="ovf card-title"><b>Rapide</b></h5>
                                        <p class="card-text">2 minutes suffisent pour s'abonner depuis une borne (abonnement 24h ou 7jours) et retirer un vélo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 mt-4">
                                <div class="row d-flex justify-content-around pt-4">
                                    <div class="col d-flex justify-content-center  my-1 text-center">
                                        <div class="row justify-content-center">
                                            <a href="#" class="ebauche">
                                                <img src="assets/img/ebauche1.png" alt="" class="h-75 w-75 img-fluid ebauche rounded-circle shadow">
                                                <h6>Louer son véloc</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-center text-center">
                                        <div class="row justify-content-center">
                                            <a href="#" class="ebauche">
                                                <img src="assets/img/ebauche2.png" alt="" class="h-75 w-75 img-fluid ebauche rounded-circle shadow">
                                                <h6>Rouler à véloc</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-center text-center">
                                        <div class="row justify-content-center">
                                            <a href="#" class="ebauche">
                                                <img src="assets/img/ebauche3.png" alt="" class="h-75 w-75 img-fluid ebauche rounded-circle shadow">
                                                <h6>Rendre son véloc</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        <!-- //CARD 1 -->
                        <hr class="hr_perso">
                        <h3 class="ovf text-center righteous my-4"><u>Offres & tarifs</u></h3>
                        
        <!-- CARD 2 -->
                        <div class="row justify-content-center">
                            <div class="col-sm-8 col-md-3 col-10 my-1 rounded">
                                <div class="card shadow_perso card_gauche">
                                    <div class="card-body text-center">
                                        <a href="#">
                                            <h5 class="card-title title_offres">Libre service<br>1 Heure</h5>
                                            <p class="card-text">à partir de 1€10</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-3 col-10 my-1 rounded">
                                <div class="card shadow_perso">
                                    <div class="card-body text-center">
                                        <a href="#">
                                            <h5 class="card-title title_offres">Libre service<br>1 Jour</h5>
                                            <p class="card-text">à partir de 5€30</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-3 col-10 my-1 rounded">
                                <div class="card shadow_perso card_droite">
                                    <div class="card-body text-center">
                                        <a href="">
                                            <h5 class="card-title title_offres">Libre service<br>1 Mois</h5>
                                            <p class="card-text">à partir de 32€50</p>
                                        </a>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="d-flex justify-content-center text-dark pt-4 mt-4">
                            <a class="d-flex justify-content-center text-dark" <?php if(!isset($_SESSION['noCheat'])){echo 'href="" data-toggle="modal" data-target="#modalSignIn"';}else{echo 'href="admin/page_reservation.php"';} ?>>
                                <u class="ovf text-center righteous liens_je_reserve">Je réserve tout de suite</u>
                            </a>
                        </h3>
        <!-- //CARD 2 -->
                    </div>

<?php
};
?>