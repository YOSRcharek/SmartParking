
<?php 
if (isset($_POST['cnx1'])){
$cin=htmlentities($_POST['tcin']);
$cr=htmlentities($_POST['mat']);
 }

@mysql_connect("localhost","root")or die("erreur");
@mysql_select_db("smart parking");
@mysql_query("DELETE FROM reservation WHERE `reservation`.`code reservation` = '$cr' ") or die("erreur suppression"); 





?>















