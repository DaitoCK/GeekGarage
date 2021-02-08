<?php
require 'db.php';
//condition si on appuie sur le bouton//
if (isset($_POST['form_submit'])) {

    //déclaration des $_POST avec leurs sécurisation//
    $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
    $mdp_confirm = password_hash($_POST['mdp_confirm'], PASSWORD_BCRYPT);
    $identifiant = htmlspecialchars($_POST['identifiant']);

    //on limite le nombres de caractéres du pseudo//
    $identifiantlength = strlen($identifiant);
    if ($identifiantlength <= 255){

        //on verifie si le pseudo est disponible//
        $verifidentifiant = $pdo->prepare("SELECT * FROM users WHERE nom = ?");
        $verifidentifiant->execute([$identifiant]);
        $resultidentifiant = $verifidentifiant->rowCount();
        if ($resultidentifiant ==0) {

            //on verifie que le mdp correspond au mdp confirm//
            if ($_POST["mdp"] == $_POST["mdp_confirm"]) {
                $sql = $pdo->prepare("INSERT INTO users (nom, mot_de_passe) VALUES (?,?)");
                $sql->execute([$identifiant, $mdp]);
                $succes = 'Votre compte à bien été créer !';
                header("Refresh: 2; url='login.php'");
            } else {
                $erreur = 'Les mots de passe ne corresponde pas !';
            }

        }

        else{
            $erreur = 'Ce pseudo est déja pris';
        }
    }

    else{
        $erreur = 'Votre pseudo ne doit pas dépasser 255 caractères !';
    }

}


?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/media-queries.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <title>Inscription</title>
</head>
<body>

<div id="container">
    <div class="form_register">

        <form method="post" action="" >
            <h1>Inscription</h1>
            <input type="text" name="identifiant" placeholder="Identifiant" class="form-control">
            </br>
            <input type="password" name="mdp" placeholder="Mot de passe" class="form-control">
            </br>
            <input type="password" name="mdp_confirm" placeholder="Confirmer mot de passe" class="form-control">
            </br>
            <button type="submit" name="form_submit" class="btn btn-primary">S'inscrire</button>
        </form>
        <?php
        if (isset($erreur)) {
            echo "<p style='color: red'>$erreur<p>";
        }
        if (isset($succes)){
            echo "<p style='color: green'>$succes</p>";
        }
        ?>
    </div>
</div>

</body>
</html>