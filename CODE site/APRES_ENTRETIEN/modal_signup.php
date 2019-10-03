<?php
function writeModalSignup(){
?>
<div class="modal fade" id="modalSignUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="card bg-light">
                                    <article class="card-body mx-auto" style="max-width: 400px;">
                                        <h4 class="card-title mt-3 text-center righteous"><i class="fas fa-biking fa-2x mr-1" aria-hidden="true"></i>Créer un compte</h4>
                                        <br>
                                        <p>
                                            <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter mr-2"></i>Se connecter via Twitter</a>
                                            <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f mr-2"></i>Se connecter via facebook</a>
                                        </p>
                                        <p class="divider-text">
                                            <span class="bg-light">OU</span>
                                        </p>
                                        <form method="POST" action="admin/recueilUser1.php" onsubmit="return verifier(this);">
                                            <!-- SEXE -->
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fas fa-male" aria-hidden="true"></i> </span>
                                                </div>
                                                <select required id="sexe_utilisateur" name="sexe_utilisateur" class="form-control">
                                                    <option selected disabled>Sexe</option>
                                                    <option value="m">Homme</option>
                                                    <option value="f">Femme</option>    
                                                </select>
                                            </div>
                                            <!-- NOM -->
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-id-card-o" aria-hidden="true"></i> </span>
                                                </div>
                                                <input required name="nom_utilisateur" class="form-control" placeholder="Nom" type="text">
                                            </div>
                                            <!-- PRENOM -->
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-id-card" aria-hidden="true"></i></span>
                                                </div>
                                                <input required name="prenom_utilisateur" class="form-control" placeholder="Prénom" type="text">
                                            </div>
                                            <!-- E-MAIL -->
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                                </div>
                                                <input required name="adresse_mail_utilisateur" class="form-control" placeholder="Adresse mail" type="email">
                                            </div> 
                                            <!-- DATE DE NAISSANCE -->
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fas fa-birthday-cake"></i> </span>
                                                </div>
                                                <input required name="date_naissance_utilisateur" class="form-control" placeholder="Date de naissance" value="Date de naissance" type="date">
                                            </div>
                                            <!-- PASSWORD -->
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                </div>
                                                <input required name="password_utilisateur" class="form-control" placeholder="Mot de passe" type="password">
                                            </div> 
                                            <!-- REPETER PASSWORD -->
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                </div>
                                                <input required name="password_utilisateur2" class="form-control" placeholder="Répeter votre mot de passe" type="password">
                                            </div>
                                            <!-- SUBMIT -->
                                            <div class="form-group">
                                                <button name="submitAjoutUtilisateur" type="submit" class="btn btn-primary btn-block">Créer son compte</button>
                                            </div>     
                                            <p class="text-center">Déjà membre? <a href="" data-toggle="modal" data-target="#modalSignIn" data-dismiss="modal">Log In</a> </p>                                                                 
                                        </form>
                                    </article>
                                </div> <!-- card.// -->
                            
                            </div>
                        </div>
                    </div>
                </div>

<?php
};
?>