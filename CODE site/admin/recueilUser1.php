<?php
// session_start();
    require 'connect.php';
    // créer la variable connection 
    $db = connect("dbVeloc");



        // A FAIRE IMPORTANT : EVITER LES DOUBLONS D'UTILISATEURS


        // RECUEIL AJOUT UTILISATEUR
        if(isset($_POST['submitAjoutUtilisateur'])){
            // TABLE ARTICLES 
            if(isset($_POST["sexe_utilisateur"])){
                $sexe_utilisateur = trim(htmlspecialchars($_POST["sexe_utilisateur"]));
                if(isset($_POST["nom_utilisateur"])){
                    $nom_utilisateur = trim(htmlspecialchars($_POST["nom_utilisateur"]));
                    if(isset($_POST["prenom_utilisateur"])){
                        $prenom_utilisateur = trim(htmlspecialchars($_POST["prenom_utilisateur"]));
                        if(isset($_POST["adresse_mail_utilisateur"])){
                            $adresse_mail_utilisateur = trim(htmlspecialchars($_POST["adresse_mail_utilisateur"]));
                            // Verification qu'aucune adresse em-mail similaire n'apparaisse déjà dans la database.
                            $reqmail = $db->prepare("SELECT * FROM utilisateurs WHERE adresse_mail_utilisateur = ?");
                            $reqmail->execute(array($adresse_mail_utilisateur));
                            $mailexist = $reqmail->rowCount();
                            if($mailexist == 0){
                                
                                if(isset($_POST["date_naissance_utilisateur"])){
                                    $date_naissance_utilisateur = trim(htmlspecialchars($_POST["date_naissance_utilisateur"]));
                                    if(isset($_POST["password_utilisateur"]) AND isset($_POST["password_utilisateur2"])){
                                        if($_POST["password_utilisateur"] = $_POST["password_utilisateur2"]){
                                            $password_utilisateur = hash('sha256',$_POST['password_utilisateur']);
                                            session_start();
                                            $_SESSION['sexe_utilisateur'] = $sexe_utilisateur;
                                            $_SESSION['nom_utilisateur'] = $nom_utilisateur;
                                            $_SESSION['prenom_utilisateur'] = $prenom_utilisateur;
                                            $_SESSION['date_naissance_utilisateur'] = $date_naissance_utilisateur;
                                            $_SESSION['adresse_mail_utilisateur'] = $adresse_mail_utilisateur;
                                            $_SESSION['password_utilisateur'] = $password_utilisateur;
                                            header('Location: formulaire_supplementaire.php');
                                        }
                                    }else{
                                        $erreurAnnoncee = "Les mots de passe ne correspondent pas.";
                                        $password_utilisateur = null;
                                    }
                                }else{
                                    $erreurAnnoncee = "La date de naissance n'est pas renseignée.";
                                    $date_naissance_utilisateur = null;
                                }
                            }else{
                                $erreurAnnoncee = "Cette adresse e-mail est déja connue.";
                                $adresse_mail_utilisateur = null;
                            }
                        }else{
                            $erreurAnnoncee = "L'adresse mail n'est pas renseignée.";
                            $adresse_mail_utilisateur = null;
                        }
                    }else{
                        $erreurAnnoncee = "Le prénom n'est pas renseigné.";
                        $prenom_utilisateur = null;
                    }
                }else{
                    $erreurAnnoncee = "Le nom n'est pas renseigné.";
                    $nom_utilisateur = null;
                }
            }else{
                $erreurAnnoncee = "Le sexe n'est pas renseigné.";
                $sexe_utilisateur = null;
            }
        }

        if(isset($erreurAnnoncee)){echo $erreurAnnoncee;}
?>    