<form class="row justify-content-around" action="editVehicule.php?id=<?php echo $vehicule->getId() ?>" method="post">
<h3 class="col-12 text-center mt-3">Editer un véhicule</h3>
  <div class="form-group col-md-3">
<label for="type">Type</label>
<select class="form-control" name="type" id="type">

  <option value="Camion" <?php if($vehicule->getType() == "Camion") {echo "selected";} ?>>Camion</option>
  <option value="Moto"<?php if($vehicule->getType() == "Moto") {echo "selected";} ?>>Moto</option>
  <option value="Voiture" <?php if($vehicule->getType() == "Voiture") {echo "selected";} ?>>Voiture</option>
</select>
  </div>
  <div class="form-group col-md-7">
<label for="marque">Marque</label>
<input class="form-control" type="text" name="marque" id="marque" value="<?php echo $vehicule->getBrand() ?>" required>
  </div>
  <div class="form-group col-md-5">
<label for="modele">Modele</label>
<input class="form-control" type="text" name="modele" id="modele" value="<?php echo $vehicule->getModele() ?>" required>
  </div>
  <div class="form-group col-md-5">
<label for="immatriculation">Immatriculation</label>
<input class="form-control" type="text" name="immatriculation" id="immatriculation" value="<?php echo $vehicule->getImmatriculation() ?>" required>
  </div>
  <div class="form-group col-md-7">
<label for="description">Description</label>
<textarea class="form-control" name="description" id="description" required><?php echo $vehicule->getDescription() ?></textarea>

  </div>
  <div class="form-group col-md-3">
<label for="prix">Prix</label>
<input class="form-control" type="number" name="prix" id="prix" value="<?php echo $vehicule->getPrice() ?>" required>
  </div>
  <?php if(!empty($error)){?>
  <small id="emailHelp" class="form-text text-muted col-12 text-center"><?php echo $error ?></small>
    <?php
  } ?>
  <div class="col-md-3 d-flex justify-content-around">


  <input type="submit" name="modifier" value="Modifier">
  </div>

</form>
