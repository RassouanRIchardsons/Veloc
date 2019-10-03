<?php
// A FAIRE AJOUTER VENDOR AUTOLOAD;
    function writeLienReservation(){
?>
<a class="d-flex justify-content-center text-dark" <?php if(!isset($_SESSION['noCheat'])){echo 'href="" data-toggle="modal" data-target="#modalSignIn"';}else{echo 'href="../admin/page_reservation"';} ?>>
    <u class="ovf text-center righteous liens_je_reserve">Je réserve tout de suite</u>
</a>
<?php
    }


?>
