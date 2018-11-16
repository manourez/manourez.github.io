<?php include("../partials/header.php"); ?>

<?php include("../database/database.php"); ?>

<link rel="stylesheet" href="../styles/espace.css">

<div class='container' id="cont1">
	<?php
	
	if(isset($_GET['error']) && $_GET['error'] == 1){ ?>
        <div id="error" class="alert alert-danger" role="alert">Assurez vous que vos identifiants sont corrects!</div>
	<?php  }
	elseif (isset($_GET['message']) && $_GET['message'] == 1) { ?>
		<div id="error" class="alert alert-success">Vous avez bien été déconnecté(e)!!</div>
	<?php } ?>
	
	<div class="row">
		<div class="col">
			<img src='../pics/logo.png' class='img-thumbnail' alt=''>
		</div>

		<div class="col" id="cont2">
			<h1>Se connecter</h1>
			<div id="form">
				<form method="POST" action="EE/affiche.php">
					<div class="form-group row">
						<label for="pseudo" class="col-sm-2 col-form-label">Pseudo: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="pseudo" placeholder="Entrez votre pseudo" id="pseudo"/><br />
						</div>
					</div>
					<div class="form-group row">
						<label for="passwd" class="col-sm-2 col-form-label">Mdp: </label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="passwd" placeholder="Mot de passe" id="passwd"><br />
						</div>
					</div>
					<div style="text-align: center;">
						<input type="submit" name="login" value="Se connecter" id="conn" class="btn btn-success"/>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>

	
	

<script type="text/javascript" src="../scripts/espace.js"></script>


<?php include("../partials/footer.php"); ?>