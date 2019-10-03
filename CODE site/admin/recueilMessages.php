<?php
session_start();
require 'connect.php';
// créer la variable connection 
$db = connect("dbVeloc");


    if(isset($_POST['contactez_nous'])){
        if(isset($_SESSION['nom_utilisateur'])){
            if(isset($_POST['message_contact'])){
                $message_contact = trim(htmlspecialchars($_POST["message_contact"]));
    
                try{
                    $nom_contact = $_SESSION['nom_utilisateur'];
                    $email_contact = $_SESSION['adresse_mail_utilisateur'];

                    $insererMessageContact = $db->prepare("INSERT INTO contactez_nous(nom_contact, email_contact, message_contact) VALUE (:nom_contact, :email_contact, :message_contact)");
                    $insererMessageContact->bindParam(":nom_contact", $nom_contact, PDO::PARAM_STR);
                    $insererMessageContact->bindParam(":email_contact", $email_contact, PDO::PARAM_STR);
                    $insererMessageContact->bindParam(":message_contact", $message_contact, PDO::PARAM_STR);
                    $insererMessageContact->execute();  
                    // echo 'CAS 2<br>';
                    // var_dump($_SESSION['nom_utilisateur']);
                    // var_dump($email_contact);
                    // var_dump($message_contact);
                    header('Location: confirmation_envoi_message.php');                 
                }catch (Exception $e){
                    echo $e->getMessage();
                }
            }
        }
        // SI PAS ENCORE CONNECTÉ
        elseif(isset($_POST["nom_contact"])){
            $nom_contact = trim(htmlspecialchars($_POST["nom_contact"]));
            if(isset($_POST['email_contact'])){
                $email_contact = trim(htmlspecialchars($_POST["email_contact"]));
                if(filter_var($email_contact, FILTER_VALIDATE_EMAIL)){
                    if(isset($_POST['message_contact'])){
                        $message_contact = trim(htmlspecialchars($_POST["message_contact"]));
    
                        try{
                            $insererMessageContact = $db->prepare("INSERT INTO contactez_nous(nom_contact, email_contact, message_contact) VALUE (:nom_contact, :email_contact, :message_contact)");
    
                            $insererMessageContact->bindParam(":nom_contact", $nom_contact, PDO::PARAM_STR);
                            $insererMessageContact->bindParam(":email_contact", $email_contact, PDO::PARAM_STR);
                            $insererMessageContact->bindParam(":message_contact", $message_contact, PDO::PARAM_STR);
                            $insererMessageContact->execute();   
                            // echo 'CAS 1<br>';
                            // var_dump($email_contact);
                            // var_dump($_SESSION['nom_utilisateur']);
                            header('Location: confirmation_envoi_message.php');                 
                        }catch (Exception $e){
                            echo $e->getMessage();
                        }
                    }
                }
            }
        // SI DÉJA CONNECTÉ
        }
        
    }else{
        echo "Vous n'avez rien a faire ici.";
    }