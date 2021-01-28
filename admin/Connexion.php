<?php

$pdo = new PDO('mysql:host=mysql;dbname=GeekGarage;host=127.0.0.1', 'root', '',[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

if($pdo === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}

?>