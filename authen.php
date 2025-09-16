
<?php
try
{
	
    $bdd = new PDO('mysql:host=localhost;dbname=smart parking;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch(Exception $e)
{

        die('Erreur : '.$e->getMessage());
}



$req = $bdd->prepare('SELECT nom , prénom FROM client WHERE nom_utilisateur = ? AND mot_de_passe= ? ');

$req->execute(array($_POST['temail'], $_POST['tps']));

echo '<ul>';
while ($donnees = $req->fetch())
{

    echo '<li>' . $donnees['nom'] . ' ' . $donnees['prénom'] . ' </li>';
}

  echo '</ul>';
$req->closeCursor();

?>
