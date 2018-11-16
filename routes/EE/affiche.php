<?php 
function redirect($url,$statusCode = 303)
{
    header('Location: ' . $url.'?error=1', true, $statusCode);
    die();
}
include("../../partials/header.php");
include("../../database/database.php");  

$req = $bdd->prepare('SELECT NUMERO, PASSWORD FROM admin WHERE PSEUDO = :pseudo');
$req->execute(array('pseudo' => $_POST['pseudo']));
$resultat = $req->fetch();


// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['passwd'], $resultat['PASSWORD']);

if (!$resultat)
{
    redirect('../espace.php');
}
else
{
	if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['NUMERO'];
        $_SESSION['pseudo'] = $_POST['pseudo']; ?>
        <link rel="stylesheet" href="../../styles/affiche.css">
        <div class="container">
            <div class="jumbotron">
                <div class="first list-group">
                    <a class="list-group-item list-group-item-action" href="Gerer/moncompte.php" target="ifraMe">Mon compte</a>            
                    <a class="list-group-item list-group-item-action" href="Gerer/membre.php" target="ifraMe">Ajouter un membre</a>       
                    <a class="list-group-item list-group-item-action" href="Eleve/listeE.php" target="ifraMe">Liste des élèves</a>
                    <a class="list-group-item list-group-item-action" href="Professeur/listeP.php" target="ifraMe">Liste des professeurs</a>
                    <a class="list-group-item list-group-item-action" href="Employe/listeEm.php" target="ifraMe">Liste des employés</a>
                    <a class="list-group-item list-group-item-action" href="Classe/listeC.php" target="ifraMe">Liste des classes</a>    
                    <a class="list-group-item list-group-item-action" href="Affecte/listeA.php" target="ifraMe">Liste des affectés</a>
                </div>    
            
            <div class="second">
                <form action="../logout.php" method="POST">
                    <input type="submit" id="logout" name="logout" value="Se deconnecter" class="btn btn-success">
                </form>
                <iframe id="ifraMe" src = "" scrolling="auto" name="ifraMe">
                
                </iframe>
            </div>
        </div>    
        
        </div>    
    </div>

    <script type="text/javascript" src="../../scripts/affiche.js"></script>
            
    <?php }
    else {
        redirect('../espace.php');
     }
}



$req->closeCursor(); // Termine le traitement de la requête

?>


<?php include("../../partials/footer.php"); ?>