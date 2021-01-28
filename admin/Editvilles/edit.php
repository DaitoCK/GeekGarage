<?php
require '../db.php';

$id = $_REQUEST["lign_update"];

$id = intval($id);

$sql = ("SELECT * FROM villes WHERE id=$id");

$result = array($sql);

if(isset($_POST['btn-update'])){
    $nom_ville = $_POST['ville_name'];
    $adress_ville = $_POST['ville_adress'];
    $tel = $_POST['tel'];
    $lat = $_POST['ville_lat'];
    $lon = $_POST['ville_lon'];
    $horaires = $_POST['horaires'];

    $update = ("UPDATE villes SET ville_name='$nom_ville', ville_adress='$adress_ville', tel='$tel', ville_lat='$lat', ville_lon='$lon', horaires='$horaires'");
    $update->execute([$nom_ville, $adress_ville, $tel, $lat, $lon, $horaires]);
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Administration</title>
</head>
<body>
<div>
    <h3 style="margin-top: 100px">Ajouter une ville</h3>
    <form action="" method="post" class="form-group">

        <input type="text" name="ville_name" placeholder="Ville" class="form-control w-50 mt-2" value="<?= $result['ville_name']?>">

        <input type="text" name="ville_adress" placeholder="Adresse" class="form-control w-50 mt-2" value="<?= $result['Villes']?>">

        <input type="text" name="tel" placeholder="N° de téléphone" class="form-control w-50 mt-2">

        <input type="text" name="ville_lat" placeholder="lat" class="form-control w-50 mt-2">

        <input type="text" name="ville_lon" placeholder="lon" class="form-control w-50 mt-2">

        <input type="text" name="horaires" placeholder="horaires" class="form-control w-50 mt-2">

        <button type="submit" name="form_submit" class="btn btn-primary mt-2">Enregistrer</button>

        <a href="../gererlesvilles/edit_ville.php" class="btn btn-secondary" style="margin-top: 10px">Liste des villes</a>

        <?php if (isset($insert)){
            echo '<div class="alert alert-success" role="alert">
            
  Enregistrer avec succés !
</div>';
            header('Location: ../EditVilles/edit_ville.php');
        }
        ?>
    </form>
</div>
</body>
</html>