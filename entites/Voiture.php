<?php
/**
 *
 */
class Voiture extends Vehicule
{
  protected static $wheels = 4;
  function __construct(array $donnees)
  {
    parent::__construct($donnees);
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
