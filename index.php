<?php

?>

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
             <li><a class="" href="admin/Auth.php">Se connecter</a></li>
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

   <!-- Contact Section
   ================================================== -->
   <section id="contact">

         <div class="row section-head">
            <h1>Centre de #id</h1>
         </div>

         <div class="row">

            <div class="form">
               <!-- form -->
               <form name="Contact" action="sendEmail.php" method="POST" onsubmit="return validateForm()">
                               
                  <td>
                      <input type="text" name="name" class="form-control" id="validationServer01" placeholder="Nom/Prénom:"><br>
                      <span class="error" id="errorname"></span>
                  </td>
                  <td>
                      <input type="email" name="email" class="form-control" placeholder="E-mail:"><br>
                      <span class="error" id="erroremail"></span>
                  </td>
                  <td>
              
                      <textarea type="text" resize name="message" class="form-control" 
                      id="exampleFormControlTextarea1" rows="3" placeholder="Message:"></textarea>
                      
                      <span class="error" id="errormsg"></span>
                  </td>
                  <button type="submit" value="Envoyer" class="submit">Envoyer </button>
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
    <script type="text/javascript" src="js/map.js"></script>
    <script src="js/main.js"></script>

</body>
</html>