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

	<form action="Reussi/messageE.php" method="POST">
		<div class="form-group row">
    		<label for="nom" class="col-sm-2 col-form-label">Nom</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de l'eleve" required="true">
    		</div>
  		</div>
  		<div class="form-group row">
    		<label for="prenoms" class="col-sm-2 col-form-label">Prenoms</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="prenoms" name="prenoms" placeholder="Prenoms de l'eleve" required="true">
    		</div>
  		</div>
  		<div class="form-group row">
    		<label for="age" class="col-sm-2 col-form-label">Age</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="age" name="age" placeholder="Age" required="true">
    		</div>
  		</div>
  		<div class="form-group row">
    		<label for="classe" class="col-sm-2 col-form-label">Numero de la classe</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="classe" name="classe" placeholder="Numero d'identifiant de la classe" required="true">
    		</div>
  		</div>
  		<div class="form-group row">
    		<label for="sexe" class="col-sm-2 col-form-label">Sexe</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="sexe" name="sexe" placeholder="Masculin ou Feminin" required="true">
    		</div>
  		</div>
  		<div class="form-group row">
    		<label for="affecte" class="col-sm-2 col-form-label">Affecte</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="affecte" name="affecte" placeholder="Entrez OUI si affecte/ NON sinon" required="true">
    		</div>
  		</div>
  		<div class="form-group row">
    		<div class="col-sm-10">
      			<button type="submit" class="btn btn-primary">Ajouter</button>
    		</div>
  		</div>
	</form>
  <p id="bouton"><a class="btn btn-info" href="../listeE.php">Retour</a><p>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>