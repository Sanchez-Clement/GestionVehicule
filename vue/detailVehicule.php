<section class="card">
  <h2 class="text-center"><?php echo $vehicule->getImmatriculation() ?></h2>

  <table class="table">

    <tr>
      <th>Type</th>
      <td>
        <?php echo $vehicule->getType() ?>
      </td>
    </tr>
    <tr>
      <th>Marque</th>
      <td>
        <?php echo $vehicule->getBrand() ?>
      </td>
    </tr>
    <tr>
      <th>Modèle</th>
      <td>
        <?php echo $vehicule->getModele() ?>
      </td>
    </tr>
    <tr>
      <th>Nombre de roues</th>
      <td>
        <?php echo $vehicule->getWheels() ?>
      </td>
    </tr>
    <tr>
      <th>Prix</th>
      <td>
        <?php echo $vehicule->getPrice() ?> €</td>
    </tr>
    <tr>
      <th>Desciption</th>
      <td>
        <?php echo $vehicule->getDescription() ?>
      </td>
    </tr>
  </table>
  <div class="card-footer d-flex justify-content-around">
    <a href="../controleur/editVehicule.php?id=<?php echo $vehicule->getId() ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <a href="../controleur/deleteVehicule.php?id=<?php echo $vehicule->getId() ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>

  </div>
</section>
