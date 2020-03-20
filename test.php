<?php
try {
    $bdd = new PDO('mysql:host=mysql;dbname=test;charset=utf8', 'root','root');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM contact');
while ($donnees = $reponse->fetch()) {
    var_dump($donnees);
}
