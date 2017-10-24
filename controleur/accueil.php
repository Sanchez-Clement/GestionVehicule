<?php
function chargerClasse($classname)
{
  require "entites/" . $classname.'.php';

}


spl_autoload_register('chargerClasse');
require "modele/connexion_sql.php";
require "modele/vehiculeManager.php";
?>
