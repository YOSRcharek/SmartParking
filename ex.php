<?php  

@mysql_connect("localhost","root")or die("erreur");
$bdd=@mysql_select_db("smart parking");

if(isset($_POST['cnx'])){

    $mail=htmlentities($_POST['temail']);
    $mdp=htmlentities($_POST['tps']);
    }
    $req=@mysql_query("SELECT * FROM client WHERE nom_utilisateur='$mail',mot_de_passe='$mdp' ")or die("erreur selection");
    
?>