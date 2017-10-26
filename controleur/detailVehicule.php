<?php
require_once"../includes/header.php";
require "../services/chargerClasse.php";
spl_autoload_register('chargerClasse');
require "../modele/connexion_sql.php";
require "../modele/VehiculeManager.php";

$id = (int)$_GET['id'];

// connect to bbd GestionVehicule
$manager = new VehiculeManager($bdd);

// Check if the id is in bdd
if ($manager->existId($id)) {

  // get the vehicule with the id selectionned
    $vehicule = $manager -> getThisVehicule($id);
    require '../vue/detailVehicule.php';
    
} else {
    header('Location: accueil.php');
}
