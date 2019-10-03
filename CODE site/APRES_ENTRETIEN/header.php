<?php
function writeHeader($direction_lien){
?>
        <body>
            <div id="contenu_principal">
                <header class="border-bottom bg-light fixed-top roboto">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand d-flex" href="#">
                            <i class="fas fa-biking fa-3x"></i>
                            <h1><span class="righteous">Véloc.</span></h1>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link righteous" href="<?php echo $direction_lien; ?>#contenu_principal">Page d'accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link righteous" href="<?php echo $direction_lien; ?>#ville">Trouvez sa borne</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link righteous" href="<?php echo $direction_lien; ?>#caracteristiques">Nos vélos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link righteous" href="<?php echo $direction_lien; ?>#footer">Contact et Info</a>
                                </li>
                            </ul>
                        </div>


                        <div class="col-12 col-lg-3 d-flex justify-content-end">
                            <?php if(isset($_SESSION['nom_utilisateur']) AND isset($_SESSION['noCheat'])){
                                echo "<p class='pt-3 pr-4'>Bonjour <b>".$_SESSION['nom_utilisateur']."</b></p>";
                                echo "<a class='pt-3' href='admin/logout.php'><u>Déconnexion ?</u></a>";
                                
                                }else{
                                    echo "<a href='' class='' data-toggle='modal' data-target='#modalSignIn'>S'identifier </a>
                                    <span class='px-2'>/</span>
                                    <a href='' class='' data-toggle='modal' data-target='#modalSignUp'>  Créer un compte</a>";
                                }
                            ?>
                        </div>
                        <!-- <a href="" data-toggle="modal" data-target="#modalReserver">PayPal</a> -->
                    </nav>
                </header>
<?php
};

