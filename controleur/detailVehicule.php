<?php
require_once"../includes/header.php";
function chargerClasse($classname)
{
  require "../entites/" . $classname.'.php';

}


spl_autoload_register('chargerClasse');
require "../modele/connexion_sql.php";
require "../modele/VehiculeManager.php";
$manager = new VehiculeManager ($bdd);
$vehicule = $manager -> getThisVehicule($_GET['id']);
var_dump($vehicule);
 ?>
