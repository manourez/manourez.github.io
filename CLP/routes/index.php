<?php include("../partials/header.php"); ?>
  <link rel="stylesheet" href="../styles/landing.css">
	<div class="container" id="diapo">
		<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
    			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  			</ol>
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      				<img class="d-block w-100" src="../pics/joie.jpg" alt="First slide" height="500px" width="500px">
      				<div class="carousel-caption d-none d-md-block">
    					<h5>Nous sommes une famille</h5>
    					<p>L'éducation chez nous se fait dans la joie</p>
  					</div>
    			</div>
    			<div class="carousel-item">
      				<img class="d-block w-100" src="../pics/administration.jpg" alt="Second slide" height="500px" width="500px">
      				<div class="carousel-caption d-none d-md-block">
    					<h5>Nous sommes rigoureux</h5>
    					<p>Parce qu'un établissement sans règle n'a pas lieu d'être</p>
  					</div>
    			</div>
    			<div class="carousel-item">
      				<img class="d-block w-100" src="../pics/cour.jpg" alt="Third slide" height="500px" width="500px">
      				<div class="carousel-caption d-none d-md-block">
    					<h5>Nous sommes unis dans le travail</h5>
    					<p>Car c'est ensemble qu'on y arrivera.</p>
  					</div>
    			</div>
  			</div>
  			 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>
	</div>

<?php include("../partials/footer.php"); ?>
