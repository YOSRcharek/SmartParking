
<?php 
if (isset($_POST['cnx1'])){
$cin=htmlentities($_POST['tcin']);
$date=htmlentities($_POST['dat']);
$nbp=htmlentities($_POST['nb']);
$nbj=htmlentities($_POST['duree']);
$dts=htmlentities($_POST['dts']);
$mat=htmlentities($_POST['mat']);
 }
if(nbj!=0 || nbp!=0){ 
$prix=1000*$nbj*$nbp*($dts-$date);
}
else
{
    $prix=1000*($dts-$date);
}
@mysql_connect("localhost","root")or die("erreur");
@mysql_select_db("smart parking");
@mysql_query("INSERT INTO reservation VALUES ('','$date','$dts','$nbp','$nbj',$prix)") or die("erreur insertion"); 
@mysql_query("INSERT INTO  client VALUES('$cin',    ,'$mat') ")or die("erreur insertion"); 





?>















