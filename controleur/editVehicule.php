<?php
$error ="";
require_once"../includes/header.php";
require "../services/clean.php";
function chargerClasse($classname)
{
  require "../entites/" . $classname.'.php';

}


spl_autoload_register('chargerClasse');
require "../modele/connexion_sql.php";
require "../modele/VehiculeManager.php";
$id = (int)$_GET['id'];
$manager = new VehiculeManager ($bdd);
if($manager->existId($id)) {

$vehicule = $manager -> getThisVehicule($id);
if(isset($_POST['modifier'])) {

Clean($_POST);
if (empty($error)) {
  $type = $_POST['type'];
$brand = $_POST['marque'];
$modele = $_POST['modele'];
$immatriculation = $_POST['immatriculation'];
$price = (int)$_POST['prix'];
$description = $_POST['description'];
if(!$manager->existImmatriculation($immatriculation) OR $vehicule->getImmatriculation()==$immatriculation) {

  $manager->updateVehicule($id,$type,$brand,$modele,$immatriculation,$price,$description);
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
?>
