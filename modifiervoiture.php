<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="ajoutparking.css">
<?php  
   if (isset($_POST['cnx1'])){
$cin=htmlentities($_POST['tcin']);
$mat=htmlentities($_POST['mat']);
 }

@mysql_connect("localhost","root")or die("erreur");
@mysql_select_db("smart parking");
@mysql_query("SELECT * FROM vehicule WHERE  matricule= '$mat' ") or die("erreur suppression"); 


   ?>
echo " <body>

<div class='box'> 

  <form name='f' method='post' action='modifiervoiture.php'>
    <h1 >modifier voiture </h1>
    <div class='txt'>
      <input type="text" name="tcin"  required>
     <span></span>
    <label>CIN:</label>
     </div>
        <div class="txt">
      <input type="text" name="mat" required>
     <span></span>
      <label>Matricule:</label>
     </div>
        <input type="submit" value="Modifier"name="cnx1" onclick="modifier()"> 
         <input type="submit" value="Annuler"name="cnx"> 
  </form>
</body>
</html>";


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
@mysql_query("UPDATE vehicule ('$label','$mat','$modele','$marque','$couleur',$nb, $puis)") or die("erreur insertion"); 












?>

</body>
</html>