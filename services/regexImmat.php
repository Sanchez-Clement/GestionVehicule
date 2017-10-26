<?php
function typeImmat($immatriculation) {
$immatriculation = strtoupper($immatriculation);
  if (!preg_match('#^[A-Z]{2}-[0-9]{3}-[A-Z]{2}$#i ', $immatriculation)) {
    $error =  "format immatriculation non valable";


  } else {
    $error ="";
  }
    return $error;
}
 ?>
