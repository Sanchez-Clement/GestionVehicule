<?php
require "../modele/connexion_sql.php";
require "../modele/VehiculeManager.php";

$id = (int)$_GET['id'];

// connect to bbd GestionVehicule
$manager = new VehiculeManager($bdd);

// Check if the id is in bdd
if ($manager->existId($id)) {

  // Delete the vehicule in bdd
  $manager->deleteVehicule($id);
}

header('Location: accueil.php')
 ?>
