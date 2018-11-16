<?php
session_start();
include("../../../../../database/database.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="../../../../../styles/ajouter.css">
</head>
<body>
	<h3>Vous etes connecte en tant que <?php echo $_SESSION['pseudo'] ?></h3><br /><br />

  <?php 
  
  if(isset($_POST['passwd']) && isset($_POST['nom']))
	{
	// Hachage du mot de passe
	$pass_hache = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
	
	$req = $bdd->prepare('INSERT INTO admin(PSEUDO, PASSWORD) VALUES(:pseudo, :pass)');
	$req->execute(array(
    'pseudo' => $_POST['nom'],
    'pass' => $pass_hache));
  	 
	}

  ?>
  
  <div class="alert alert-success" role="alert">
    L'admin a bien ete ajoute
  </div>

  <br />
  <br />
  <?php
  $req->closeCursor();
  ?>
  <p id="bouton"><a class="btn btn-info" href="../../membre.php">Retour</a><p>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>