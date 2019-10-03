<?php
function writeHeaderSimple(){
?>
<header class="border-bottom bg-light fixed-top roboto">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand d-flex" href="#">
                            <i class="fas fa-biking fa-3x"></i>
                            <h1><span class="righteous">Véloc.</span></h1>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="../indexx.php">Page d'accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../indexx.php#ville">Trouvez sa borne</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../indexx.php#caracteristiques">Nos vélos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../indexx.php#footer">Contact et Info</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>

<?php
};
?>