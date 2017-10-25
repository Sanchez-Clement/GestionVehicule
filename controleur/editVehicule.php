<?php
require_once"../includes/header.php";
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
var_dump($_POST);

require '../vue/editVehicule.php';
} else {
  header('Location: accueil.php');
}
?>
