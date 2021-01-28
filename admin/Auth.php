<?php
    require_once 'db.php';
    require 'util.php';
    init_php_session();

if(isset($_POST['formconnexion']))
    if(isset($_POST['pseudo']) && !empty($_POST['pseudo']) &&
    isset($_POST['password']) && !empty($_POST['password']))
{
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    $sql = 'SELECT * FROM user WHERE pseudo = :pseudo';
    $fields = ['pseudo' => $pseudo];

    $req = PDO::getInstance()->request($sql, $fields);
}
?>

<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="/css/media-queries.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <title>Administration</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>


</head>


<body>


<form class="box" method="POST" action="">

    <h1 class="login">Connexion</h1>

    <input class=""  type="text" name="pseudo" minlength="2" placeholder="Pseudo" required>
    <input type="password" name="password" minlength="8" placeholder="Mot de passe" required>
    <button type="submit" name="formconnexion" value="connexion">Se connecter</button>

</form>
<?php
if(isset($erreur))
{
    echo $erreur;
}

?>
</body>
</html>