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
$manager = new VehiculeManager ($bdd);



if(isset($_POST['creer'])) {

Clean($_POST);
if (empty($error)) {
  $type = $_POST['type'];
$brand = $_POST['marque'];
$modele = $_POST['modele'];
$immatriculation = $_POST['immatriculation'];
$price = (int)$_POST['prix'];
$description = $_POST['description'];
if(!$manager->existImmatriculation($immatriculation)) {

  $manager->addVehicule($type,$brand,$modele,$immatriculation,$price,$description);
  header('Location: accueil.php');

} else {
  $error = 'Le numéro de plaque est déjà existant' ;
}
}




} else {
  require '../vue/addVehicule.php';

}
?>
