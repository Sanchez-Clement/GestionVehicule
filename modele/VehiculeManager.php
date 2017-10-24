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
          $vehicules[]= new Camion($donnes);
          break;

        default:

          break;
      }
    }

    return $vehicules;
  }
}

 ?>
