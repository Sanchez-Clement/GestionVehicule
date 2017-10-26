<form class="row justify-content-around" action="addVehicule.php" method="post">


  <h3 class="col-12 text-center mt-3">Ajouter un véhicule</h3>

  <div class="form-group col-md-3">
    <label for="type">Type</label>

      <select class="form-control" name="type" id="type">
        <option value="Camion" >Camion</option>
        <option value="Moto">Moto</option>
        <option value="Voiture" >Voiture</option>
      </select>
  </div>

  <div class="form-group col-md-7">
    <label for="marque">Marque</label>
    <input class="form-control" type="text" name="marque" id="marque" value="" required>
  </div>

  <div class="form-group col-md-5">
    <label for="modele">Modele</label>
    <input class="form-control" type="text" name="modele" id="modele" value="" required>
  </div>

  <div class="form-group col-md-5">
    <label for="immatriculation">Immatriculation</label>
    <input class="form-control" type="text" name="immatriculation" id="immatriculation" value="" required>
    <small id="immat" class="form-text text-muted col-12 text-center">Immatriculation de type : AH-303-LQ</small>
  </div>

  <div class="form-group col-md-7">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" required></textarea>
  </div>

  <div class="form-group col-md-3">
    <label for="prix">Prix</label>
    <input class="form-control" type="number" name="prix" id="prix" value="" required>
  </div>

  <!-- if there are errors in the form (input empty or the immatriicualtion is already in the database) -->
  <?php if(!empty($error)){?>
  <small id="emailHelp" class="form-text text-muted col-12 text-center"><?php echo $error ?></small>
  <?php } ?>

    <div class="col-md-3 d-flex justify-content-around">
      <input type="submit" name="creer" value="Ajouter">
    </div>

</form>
