<?php
/**
 *
 */
class VehiculeManager
{
    protected $bdd;


    public function __construct($bdd)
    {
        $this->setBdd($bdd);
    }

    /** Define bdd
     *@param (bdd) Object PDO
     *@return no return
     */
    public function setBdd($bdd)
    {
        $this->bdd=$bdd;
    }

    /** Return all the vehicules in database
     *@param empty
     *@return array of objects
     */
    public function getVehicules()
    {
        $vehicules = [];
        $reponse = $this->bdd->query('SELECT * FROM vehicule');

        while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)) {
          $vehicules[] = new $donnees['type']($donnees);
        }

        return $vehicules;
    }


    /** add a vehicule in the database
     *@param int ($price) , string for the others
     *@return empty
     */
    public function addVehicule($vehicule)
    {
        $reponse=$this->bdd->prepare('INSERT INTO vehicule(type,brand,modele,immatriculation,price,description) VALUES(:type,:brand,:modele,:immatriculation,:price,:description)');
        $reponse->execute(array(
'type' => $vehicule->getType(),
'brand' => $vehicule->getBrand(),
'modele' => $vehicule->getModele(),
'immatriculation' => $vehicule->getImmatriculation(),
'price' => $vehicule->getPrice(),
'description' => $vehicule->getDescription()

  ));
    }

    /** delete a vehicule in database
     *@param int ($id)
     *@return empty
     */
    public function deleteVehicule($id)
    {
        $reponse=$this->bdd->prepare('DELETE FROM vehicule WHERE id_vehicule = :id');
        $reponse->execute(array(
      'id' => $id
    ));
    }

    /** update a vehicule in database
     *@param int ($id,$price) , string for the others
     *@return empty
     */
    public function updateVehicule($id, $type, $brand, $modele, $immatriculation, $price, $description)
    {
        $reponse=$this->bdd->prepare('UPDATE vehicule set type=:type,brand=:brand,modele=:modele,immatriculation=:immatriculation,price=:price,description=:description WHERE id_vehicule=:id');
        $reponse->execute(array(
'id' => $id,
'type' => $type,
'brand' => $brand,
'modele' => $modele,
'immatriculation' => $immatriculation,
'price' => $price,
'description' => $description

  ));
    }

    /** check if the immatriculation is already in the database
     *@param string ($immatriculation)
     *@return boolean
     */
    public function existImmatriculation($immatriculation)
    {
        $reponse= $this->bdd->prepare('SELECT COUNT(*) FROM vehicule WHERE immatriculation = :immatriculation');
        $reponse->execute([':immatriculation' => $immatriculation]);

        return (bool) $reponse->fetchColumn();
    }

    /** check if the id exist in the database
     *@param int ($id)
     *@return boolean
     */
    public function existId($id)
    {
        $reponse= $this->bdd->prepare('SELECT COUNT(*) FROM vehicule WHERE id_vehicule = :id');
        $reponse->execute([':id' => $id]);

        return (bool) $reponse->fetchColumn();
    }

    /** get the vehicule selectionned
     *@param int ($id)
     *@return object
     */
    public function getThisVehicule($id)
    {
        $reponse = $this->bdd->prepare('SELECT * FROM vehicule WHERE id_vehicule = :id');
        $reponse->execute([':id' => $id]);
        $donnees = $reponse->fetch(PDO::FETCH_ASSOC);
        $vehicule = new $donnees['type']($donnees);
        return $vehicule;
    }
}
