<?php
session_start();
require 'connect.php';
require '../APRES_ENTRETIEN/head.php';
require '../APRES_ENTRETIEN/header_simple.php';
// créer la variable connection 
$db = connect("dbVeloc");

 // RECUEIL CONNEXION 


        $adresse_mail_utilisateur = isset($_POST['adresse_mail_utilisateur']) ? htmlspecialchars($_POST['adresse_mail_utilisateur']):null;
        $password_utilisateur = isset($_POST['password_utilisateur']) ? hash('sha256',$_POST['password_utilisateur']):null;
        if(isset($_POST['form_connexion'])){
            if(isset($adresse_mail_utilisateur) AND isset($password_utilisateur)){
                if(filter_var($adresse_mail_utilisateur, FILTER_VALIDATE_EMAIL)){

                    $req=$db->prepare("SELECT * FROM utilisateurs WHERE adresse_mail_utilisateur = :adresse_mail_utilisateur AND password_utilisateur = :password_utilisateur /*AND type_utilisateurs.Id_type_utilisateurs = signit.Id_type_user*/");

                    $req->bindParam(":adresse_mail_utilisateur", $adresse_mail_utilisateur,PDO::PARAM_STR);
                    $req->bindParam(":password_utilisateur", $password_utilisateur,PDO::PARAM_STR);
                    $req->execute();
                    $infoUser=$req->fetch();
                    try{
                        if(!$infoUser){
                            //PB INFO USER
                            // var_dump($_SESSION['nom_utilisateur']);
                            // var_dump($_SESSION['password_utilisateur']);
                            $reponse = 'Nous ne vous trouvons pas, réessayez';
                        }else{
                            // SESSION ACTIVEE
                            $_SESSION['nom_utilisateur'] = $infoUser['nom_utilisateur'];
                            $_SESSION['sexe_utilisateur'] = $infoUser['sexe_utilisateur'];
                            $_SESSION['adresse_mail_utilisateur'] = $infoUser['adresse_mail_utilisateur'];
                            $_SESSION['noCheat'] = "ok";
                            if($_SESSION['sexe_utilisateur'] == "m"){
                                $reponse = 'Vous êtes bien connecté :)';
                            }else{
                                $reponse = 'Vous êtes bien connectée :)';
                            }
                        }
                    }catch (Exception $e){
                        echo $e->getMessage();
                    }				
                }else{
                    $erreur = "Votre adresse mail n'est pas valide";
                }
            }else{
                $erreur = "Tous les champs ne sont pas remplis !!!";
            }
        }
writeHead('../',"Page de connexion");
?>



        <body style="overflow-y: hidden;">
            <div id="contenu_principal" style="min-height: 600px; overflow-y: hidden;">

<!-- HEADER -->
<?php
writeHeaderSimple();
?>
<!-- // HEADER -->

<!-- SECTION -->
                <section class="roboto" style="top: 180px; position: relative;">
<!-- HOME -->                    
                    <div class="" id="home">
                    <div class="modal-content">
                            
                                <div class="card bg-light">
                                    <article class="card-body d-flex justify-content-center flex-column mx-auto" style="">                                      
                                        <!-- ADRESSE -->
                                        <h2 class="card-title mt-3 text-center righteous"><i class="fas fa-biking fa-2x mr-1" aria-hidden="true"></i><?php echo $reponse ?></h2>
                                        <a class="text-center" href="../indexx.php">Retour sur la page d'accueil</a>
                                            
                                    </article>
                                </div> 
                            
                            
                        </div>
                    </div>
                </section>
            </div>


<!-- /////////////// -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>