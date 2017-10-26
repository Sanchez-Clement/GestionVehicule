<?php
 /**
 *
 */
abstract class Vehicule
{
    protected $id_vehicule;
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

    /**
     * call all the setters to define the object
     *
     * @param array
     *
     * @return empty
     */
    public function hydrate(array $donnees)
    {
      foreach ($donnees as $key => $value) {
          $method = "set" . ucfirst($key) ;
          if (method_exists($this, $method)) {
              $this->$method($value);
          }
      }
    }

    /**
     * get the protected id
     *
     * @param empty
     *
     * @return int
     */
    public function getId()
    {
        return $this->id_vehicule;
    }

    /**
     * get the protected type
     *
     * @param empty
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * get the protected brand
     *
     * @param empty
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }
    /**
     * get the protected modele
     *
     * @param empty
     *
     * @return string
     */

    public function getModele()
    {
        return $this->modele;
    }

    /**
     * get the protected immatriculation
     *
     * @param empty
     *
     * @return string
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * get the protected price
     *
     * @param empty
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * get the protected description
     *
     * @param empty
     *
     * @return string
     */
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
    public function setId_vehicule($id_vehicule)
    {
        $id_vehicule = (int)$id_vehicule;
        $this->id_vehicule = $id_vehicule;

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
