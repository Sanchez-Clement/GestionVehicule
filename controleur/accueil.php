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
$vehicules = $manager->getVehicules();
var_dump($vehicules);
?>
