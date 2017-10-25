<?php
require "../modele/connexion_sql.php";
require "../modele/VehiculeManager.php";
$id = (int)$_GET['id'];
$manager = new VehiculeManager($bdd);
if ($manager->existId($id)) {
  $manager->deleteVehicule($id);
}

header('Location: accueil.php')
 ?>
