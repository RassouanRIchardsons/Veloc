<?php
function writeVilles(){
?>
<div class="" id="ville">
                        <h2 class="display-4 navbar-brand d-flex justify-content-center">
                            <a class=" navbar-brand d-flex justify-content-center text-dark mx-auto text-wrap" href="#">
                                <i class="fas fa-biking fa-4x d-none d-sm-block pr-1"></i>
                                <h2 class="display-4 text-center"> Louer un vélo à <span class="righteous"><u id="choiseTown">Lille</u></span></h2>
                            </a>
                        </h2>
                        <div class="d-flex justify-content-center">
                            <div class="btn-group ">
                                <button type="button" class="btn btn-lg btn-secondary">Changer de ville</button>
                                <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" type="button" onclick="getVilleParis()" id="paris" name="indexParis" >Paris</button>
                                    <button class="dropdown-item" type="button" onclick="getVilleBordeaux()" id="bordeaux" name="indexBordeaux" >Bordeaux</button>
                                    <button class="dropdown-item" type="button" onclick="getVilleLyon()" id="lyon" name="indexLyon" >Lyon</button>
                                    <button class="dropdown-item" type="button" onclick="getVilleLille()" id="lille" name="indexLille" >Lille</button>
                                </div>
                            </div>
                        </div>        
                        <div class="google_map container jumbotron jumbotron-fluid border py-4 mt-4 shadow_perso">
                            <h2 class=" ovf text-center mb-4 righteous">Où trouver une borne ?</h2>
                            <div class="row d-flex justify-content-around mb-2">
                                <div class="station col-sm-6 col-md-3 text-center">
                                    <h5><u><a id="borne1" class="text-dark liens_bornes" href="https://www.google.com/maps/dir//50.6280053,3.0506935/@50.6280126,2.9806815,12z" target="_blank">Borne rue Gambetta </a><i class="fas fa-map-marker-alt"></i></u></h5>
                                    <small id="textborne1">280 rue Léon Gambetta</small>
                                </div>
                                <div class="station col-sm-6 col-md-3 text-center">
                                    <h5><u><a id="borne2" class="text-dark liens_bornes" href="https://www.google.com/maps/dir//50.6365045,3.0699617/@50.6360552,3.0655452,16z" target="_blank">Borne Lille Flandres </a><i class="fas fa-map-marker-alt"></i></u></h5>
                                    <small id="textborne2">Gare lille Flandres, 1 rue de Tournai</small>
                                </div>
                                <div class="station col-sm-6 col-md-3 text-center">
                                    <h5><u><a id="borne3" class="text-dark liens_bornes" href="https://www.google.com/maps/dir//50.6266536,3.0689205/@50.626575,2.9984179,12z" target="_blank">Borne parc J.B. Lebas </a><i class="fas fa-map-marker-alt"></i></u></h5>
                                    <small id="textborne3">Boulevard Jean-Baptiste Lebas</small>
                                </div>
                                <div class="station col-sm-6 col-md-3 text-center">
                                    <h5><u><a id="borne4" class="text-dark liens_bornes" href="https://www.google.com/maps/dir//50.6335986,3.0547622/@50.633589,3.0503606,16z" target="_blank">Borne rue Nationale </a><i class="fas fa-map-marker-alt"></i></u></h5>
                                    <small id="textborne4">129 rue Nationale</small>
                                </div>
                            </div>
    <!-- GOOGLE MAP -->
                            <div class="mt-4 row d-flex justify-content-center">
                                <iframe id="iframe" src="https://www.google.com/maps/d/embed?mid=1MAvgFoHg9MbNU1Rn23Us8sj2TfYPLmDx" width=85% height="480"></iframe>
                            </div>
    <!-- // GOOGLE MAP -->
                            <br>
                            <p class="text-center">A l'heure actuelle à <span class="righteous"><u id="choiseTown2">Lille</u></span>, il reste <b class="nbVelo">143</b> vélos</p>
                        </div>
                                

                        
                        <h3 class="d-flex justify-content-center text-dark pt-4 mt-4">
                            <a class="d-flex justify-content-center text-dark" <?php if(!isset($_SESSION['noCheat'])){echo 'href="" data-toggle="modal" data-target="#modalSignIn"';}else{echo 'href="admin/page_reservation.php"';} ?>>
                                <u class="ovf text-center righteous liens_je_reserve">Je réserve tout de suite</u>
                            </a>
                        </h3>
                    </div>

<?php
};
?>