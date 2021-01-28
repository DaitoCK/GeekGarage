<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administration</title>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="node_modules/leaflet/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">


</head>
<body>

<a href="Editvilles/edit_ville.php">Editer</a>

<SCRIPT LANGUAGE="javascript">
    code = prompt('Entrez le mot de passe. Vous avez 1 seul essais... Attention, respecter les majuscules et les minuscules','Entrer le mot de passe ici');
    if (code != "04121997")//Remplacer votremotdepasse par le mot de passe que vous allez choisir...
    {
        location.href="../index.php";//ici c'est la page où est redirigé le visiteur qui entre le mauvais mot de passe
    }
</SCRIPT>
</body>
</html>