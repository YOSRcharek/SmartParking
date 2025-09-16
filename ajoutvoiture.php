<?php 
if (isset($_POST['cnx1'])){
$cin=htmlentities($_POST['tcin']);
$couleur=htmlentities($_POST['couleur']);
$label=htmlentities($_POST['label']);
$marque=htmlentities($_POST['marq']);
$modele=htmlentities($_POST['mod']);
$nb=htmlentities($_POST['nb']);
$puis=htmlentities($_POST['puis']);
$mat=htmlentities($_POST['mat']);
 }



@mysql_connect("localhost","root")or die("erreur");
@mysql_select_db("smart parking");
@mysql_query("INSERT INTO vehicule VALUES ('$label','$mat','$modele','$marque','$couleur',$nb, $puis)") or die("erreur insertion"); 






?>


