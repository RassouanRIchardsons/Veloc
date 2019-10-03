<?php
function writeHead($directionLienCSS ,$title){
?>

<!doctype html>
        <html lang="fr">
        <head>
<!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Lien Bootstrap -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Lien logo -->
                <script src="https://kit.fontawesome.com/a9c9c86a63.js"></script>
<!-- Lien Favicon
                <link rel="icon" type="image/png" href="favicon.png" /> -->
<!-- Lien Google font -->
                <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<!-- Lien CSS -->
                <link rel="stylesheet" href="<?php echo $directionLienCSS; ?>assets/style.css"/>
                <title><?php echo $title; ?></title>
        </head>
<?php
};
?>
