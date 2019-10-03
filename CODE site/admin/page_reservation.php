<?php
session_start();

// CONNEXION A LA BASE DE DONNÉE 
require 'connect.php';
require '../APRES_ENTRETIEN/head.php';
require '../APRES_ENTRETIEN/header.php';
require '../APRES_ENTRETIEN/fin_page_bootstrap.php';

$db = connect("dbVeloc");



// DEBUT HEAD
writeHead('../','Page réservation');
// FIN HEAD
?>
        <body>
            <div id="contenu_principal">

<?php
// DEBUT HEADER
writeHeader("../indexx");
// FIN HEADER
?>

<!-- DEBUT SECTION -->
<section class="roboto">

</section>


<?php
writeFinPageBootstrap();
?>