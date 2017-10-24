<?php
 /**
 *
 */
abstract class Vehicule
{
    protected $id;
    protected $type ;
    protected $brand;
    protected $modele;
    protected $immatriculation;
    protected $price;
    protected $description;
    public function __construct(array $donnees)
    {
        $this->type=static::class;
        $this->hydrate($donnees);
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

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $id = (int)$id;
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of Brand
     *
     * @param mixed brand
     *
     * @return self
     */
    public function setBrand($brand)
    {
      if(is_string($brand)) {
        $this->brand = $brand;

        return $this;}
    }

    /**
     * Set the value of Modele
     *
     * @param mixed modele
     *
     * @return self
     */
    public function setModele($modele)
    {
      if(is_string($modele)) {
        $this->modele = $modele;

        return $this;}
    }

    /**
     * Set the value of Immatriculation
     *
     * @param mixed immatriculation
     *
     * @return self
     */
    public function setImmatriculation($immatriculation)
    {
      if(is_string($immatriculation)) {
        $this->immatriculation = $immatriculation;

        return $this;}
    }

    /**
     * Set the value of Price
     *
     * @param mixed price
     *
     * @return self
     */
    public function setPrice($price)
    {
      $price = (int)$price;
        $this->price = $price;

        return $this;
    }

    /**
     * Set the value of Description
     *
     * @param mixed description
     *
     * @return self
     */
    public function setDescription($description)
    {
      if(is_string($description)){
        $this->description = $description;

        return $this;
        }
    }

}
