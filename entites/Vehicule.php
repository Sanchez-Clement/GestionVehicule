<?php
 /**
 *
 */
class Vehicule
{
    protected $id;
    protected $type ;
    protected $brand;
    protected $modele;
    protected $immatriculation;
    protected $price;
    protected $description;
    public function __construct()
    {
        $this->type=static::class;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }
    public function getBrand()
    {
        return $this->brand;
    }
    public function getModele()
    {
        return $this->modele;
    }
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getDescription()
    {
        return $this->description;
    }

}
