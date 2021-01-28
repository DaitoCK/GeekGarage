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

    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/media-queries.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href=../"node_modules/leaflet/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">

    <!-- Script
    ================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- Favicons
     ================================================== -->
    <link rel="shortcut icon" href="img/" >
</head>
<body>

<header id="home">
    <nav id="nav-wrap">
        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Navigation</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
        <ul id="nav" class="nav">
            <li><a href="Editvilles/edit_ville.php">Editer</a></li>
            <li><a href="insertVilles/insert_ville.php">Ajouter</a></li>
        </ul> <!-- end #nav -->
    </nav> <!-- end #nav-wrap -->
</header> <!-- Header End -->

<SCRIPT LANGUAGE="javascript">
    code = prompt('Entrez le mot de passe. Vous avez 1 seul essais... Attention, respecter les majuscules et les minuscules','Entrer le mot de passe ici');
    if (code != "04121997")//Remplacer votremotdepasse par le mot de passe que vous allez choisir...
    {
        location.href="../index.php";//ici c'est la page où est redirigé le visiteur qui entre le mauvais mot de passe
    }
</SCRIPT>
</body>
</html>