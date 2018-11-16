<?php
session_start();
include("../../../database/database.php");
$reponse = $bdd->query('SELECT p.NUMERO num_professeur, p.NOM nom_professeur, p.PRENOMS prenom_professeur, p.MATIERE matiere_professeur, p.TELEPHONE telephone_professeur, p.SALAIRE salaire_professeur, c.TYPE contrat_type
FROM contrat c
INNER JOIN professeur p
ON p.CONTRAT = c.NUMERO');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="../../../styles/listeE.css">
</head>
<body>
	<h3>Vous etes connecte en tant que <?php echo $_SESSION['pseudo'] ?></h3><br /><br />
	<form action="Gerer/trouverProf.php" method="POST">
		<label for="recherche">Tapez le nom du professeur:</label>
		<input type="text" name="recherche">
		<input type="submit" value="Rechercher" class="btn btn-warning">
	</form>
	<table class="table table-striped table-bordered table-dark">
		<thead>
			<td scope="col">NUMERO</td>
			<td scope="col">NOM</td>
			<td scope="col">PRENOMS</td>
			<td scope="col">MATIERE</td>
			<td scope="col">CONTRAT</td>
			<td scope="col">TELEPHONE</td>
			<td scope="col">SALAIRE</td>
			<td scope="col">ACTION</td>
		</thead>
		<?php

		while ($donnees = $reponse->fetch())
		{?>
			<tbody>
			<tr>
				<th scope="row"><?php echo $donnees['num_professeur'] ?></th>
				<td><?php echo $donnees['nom_professeur'] ?></td>
				<td><?php echo $donnees['prenom_professeur'] ?></td>
				<td><?php echo $donnees['matiere_professeur'] ?></td>
				<td><?php echo $donnees['contrat_type'] ?></td>
				<td><?php echo $donnees['telephone_professeur'] ?></td>
				<td><?php echo $donnees['salaire_professeur'] ?></td>
				<td>
					<a class="btn btn-primary" href="Gerer/modifierProf.php?NUMERO=<?php echo $donnees['num_professeur'] ?>">Modifier</a>
					<a class="btn btn-danger" href="Gerer/supprimerProf.php?NUMERO=<?php echo $donnees['num_professeur'] ?>">Supprimer</a>
				</td>
			</tr>
			</tbody>
		<?php }

		$reponse->closeCursor();
		?>
	</table>
	<br />
	<br />

	<p id="ajouter"><a class="btn btn-success" href="Gerer/ajouterProf.php">Ajouter un professeur</a><p>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>