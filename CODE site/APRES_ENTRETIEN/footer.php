<?php
function writeFooter(){
?>
                <footer id="footer" class="roboto text-light bg-dark">
                        <div class="row d-flex justify-content-center mb-2">
                            <h2 class="navbar-brand text-light">
                                <a class="navbar-brand d-flex justify-content-center text-center text-wrap text-light-perso mx-auto" href="#">
                                    <i class="fas fa-biking fa-4x d-none d-sm-block pr-1"></i>
                                    <h2 class="display-4 text-center"><span class="righteous">Contact et info</span></h2>
                                </a>
                            </h2>
                        </div>
                    
                    <div class="container">
    <!-- CONTACT DESIGN MAC -->
                        <div class="screen my-4">
                            <div class="screen-header">
                                <div class="screen-header-left">
                                    <div class="screen-header-button maximize"></div>
                                    <div class="screen-header-button minimize"></div>
                                    <div class="screen-header-button close"></div>
                                </div>
                                <div class="screen-header-right">
                                    <div class="screen-header-ellipsis"></div>
                                    <div class="screen-header-ellipsis"></div>
                                    <div class="screen-header-ellipsis"></div>
                                </div>
                            </div>
                            <div class="screen-body">
                                <div class="screen-body-item left">
                                    <div class="app-title">
                                        <span>CONTACTEZ</span>
                                        <span>NOUS</span>
                                    </div>
                                    <div class="app-contact">
                                        SIEGE SOCIAL : 1 AVENUE DE PARIS, 62300 LENS
                                        <br>TELEPHONE : +33 6 xx xx xx xx
                                    </div>
                                </div>
                                <div class="screen-body-item">
                                    <form method="POST" action="admin/recueilMessages.php" class="app-form">
                                        <div class="app-form-group">
                                            
                                            <input class="app-form-control" type="text" name="nom_contact" <?php if(isset($_SESSION['nom_utilisateur'])){echo  "value='".$_SESSION['nom_utilisateur']."'";}else{echo'placeholder="VOTRE NOM"';} ?>">
                                        </div>
                                        <div class="app-form-group">
                                            <input class="app-form-control" type="email" name="email_contact" <?php if(isset($_SESSION['adresse_mail_utilisateur'])){echo "value='".$_SESSION['adresse_mail_utilisateur']."'";}else{echo 'placeholder="ADRESSE MAIL"';} ?>">
                                        </div>
                                        
                                        <div class="app-form-group message">
                                            <input class="app-form-control" type="text" name="message_contact" placeholder="VOTRE MESSAGE">
                                        </div>
                                        <div class="app-form-group buttons">
                                            <button class="app-form-button" name="contactez_nous" type="submit">ENVOYER</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
    <!-- // CONTACT DESIGN MAC -->
    <!-- RESAUX SOCIAUX -->
                        <div id="social-platforms" class="row justify-content-center pt-4">
                            <a class="btn btn-icon btn-facebook" href="#"><i class="fab fa-facebook"></i><span>Facebook</span></a>
                            <a class="btn btn-icon btn-twitter" href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                            <a class="btn btn-icon btn-googleplus" href="#"><i class="fab fa-google-plus"></i><span>Google+</span></a>
                            <a class="btn btn-icon btn-pinterest" href="#"><i class="fab fa-pinterest"></i><span>Pinterest</span></a>
                            <a class="btn btn-icon btn-linkedin" href="#"><i class="fab fa-linkedin"></i><span>LinkedIn</span></a>
                        </div>
                    </div>
                    <br><br><br><br><br><br><br>
                    <div class="text-center">Made by Rassou.</div>
    <!-- // RESAUX SOCIAUX -->
                </footer>




<?php
};
?>