<?php
function writeModalSignin(){
?>
<div class="modal fade" id="modalSignIn" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog " role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="card bg-light">
                                    <article class="card-body mx-auto" style="max-width: 400px;">
                                        <h4 class="card-title mt-3 text-center righteous"><i class="fas fa-biking fa-2x mr-1" aria-hidden="true"></i>Se connecter</h4>
                                        <br>
                                        <p>
                                            <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter mr-2"></i>Se connecter via Twitter</a>
                                            <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f mr-2"></i>Se connecter via facebook</a>
                                        </p>
                                        <p class="divider-text">
                                            <span class="bg-light">OU</span>
                                        </p>
                                        <form method="POST" action="admin/recueilConnection.php">
                                            <!-- E-MAIL -->
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                                </div>
                                                <input name="adresse_mail_utilisateur" class="form-control" placeholder="Adresse e-mail" type="email">
                                            </div> 
                                            <!-- PASSWORD -->
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                </div>
                                                <input name="password_utilisateur" class="form-control" placeholder="Mot de passe" type="password">
                                            </div> 
                                            <!-- SUBMIT -->
                                            <div class="form-group">
                                                <button name="form_connexion" type="submit" class="btn btn-primary btn-block">Se connecter</button>
                                            </div>       
                                            <p class="text-center">Pas encore de compte?<a href="" class="pl-1" data-toggle="modal" data-target="#modalSignUp" data-dismiss="modal">Sign up</a></p>                                                                 
                                        </form>
                                    </article>
                                </div> 
                            
                            </div>
                        </div>
                    </div>
                </div>

<?php
};
?>