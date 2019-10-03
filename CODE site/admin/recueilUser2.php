<?php
session_start();
    require 'connect.php';
    // créer la variable connection 
    $db = connect("dbVeloc");






       // RECUEIL FORMULAIRE SUPPLEMENTAIRE UTILISATEURS 
    if(isset($_POST['submitFormulaireSupplementaire'])){
        if(isset($_POST["villes_habitations"])){
            $villes_habitations = trim(htmlspecialchars($_POST["villes_habitations"]));
            if(isset($_POST["numero_habitations"])){
                $numero_habitations = strval(trim(htmlspecialchars($_POST["numero_habitations"])));
                if(isset($_POST["extension_habitations"])){
                    $extension_habitations = trim(htmlspecialchars($_POST["extension_habitations"]));
                    if(isset($_POST["rue_habitations"])){
                        $rue_habitations = trim(htmlspecialchars($_POST["rue_habitations"]));
                        if(isset($_POST["code_postal_habitations"])){
                            $code_postal_habitations = strval(trim(htmlspecialchars($_POST["code_postal_habitations"])));
                            if(isset($_POST["type_utilisateur"])){
                                $type_utilisateur = trim(htmlspecialchars($_POST["type_utilisateur"]));
                                if(isset($_POST["CB_number"])){
                                    $CB_number = intval(trim(htmlspecialchars($_POST["CB_number"])));
                                    if(isset($_POST["CB_name"])){
                                        $CB_name = trim(htmlspecialchars($_POST["CB_name"]));
                                        if(isset($_POST["CB_validate"])){
                                            $CB_validate = trim(htmlspecialchars($_POST["CB_validate"]));
                                            $_SESSION['noCheat'] = "ok";
                                        }else{
                                            $CB_validate = null;
                                        }
                                    }else{
                                        $CB_name = null;
                                    }
                                }else{
                                    $CB_number = null;
                                }
                            }else{
                                $type_utilisateur = null;
                            }
                        }else{
                            $code_postal_habitations = null;
                        }
                    }else{
                        $rue_habitations = null;
                    }
                }else{
                    $extension_habitations = null;
                }
            }else{
                $numero_habitations = null;
            }
        }else{
            $villes_habitations = null;
        }
        

        try{

            $sexe_utilisateur = $_SESSION['sexe_utilisateur'];
            $nom_utilisateur = $_SESSION['nom_utilisateur'];
            $prenom_utilisateur = $_SESSION['prenom_utilisateur'];
            $date_naissance_utilisateur = $_SESSION['date_naissance_utilisateur'];
            $adresse_mail_utilisateur = $_SESSION['adresse_mail_utilisateur'];
            $password_utilisateur = $_SESSION['password_utilisateur'];



                $req2 = $db->prepare("INSERT INTO utilisateurs (sexe_utilisateur, nom_utilisateur, prenom_utilisateur, date_naissance_utilisateur, adresse_mail_utilisateur, password_utilisateur, villes_habitations, extension_habitations, numero_habitations, code_postal_habitations, rue_habitations, type_utilisateur, CB_number, CB_name, CB_validate ) VALUES (:sexe_utilisateur, :nom_utilisateur, :prenom_utilisateur, :date_naissance_utilisateur, :adresse_mail_utilisateur, :password_utilisateur, :villes_habitations, :extension_habitations, :numero_habitations, :code_postal_habitations, :rue_habitations, :type_utilisateur, :CB_number, :CB_name, :CB_validate ) ");

                $req2-> bindParam(":sexe_utilisateur", $sexe_utilisateur, PDO::PARAM_STR);
                $req2-> bindParam(":nom_utilisateur", $nom_utilisateur, PDO::PARAM_STR);
                $req2-> bindParam(":prenom_utilisateur", $prenom_utilisateur, PDO::PARAM_STR);
                $req2-> bindParam(":date_naissance_utilisateur", $date_naissance_utilisateur, PDO::PARAM_STR);
                $req2-> bindParam(":adresse_mail_utilisateur", $adresse_mail_utilisateur, PDO::PARAM_STR);
                $req2-> bindParam(":password_utilisateur", $password_utilisateur, PDO::PARAM_STR);
                $req2-> bindParam(":villes_habitations", $villes_habitations, PDO::PARAM_STR);
                $req2-> bindParam(":extension_habitations", $extension_habitations, PDO::PARAM_STR);
                $req2-> bindParam(":numero_habitations", $numero_habitations, PDO::PARAM_STR);
                $req2-> bindParam(":code_postal_habitations", $code_postal_habitations, PDO::PARAM_STR);
                $req2-> bindParam(":rue_habitations", $rue_habitations, PDO::PARAM_STR);
                $req2-> bindParam(":type_utilisateur", $type_utilisateur, PDO::PARAM_STR);
                $req2-> bindParam(":CB_number", $CB_number, PDO::PARAM_INT);
                $req2-> bindParam(":CB_name", $CB_name, PDO::PARAM_STR);
                $req2-> bindParam(":CB_validate", $CB_validate, PDO::PARAM_STR);
                
                $req2-> execute();
                session_start();
                header('Location: confirmation_ajout_utilisateur.php');



        }catch (Exception $e){
            echo $e->getMessage();
        }
    }
?>    