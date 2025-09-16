<? php 
if isset($_POST['cnx'])){
cin=htmlentities($_POST['tcin']);
couleur=htmlentities($_POST['couleur']);
label=htmlentities($_POST['label']);
marque=htmlentities($_POST['marq']);
modele=htmlentities($_POST['mod']);
nb=htmlentities($_POST['nb']);
puis=htmlentities($_POST['puis']);
mat=htmlentities($_POST['mat']);
 }



@mysql_connect("localhoost","root","")or die("erreur");
@mysql_select_db("smart parking");
@mysql_query("INSERT INTO vehicule VALUES ($cin,'$label','$mat','$marque','$couleur','$puis','$modele',$nb)") or die("erreur insertion");













?>