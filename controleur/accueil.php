<?php
require_once"../includes/header.php";
require "../services/chargerClasse.php";
spl_autoload_register('chargerClasse');
require "../modele/connexion_sql.php";
require "../modele/VehiculeManager.php";

// connect to bbd GestionVehicule
$manager = new VehiculeManager ($bdd);

// get all the vehicules in bdd
$vehicules = $manager->getVehicules();

require_once"../vue/accueil.php";
require_once"../includes/footer.php";
?>
