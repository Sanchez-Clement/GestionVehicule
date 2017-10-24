<?php
/**
 *
 */
class Camion extends Vehicule
{
  protected static $wheels = 8;


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
