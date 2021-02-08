<!DOCTYPE html>
<html class="no-js" lang="FR-fr">
<head>

    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Geek Garage</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>


    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="node_modules/leaflet/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">

    <!-- Script
    ================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- Favicons
     ================================================== -->
    <link rel="shortcut icon" href="img/logoGG.png">

</head>
<body>

<!-- Header
================================================== -->
<header id="home">

    <nav id="nav-wrap" class="z-index-1">
        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Navigation</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
        <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Acceuil</a></li>
            <li><a class="smoothscroll" href="#centres">Nos centres</a></li>
            <li><a class="smoothscroll" href="#services">Services</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
            <li><a class="" href="admin/login.php">Se connecter</a></li>
        </ul> <!-- end #nav -->
    </nav> <!-- end #nav-wrap -->
    <p class="scrolldown">
        <a class="smoothscroll" href="#centres"><i class="icon-down-circle"></i></a>
    </p>
</header> <!-- Header End -->

<!-- centres Section
================================================== -->
<section id="centres">
    <div class="row">
    </div>
    <div class="row z-index-0" id="macarte"></div>
</section> <!-- centres Section End-->

<!-- Services Section
================================================== -->
<section id="services">

    <div class="row">

        <div class="twelve columns collapsed">

            <!-- Services-wrapper -->
            <div id="Services-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

                <div class="columns Services-item">
                    <div class="item-wrap">

                        <a href="#modal-01" title="">
                            <img class="fa fa-search" alt="" src="">
                            <div class="overlay">
                                <div class="Services-item-meta">
                                    <h5 class="align-center">Diagnostique</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- item end -->

                <div class="columns Services-item">
                    <div class="item-wrap">

                        <a href="#modal-02" title="">
                            <img class="fa fa-keyboard-o" alt="" src="">
                            <div class="overlay">
                                <div class="Services-item-meta">
                                    <h5 class="align-center software">Software</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- item end -->

                <div class="columns Services-item">
                    <div class="item-wrap">
                        <a href="#modal-03" title="">
                            <img class="fa fa-bug 3" src="">
                            <div class="overlay">
                                <div class="Services-item-meta">
                                    <h5 class="align-center">Maintenance</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- item end -->

                <div class="columns Services-item">
                    <div class="item-wrap">

                        <a href="#modal-04" title="">
                            <img class="fa fa-refresh" alt="" src="">
                            <div class="overlay">
                                <div class="Services-item-meta">
                                    <h5 class="align-center">Remaster</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- item end -->

            </div> <!-- Services-wrapper end -->

        </div> <!-- twelve columns end -->


        <!-- Modal Popup
         --------------------------------------------------------------- -->

        <div id="modal-01" class="popup-modal mfp-hide">
            
            <div class="description-box">
                <h4>Diagnostique</h4>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi
                    elit consequat ipsum, nec sagittis sem nibh id elit.</p>
            </div>

            <div class="link-box">
                <a class="popup-modal-dismiss">Close</a>
            </div>

        </div><!-- modal-01 End -->

        <div id="modal-02" class="popup-modal mfp-hide">

            <div class="description-box">
                <h4>SOFTWARE</h4>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi
                    elit consequat ipsum, nec sagittis sem nibh id elit.</p>
            </div>

            <div class="link-box">
                <a class="popup-modal-dismiss">Close</a>
            </div>

        </div><!-- modal-05 End -->

        <div id="modal-03" class="popup-modal mfp-hide">

            <div class="description-box">
                <h4>Maintenance</h4>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi
                    elit consequat ipsum, nec sagittis sem nibh id elit.</p>
            </div>

            <div class="link-box">
                <a class="popup-modal-dismiss">Close</a>
            </div>

        </div><!-- modal-06 End -->

        <div id="modal-04" class="popup-modal mfp-hide">

            <div class="description-box">
                <h4>Remaster</h4>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi
                    elit consequat ipsum, nec sagittis sem nibh id elit.</p>
            </div>

            <div class="link-box">
                <a class="popup-modal-dismiss">Close</a>
            </div>

        </div><!-- modal-07 End -->
    </div> <!-- row End -->
