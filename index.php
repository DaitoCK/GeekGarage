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
	<link rel="shortcut icon" href="img/logoGG.png" >

</head>
<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">
         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Acceuil</a></li>
            <li><a class="smoothscroll" href="#centres">Nos centres</a></li>
            <li><a class="smoothscroll" href="#services">Services</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
             <li><a class="" href="admin/index.php">Se connecter</a></li>
         </ul> <!-- end #nav -->
      </nav> <!-- end #nav-wrap -->
      <p class="scrolldown">
         <a class="smoothscroll" href="#centres"><i class="icon-down-circle"></i></a>
      </p>
   </header> <!-- Header End -->

<!-- centres Section
================================================== -->


<div class="contain_modal">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
                </div>
                <div style="margin-left: 10px" class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>

            </div>
        </div>
    </div>
</div>


<section id="centres">
    <div class="row">
        <div class="nine columns main-col">
            <h2>Nos centres</h2>
         </div> <!-- end .main-col -->
      </div>
      <div class="row" id="macarte"></div>
   </section> <!-- centres Section End-->

   <!-- Services Section
   ================================================== -->
   <section id="services">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1>Services proposé</h1>

            <!-- Services-wrapper -->
            <div id="Services-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

                <div class="columns Services-item">
                    <div class="item-wrap">
                        <a href="#modal-01" title="">
                            <img alt="" src="images/Services/diagnostic.jpg">
                            <div class="overlay">
                                <div class="Services-item-meta">
                                    <h5>Diagnostique</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- item end -->

               <div class="columns Services-item">
                  <div class="item-wrap">

                     <a href="#modal-05" title="">
                        <img alt="" src="images/Services/software.jpg">
                        <div class="overlay">
                           <div class="Services-item-meta">
          					      <h5>SOFTWARE</h5>
          					   </div>
                        </div>
                     </a>
                  </div>
          		</div> <!-- item end -->

               <div class="columns Services-item">
                  <div class="item-wrap">

                     <a href="#modal-06" title="">
                        <img alt="" src="images/Services/maintenance.jpg">
                        <div class="overlay">
                           <div class="Services-item-meta">
          					      <h5>Maintenance</h5>
          					   </div>
                        </div>
                     </a>
                  </div>
          		</div> <!-- item end -->

               <div class="columns Services-item">
                  <div class="item-wrap">

                     <a href="#modal-07" title="">
                        <img alt="" src="images/Services/origami.jpg">
                        <div class="overlay">
                           <div class="Services-item-meta">
          					      <h5>Remaster</h5>
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

		      <img class="scale-with-grid" src="img/header2.jpg" alt="" />

		      <div class="description-box">
			      <h4>Diagnostique</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
		      </div>

            <div class="link-box">
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-01 End -->

         <div id="modal-05" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="img/header2.jpg" alt="" />

		      <div class="description-box">
			      <h4>SOFTWARE</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
		      </div>

            <div class="link-box">
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-05 End -->

         <div id="modal-06" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="img/header2.jpg" alt="" />

		      <div class="description-box">
			      <h4>Maintenance</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
		      </div>

            <div class="link-box">
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-06 End -->

         <div id="modal-07" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="img/header2.jpg" alt="" />

		      <div class="description-box">
			      <h4>Remaster</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
		      </div>

            <div class="link-box">
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-07 End -->
      </div> <!-- row End -->
   </section> <!-- Services Section End-->


   <!-- Call-To-Action Section
   ================================================== -->

<!-- Modal Section
================================================== -->

<div id="modal-07" class="popup-modal mfp-hide">

    <img class="scale-with-grid" src="img/header2.jpg" alt=""/>

    <div class="description-box">
        <form class="w-100" method="post" action="back/mail.php">
            <div class="form-group pt-3">
                <input type="email" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp" placeholder="Adresse Email" name="email">
            </div>
            <div class="form-group pt-3">
                <input type="text" class="form-control" id="exampleInputPassword1"
                       placeholder="Nom, Prénom, Raison social" name="name">
            </div>
            <div class="form-group pt-3">
                <input type="text" class="form-control" id="exampleInputPassword1"
                       placeholder="Numéro de téléphone" name="tel">
            </div>
            <div class="input-group pt-3">
                                    <textarea class="form-control" aria-label="With textarea"
                                              placeholder="Explication de votre problème" name="prob"></textarea>
            </div>
        </form>
    </div>

    <div class="link-box">
        <a class="popup-modal-dismiss">Close</a>
    </div>

</div>
<!-- Modal Section End-->

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
                [villes[ville].horaires] +
                "<br>" +
                [villes[ville].tel] + "<br>" +
                "<button style='margin-top: 5px' type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Contacter</button>");
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