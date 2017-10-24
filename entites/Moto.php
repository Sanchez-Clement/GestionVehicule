<?php
/**
 *
 */
class Moto extends Vehicule
{
  protected static $wheels = 2;


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
