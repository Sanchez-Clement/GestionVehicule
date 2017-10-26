<?php
/**
 *
 */
class Moto extends Vehicule
{
    protected static $wheels = 2;

    /**
     * get the static wheels
     *
     * @param empty
     *
     * @return int
     */
    public function getWheels()
    {
        return self::$wheels;
    }

    /**
     * set the static wheels
     *
     * @param int
     *
     * @return self
     */
    public function setWheels($wheels)
    {
        $wheels = (int)$wheels;
        self::$wheels = $wheels;
    }
}
