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
  public function getVehicules(){
    $vehicules = [];
    $reponse = $this->bdd->query('SELECT * FROM vehicule');

    while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)) {
      switch ($donnees['type']) {
        case 'Moto':
          $vehicules[]= new Moto($donnees);
          break;

        case 'Voiture':
          $vehicules[]= new Voiture($donnees);
          break;

        case 'Camion':
          $vehicules[]= new Camion($donnees);
          break;

        default:

          break;
      }
    }

    return $vehicules;
  }

  public function addVehicule($type,$brand,$modele,$immatriculation,$price,$description) {
    $reponse=$this->bdd->prepare('INSERT INTO vehicule(type,brand,modele,immatriculation,price,description) VALUES(:type,:brand,:modele,:immatriculation,:price,:description)');
    $reponse->execute(array(
'type' => $type,
'brand' => $brand,
'modele' => $modele,
'immatriculation' => $immatriculation,
'price' => $price,
'description' => $description

  ));
  }

  public function deleteVehicule($id) {
    $reponse=$this->bdd->prepare('DELETE FROM vehicule WHERE id_vehicule = :id');
    $reponse->execute(array (
      'id' => $id
    ));
  }

  public function updateVehicule($id,$type,$brand,$modele,$immatriculation,$price,$description) {
    $reponse=$this->bdd->prepare('UPDATE vehicule set type=:type,brand=:brand,modele=:modele,immatriculation=:immatriculation,price=:price,decription=:description WHERE id_vehicule=:id');
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

  public function existImmatriculation($immatriculation) {
    $reponse= $this->bdd->prepare('SELECT COUNT(*) FROM vehicule WHERE immatriculation = :immatriculation');
 $reponse->execute([':immatriculation' => $immatriculation]);

 return (bool) $reponse->fetchColumn();
  }

  public function existId($id) {
    $reponse= $this->bdd->prepare('SELECT COUNT(*) FROM vehicule WHERE id_vehicule = :id');
 $reponse->execute([':id' => $id]);

 return (bool) $reponse->fetchColumn();
  }

  public function getThisVehicule($id) {
    $reponse = $this->bdd->prepare('SELECT * FROM vehicule WHERE id_vehicule = :id');
    $reponse->execute([':id' => $id]);
    $donnees = $reponse->fetch(PDO::FETCH_ASSOC);
    $vehicule = new $donnees['type']($donnees);
    return $vehicule;
  }
}

 ?>
