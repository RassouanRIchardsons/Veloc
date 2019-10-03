<?php
session_start();


// CONNEXION A LA BASE DE DONNÉE 
require 'admin/connect.php';
require 'APRES_ENTRETIEN/head.php';
require 'APRES_ENTRETIEN/header.php';
require 'APRES_ENTRETIEN/home.php';
require 'APRES_ENTRETIEN/villes.php';
require 'APRES_ENTRETIEN/caracteristiques.php';
require 'APRES_ENTRETIEN/footer.php';
require 'APRES_ENTRETIEN/modal_signup.php';
require 'APRES_ENTRETIEN/modal_signin.php';
require 'APRES_ENTRETIEN/fin_page_bootstrap.php';
require 'assets/objets/Lien_reservation.php';

$db = connect("dbVeloc");



// DEBUT HEAD
writeHead('','Véloc, location de vélo en 2"2\'');
// FIN HEAD
?>
        

<?php
// DEBUT HEADER + OUVERTURE BALISE BODY + BALISE CONTENU PRINCIPAL
writeHeader("");
// FIN HEADER
?>

<!-- DEBUT SECTION -->
                <section class="roboto">



<?php
// DEBUT HOME
writeHome();
// FIN HOME

// DEBUT VILLES 
writeVilles();
// FIN VILLES

// DEBUT CARACTERISTIQUES
writeCaracteristiques();
// FIN CARACTERISTIQUES

// DEBUT FOOTER
writeFooter();
// FIN FOOTER
?>


                </section>
<!-- FIN SECTION -->





<!-- MODAL -->
<?php
// DEBUT MODAL SIGNUP
writeModalSignup();
// FIN MODAL SIGNUP
    
// DEBUT MODAL SIGNIN
writeModalSignin();
// FIN MODAL SIGNIN
?>



    <!-- MODAL RESERVER              à revoir -->
                <!-- <div class="modal fade" id="modalReserver" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="card bg-light">
                                <article class="card-body w-100 mx-auto" style="max-width: 700px;">
                                    <h5>Formulaire de réservation</h5> -->
                                    <!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScAB5mnq2ZDGT02b0JuMCgED3vOh8lHPQ9n1XJ65bfUVbwrVA/viewform?embedded=true" width="100%" height="1370" frameborder="0" marginheight="0" marginwidth="0">Chargement…</iframe> -->
                                        
                                    <!-- Set up a container element for the button -->
                                    <!-- <div class="mx-auto pt-3" id="paypal-button-container"></div> -->
                                    <!-- Include the PayPal JavaScript SDK -->
                                    <!-- <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script> -->
                                    <script>
                                        // Render the PayPal button into #paypal-button-container
                                        // paypal.Buttons().render('#paypal-button-container');
                                    </script>
                                <!-- </article>
                            </div> 
                        </div>
                    </div>
                </div> -->
    <!-- // MODAL RESERVER -->
<!-- // MODAL -->
            
<?php
// SCRIPT BOOTSTRAP + FERMETURE BALISE BODY + BALISE CONTENU PRINCIPAL
writeFinPageBootstrap();
?>       



<!-- /////////////// -->



