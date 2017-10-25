<h1 class="text-center">Gestion de véhicules</h1>
<table class="table-hover table table-responsive" id="tablehome">
<thead >
  <th class="text-center">Type</th>
  <th class="text-center">Marque</th>
  <th class="text-center">Modèle</th>
  <th class="text-center">Immatriculation</th>
  <th class="text-center">Prix</th>
  <th class="text-center"></th>
  <th class="text-center"></th>
  <th class="text-center"></th>
</thead>
<tbody>


<?php foreach ($vehicules as $key => $vehicule) {?>


<tr class="text-center">
  <td><?php echo $vehicule->getType() ?></td>
  <td><?php echo $vehicule->getBrand() ?></td>
  <td><?php echo $vehicule->getModele() ?></td>
  <td><?php echo $vehicule->getImmatriculation() ?></td>
  <td><?php echo $vehicule->getPrice() ?></td>
  <td><a href="../controleur/detailVehicule.php?id=<?php echo $vehicule->getId() ?>">Voir détail</a></td>
  <td><a href="../controleur/editVehicule.php?id=<?php echo $vehicule->getId() ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
  <td><a href="../controleur/deleteVehicule.php?id=<?php echo $vehicule->getId() ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
</tr>
<?php } ?>
 </tbody>
</table>
