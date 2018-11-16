<?php
session_start();
include("../../../../database/database.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../../../../styles/ajouterEleve.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<h3>Vous etes connecte en tant que <?php echo $_SESSION['pseudo'] ?></h3><br /><br />

	<form action="Reussi/messageY.php" method="POST">
		<div class="form-group row">
    		<label for="nom" class="col-sm-2 col-form-label">Nom</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de l'employe" required="true">
    		</div>
  		</div>
  		<div class="form-group row">
    		<label for="prenoms" class="col-sm-2 col-form-label">Prenoms</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="prenoms" name="prenoms" placeholder="Prenoms de l'employe" required="true">
    		</div>
  		</div>
  		<div class="form-group row">
    		<label for="fonction" class="col-sm-2 col-form-label">Fonction</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="fonction" name="fonction" placeholder="Fonction" required="true">
    		</div>
  		</div>
  		<div class="form-group row">
    		<label for="contrat" class="col-sm-2 col-form-label">Type de contrat</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="contrat" name="contrat" placeholder="Type de contrat(1 ou 2)" required="true">
    		</div>
  		</div>
  		<div class="form-group row">
    		<label for="telephone" class="col-sm-2 col-form-label">Telephone</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="telephone" name="telephone" placeholder="Numero de telephone" required="true">
    		</div>
  		</div>
  		<div class="form-group row">
    		<label for="salaire" class="col-sm-2 col-form-label">Salaire</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="salaire" name="salaire" placeholder="Salaire" required="true">
    		</div>
  		</div>
  		<div class="form-group row">
    		<div class="col-sm-10">
      			<button type="submit" class="btn btn-primary">Ajouter</button>
    		</div>
  		</div>
	</form>
  <p id="bouton"><a class="btn btn-info" href="../listeEm.php">Retour</a><p>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>