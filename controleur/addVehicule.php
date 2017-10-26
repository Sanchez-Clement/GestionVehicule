<?php
$error ="";
require_once"../includes/header.php";
require "../services/clean.php";
require "../services/chargerClasse.php";
spl_autoload_register('chargerClasse');
require "../modele/connexion_sql.php";
require "../modele/VehiculeManager.php";
require "../services/regexImmat.php";

// connect to bbd GestionVehicule
$manager = new VehiculeManager($bdd);


// When you click on the button add a vehicule
if (isset($_POST['creer'])) {

  // Control if all the variales in $_POST are not empty and sanitize them
    Clean($_POST);
    $error = typeImmat($_POST['immatriculation']) ;

    // If all the variables in $_PoST are full
    if (empty($error)) {


        $type = $_POST['type'];
        $brand = $_POST['marque'];
        $modele = $_POST['modele'];
        $immatriculation = $_POST['immatriculation'];
        $price = (int)$_POST['prix'];
        $description = $_POST['description'];

        // Check if the Immatriculation is already in the bdd
        if (!$manager->existImmatriculation($immatriculation)) {
            $manager->addVehicule($type, $brand, $modele, $immatriculation, $price, $description);
            header('Location: accueil.php');
        } else {
            $error = 'Le numéro de plaque est déjà existant' ;
        }
    } else {
      require '../vue/addVehicule.php';
    }
} else {
    require '../vue/addVehicule.php';
}
