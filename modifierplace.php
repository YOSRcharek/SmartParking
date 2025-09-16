<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="reserveplace.css">
 <? php 

@mysql_connect("localhoost","root","")or die("erreur");
@mysql_select_db("smart parking");

if isset($_POST['cnx'])){
cin=htmlentities($_POST['tcin']);
code=htmlentities($_POST['cr']);


 }
@mysql_query("SELECT * FROM reservation WHERE code reservation ='$code' ") or die("erreur selection");



echo "<body>
<div class='box'> 

  <form name='f' method='post' action='reserveplace.php'>
    <h1 >Réserver une place </h1>
    <div class='txt'>
      <input type='text' name='tcin' required>
     <span></span>
    <label>CIN:</label>
     </div>

     <div class='txt'>
      <input type='time' name='dat'>
       <span></span>
      <label>heure d'entrée :</label>
     </div>
      <div class='txt'>
    <input type='time' name='dts' required>
     <span></span>
    <label>heure de sortie :</label>
     </div>
      <div class='txt'>
      <input type='text' name='nb' required>
     <span></span>
      <label>Nombre de place à réserver:</label>
     </div>
      <div class='txt'>
      <input type='text'name='duree' required>
     <span></span>
      <label>Nb jour :</label>
     </div>
       
     <div class='txt'>
      <input type='text' name='mat' required>
     <span></span>
      <label>Matricule:</label>
     </div>  
        <input type='submit' value='réserver'name='cnx1' onclick='réserver()'> 
         <input type='submit' value='annuler'name='cnx'> 
   </form>
 </div> ";

if (isset($_POST['cnx1'])){
$cin=htmlentities($_POST['tcin']);
$date=htmlentities($_POST['dat']);
$nbp=htmlentities($_POST['nb']);
$nbj=htmlentities($_POST['duree']);
$dts=htmlentities($_POST['dts']);
$mat=htmlentities($_POST['mat']);
 $
}
@mysql_query("UPDATE reservation SET ($date,$dts,$nbp,$nbj,$prix) WHERE code reservation =$code") or die("erreur modification");







?>
</body>
</html>