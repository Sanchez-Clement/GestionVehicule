<?php
/**
 *
 */
class Camion extends Vehicule
{
  protected static $wheels = 8;
  function __construct(array $donnees)
  {
    parent::construct($donnes);
  }

  public function getWheels()
  {
    return self::$wheels;
  }
  public function setWheels($wheels) {
    $wheels = (int)$wheels;
    self::$wheels = $wheels;
  }
}

 ?>