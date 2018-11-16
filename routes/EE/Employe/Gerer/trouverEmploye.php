<?php
session_start();
include("../../../../database/database.php");
$reponse = $bdd->prepare('SELECT a.NUMERO num_administration, a.NOM nom_administration, a.PRENOMS prenom_administration, a.FONCTION fonction_administration, a.TELEPHONE telephone_administration, a.SALAIRE salaire_administration, c.TYPE contrat_type
FROM contrat c
INNER JOIN administration a
ON a.CONTRAT = c.NUMERO
WHERE a.NOM = :nom');

$reponse->execute(array('nom' => $_POST['recherche']));

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="../../../../styles/listeE.css">
</head>
<body>
	<h3>Vous etes connecte en tant que <?php echo $_SESSION['pseudo'] ?></h3><br /><br />
	
	<table class="table table-striped table-bordered table-dark">
		<thead>
			<td scope="col">NUMERO</td>
			<td scope="col">NOM</td>
			<td scope="col">PRENOMS</td>
			<td scope="col">FONCTION</td>
			<td scope="col">CONTRAT</td>
			<td scope="col">TELEPHONE</td>
			<td scope="col">SALAIRE</td>
		</thead>
		<?php

		while ($donnees = $reponse->fetch())
		{?>
			<tbody>
			<tr>
				<th scope="row"><?php echo $donnees['num_administration'] ?></th>
				<td><?php echo $donnees['nom_administration'] ?></td>
				<td><?php echo $donnees['prenom_administration'] ?></td>
				<td><?php echo $donnees['fonction_administration'] ?></td>
				<td><?php echo $donnees['contrat_type'] ?></td>
				<td><?php echo $donnees['telephone_administration'] ?></td>
				<td><?php echo $donnees['salaire_administration'] ?></td>
			</tr>
			</tbody>

		<?php }

		$reponse->closeCursor();
		?>
	</table>
	<br />
	<br />

	<p id="ajouter"><a class="btn btn-info" href="../listeEm.php">Retour</a><p>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>