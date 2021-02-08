<?php

//connexion bdd//
require 'db.php';


if(isset($_POST['form_connect']))
{

    $logidf = $_POST['nom'];
    $logmdp = $_POST['mot_de_passe'];



        $query = $pdo->prepare("SELECT * FROM users WHERE nom = :nom");
        $query->bindParam(':nom', $logidf);
        $query->execute(['nom' => $logidf]);
        $result = $query->fetch();

        if ($result){

            $hash = $result['mot_de_passe'];

            if (password_verify($logmdp, $hash)){

                session_start();
                $_SESSION['auth'] = $logidf;
                header('Location: Editvilles/edit_ville.php');
            }
            else {
                $erreur = 'Le mot de passe est incorrect';
            }
        }
        else{
            $erreur = 'Le compte n\'existe pas';
        }

}
else {
    echo "Veuillez compléter l'ensemble des champs.";

}

?>

<!DOCTYPE html>
<html class="no-js" lang="FR-fr">
<head>
    <meta charset="utf-8">
    <title>Geek Garage</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

<div id="container">
    <!-- zone de connexion -->

    <form class="form" method="post" action="">
        <h1>Connexion</h1>
        <input type="text" name="nom" placeholder="indentifiant" class="form-control" required>
        </br>
        <input type="password" name="mot_de_passe" placeholder="Mot de passe" class="form-control" required>
        </br>
        <button class="btn btn-primary" type="submit" name="form_connect">Se connecter</button>
        <button class="btn btn-primary"><a href="register.php">s'enregistrer</a></button>
    </form>

</div>
</body>
</html>