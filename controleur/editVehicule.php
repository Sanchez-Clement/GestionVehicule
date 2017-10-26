<?php
$error ="";
require_once"../includes/header.php";
require "../services/clean.php";
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

    // if you click on the button modify the vehicule
    if (isset($_POST['modifier'])) {


// Control if all the variales in $_POST are not empty and sanitize them
        Clean($_POST);

        // If all the variables in $_PoST are full
        if (empty($error)) {
            $type = $_POST['type'];
            $brand = $_POST['marque'];
            $modele = $_POST['modele'];
            $immatriculation = $_POST['immatriculation'];
            $price = (int)$_POST['prix'];
            $description = $_POST['description'];

            // Check if the Immatriculation is already in the bdd or it is the same immatriculation
            if (!$manager->existImmatriculation($immatriculation) or $vehicule->getImmatriculation()==$immatriculation) {

              // update the vehicule in bdd
                $manager->updateVehicule($id, $type, $brand, $modele, $immatriculation, $price, $description);
                header('Location: accueil.php');
            } else {
                $error = 'Le numéro de plaque est déjà existant' ;
            }
        }
    }

    require '../vue/editVehicule.php';
} else {
    header('Location: accueil.php');
}
