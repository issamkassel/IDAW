<?php
function renderMenuToHTML($currentPageId) {
    // un tableau qui d\'efinit la structure du site
    $mymenu = array(
    // idPage titre
    'index' => array( 'Accueil' ),
    'cv' => array( 'Cv' ),
    'projets' => array('Mes Projets')
    );
    // ...
    echo "<nav class=\"navbar navbar-expand-lg bg-secondary text-uppercase fixed-top\" id=\"mainNav\">";
    echo "<div class=\"container\">";
    echo "<a class=\"navbar-brand js-scroll-trigger\" href=\"index.php\">Mon Site</a>";
    echo "<button class=\"navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">";
    echo "Menu";
    echo "<i class=\"fas fa-bars\"></i>";
    echo "</button>";
    echo "<div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">";
    echo "<ul class=\"navbar-nav ml-auto\">";
    foreach($mymenu as $pageId => $pageParameters) {
        echo "<li class=\"nav-item mx-0 mx-lg-1\">";
        echo "<a";
        echo " class=\"";
        if($pageId === $currentPageId)
            echo "selected " ;
        echo "nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\"";
        echo "href='$pageId.php'>$pageParameters[0]</a>";
        echo "</li>";
    }
    echo "</ul></div></div></nav>";
    }
    

?>
 
 <!-- Navigation-->
 <!--<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php">Mon Site</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class=" selected nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Acceuil</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class=" nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cv.php">CV</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class=" nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="projets.php">Projet</a></li>
                    </ul>
                </div>
            </div>
        </nav>
-->