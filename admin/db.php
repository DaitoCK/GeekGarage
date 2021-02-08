<?php

try{
    // Connexion à la base
    $pdo = new PDO('mysql:host=mysql;dbname=kendhalc_repare_online_garage;host=127.0.0.1', 'kendhalc', '5GCv159jrRHnuQ==');
    $pdo->exec('SET NAMES "UTF8"');
} catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage();
    die();
}
