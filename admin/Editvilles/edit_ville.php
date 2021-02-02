<?php

require '../db.php';

$sql = $pdo->prepare('SELECT * FROM villes');
$sql->execute();
$villes = $sql->fetchAll();

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>

    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
</head>
<body>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Villes</th>
        <th scope="col">Adresse</th>
        <th scope="col">Téléphone</th>
        <th scope="col">Horaires</th>
        <th scope="col">Lat</th>
        <th scope="col">Long</th>
        <th scope="col">Action</th>

    </tr>
    </thead>
    <tbody>

    <?php foreach ($villes as $ville): ?>

        <tr>
            <td> <?= $ville ['id'] ?> </td>
            <td> <?= $ville ['Villes'] ?> </td>
            <td> <?= $ville ['adresse'] ?> </td>
            <td> <?= $ville ['tel'] ?> </td>
            <td> <?= $ville ['horaires'] ?> </td>
            <td> <?= $ville ['lat'] ?> </td>
            <td> <?= $ville ['lon'] ?> </td>
            <td>
                <a class="btn btn-primary" href="edit.php?lign_update=<?= intval($ville['id']) ?>">Modifier</a>
                <a class="btn btn-danger" href="delete.php?lign_delete=<?= intval($ville['id']) ?>">Supprimer</a></td>
        </tr>
    <?php endforeach; ?>
    <a class="btn btn-success" href="../insertVilles/insert_ville.php">Ajouter</a>
    </tbody>
</table>

</body>
</html>
