<?php
function writeCaracteristiques(){
?>
<div class="" id="caracteristiques">
                        <div class="row d-flex justify-content-center mb-2">
                            <h2 class="navbar-brand text-dark">
                                <a class="navbar-brand d-flex justify-content-center text-center text-wrap text-dark mx-auto" href="#">
                                    <i class="fas fa-biking fa-4x d-none d-sm-block pr-1"></i>
                                    <h2 class="display-4 text-center">Spécificités de nos <span class="righteous">vélos</span></h2>
                                </a>
                            </h2>
                        </div>
                            
                        <div class="mt-4 container-fluid">
                            <div class="row d-flex justify-content-center align-items-center py-4">
                                <div class="col-sm-10 d-flex justify-content-center">
                                    <img id="velo_caracteristiques" class="d-none d-sm-block img-fluid " src="assets/img/caracteristiquesVelos.png" alt="image vélo">
                                </div>
                                
                            </div>
    <!-- TABLEAU CARACTERISTIQUES -->
                            <div class="row d-flex justify-content-center pt-4">
                                <table class="col-9 table table-striped border shadow_perso">
                                    <thead>
                                        <tr>
                                            <th class="righteous thead_tableau" scope="col">Type de Véloc</th>
                                            <th class="text-center righteous thead_tableau" scope="col">Mécanique</th>
                                            <th class="text-center righteous thead_tableau" scope="col">Électrique</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="righteous th_tableau">Matériaux</th>
                                            <td class="text-center">Aluminium</td>
                                            <td class="text-center">Aluminium</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="righteous th_tableau">Nombre de vitesse</th>
                                            <td class="text-center">Manette Shimuno 7 vitesses</td>
                                            <td class="text-center">Manette Shimuno 8 vitesses</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="righteous th_tableau">Poids</th>
                                            <td class="text-center">11kg</td>
                                            <td class="text-center">25kg</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="righteous th_tableau">Taille</th>
                                            <td class="text-center">28 pouces</td>
                                            <td class="text-center">28 pouces</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="righteous th_tableau">Batterie</th>
                                            <td class="text-center">X</td>
                                            <td class="text-center">Lithium-ION 36V8AHFST</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="righteous th_tableau">Autonomie</th>
                                            <td class="text-center">X</td>
                                            <td class="text-center">40km selon l'utilisation</td>
                                        </tr>
                                    </tbody>
                                </table>
    <!-- // TABLEAU CARACTERISTIQUES -->
                            </div>
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