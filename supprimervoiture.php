<?php 
if (isset($_POST['cnx1'])){
$cin=htmlentities($_POST['tcin']);
$mat=htmlentities($_POST['mat']);
 }



@mysql_connect("localhost","root")or die("erreur");
@mysql_select_db("smart parking");
@mysql_query("DELETE FROM vehicule WHERE matricule='$mat' ") or die("erreur suppression"); 





?>


