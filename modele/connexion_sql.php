<?php
// connexion to bdd gestionvehicule
$bdd = new PDO('mysql:host=localhost;dbname=GestionVehicule', 'root', 'root');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>