</section> <!-- Services Section End-->

<!-- Call-To-Action Section
================================================== -->

<section id="contact">

    <div class="row section-head">
    </div>

    <div class="row">

        <div class="form">
            <!-- form -->
            <form name="contact" action="admin/rdv/insert_rdv.php" method="POST"">

                <input id="contact_center" type="hidden" name="centre">

                <td>
                    <input type="text" name="name" class="form-control" id="validationServer01" placeholder="Nom/Prénom:"><br>
                    <span class="error" id="errorname"></span>
                </td>
                <td>
                    <input type="email" name="email" class="form-control" placeholder="E-mail:"><br>
                    <span class="error" id="erroremail"></span>
                </td>
                <td>
                    <input type="text" name="phone" class="form-control" placeholder="Telephone:"><br>
                    <span class="error" id="errore"></span>
                </td>
                <td>
                      <textarea type="text" resize name="message" class="form-control"
                                id="exampleFormControlTextarea1" rows="3" placeholder="Message:"></textarea>
                    <span class="error" id="errormsg"></span>
                </td>
                <button type="submit" value="Envoyer" class="submit" name="form_submit">Envoyer </button>
            </form>

            <!-- contact-warning -->
            <div id="message-warning">Erreur</div>
            <!-- contact-success -->
            <div id="message-success">
                <i class="fa fa-check"></i>Votre message a bien été envoyé<br>
            </div>
        </div>
    </div>
</section> <!-- Contact Section End-->

<!-- footer
================================================== -->
<footer>

    <div class="row">

        <div class="twelve columns">
            <ul class="copyright">
                <li>&copy; Copyright 2021</li>
                Design by <a href="http://www.styleshout.com/" title="Styleshout" target="_blank">K.Element.Graphic</a>
            </ul>

        </div>

        <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

    </div>

</footer> <!-- Footer End-->

<!-- Java Script
================================================== -->
<?php
require 'admin/db.php';

$sql = $pdo->prepare("SELECT * FROM villes");
$sql->execute();
$villes = $sql->fetchAll();
$villes_json = json_encode($villes);


?>
<script type="text/javascript">

    var lat = 47.61634;
    var lon = 6.14439;
    var carte = null;

    // Fonction d'initialisation de la carte
    function initMap() {

        // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
        carte = L.map('macarte').setView([lat, lon], 11);
        // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            // Il est toujours bien de laisser le lien vers la source des données
            attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(carte);
    }

    window.onload = function () {
        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
        initMap();

        var villes = <?= $villes_json; ?>

        var tableauMarker = []

        var marqueurs = L.markerClusterGroup();


// creation de marqueur avec Popup

        for (ville in villes) {
            var marqueur1 =
                L.marker([villes[ville].lat, villes[ville].lon]); //addTo(carte);
            marqueur1.bindPopup("<h1>" +
                "<br>" +
                [villes[ville].Villes] +
                "</h1><br>" +
                [villes[ville].adresse] +
                "<br>" +
                [villes[ville].horaire] +
                "<br>" +
                [villes[ville].tel] + "<br>" +
                "<button onclick=\"document.getElementById('contact_center').value = '"+ [villes[ville].Villes] +"';\" type='button' " +
                "class='btn btn-outline-danger' data-bs-toggle='modal' data-bs-target=''><a href='#contact'> Contacter</a></button>");
            marqueurs.addLayer(marqueur1);
        }


        //On ajoute le marqueur au tableau

        tableauMarker.push(marqueurs);

        //On regroupe les marqueurs dans un groupe lefleat
        var groupe = new L.featureGroup(tableauMarker);

        //On adapte le zoom au groupe
        carte.fitBounds(groupe.getBounds());

        carte.addLayer(marqueurs);
    };
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/magnific-popup.js"></script>
<script src="js/init.js"></script>
<script type="text/javascript" src="js/appmap.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
<script type="text/javascript" src="js/modale.js"></script>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

</body>
</html>