<?php
/**
 *
 */
class VehiculeManager
{
  protected $bdd;
  function __construct($bdd)
  {
    $this->setBdd($bdd);
  }
  public function setBdd($bdd)
  {
    $this->bdd=$bdd;
  }
}

 ?>
