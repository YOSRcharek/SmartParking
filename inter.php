<!DOCTYPE html>
<html>
<head>
    <title>smart parking</title>
</head>
<link rel="stylesheet" type="text/css" href="login.css">


    <frameset rows="11.3%,*">
        <frame src="header.php">
   <frameset cols="16.3%,*">
        <frame src="section.html">
        <frame name="right" src="acceuil.html">
</frameset>
</frameset>
<?php 
@mysql_connect("localhost","root")or die("erreur");
$bdd=@mysql_select_db("smart parking");
 if (isset($_POST['cnx1'])) {
$cin=htmlentities($_POST['tcin']);
$fn=htmlentities($_POST['tfn']);
$ln=htmlentities($_POST['tln']);
$phone=htmlentities($_POST['tph']);
$matri=htmlentities($_POST['tmat']);
$login=htmlentities($_POST['tlog']);
$passe=htmlentities($_POST['tp']);}


@mysql_query("INSERT INTO client VALUES ('',$cin,'$ln','$fn','$login','$passe','$matri',$phone)") or die("erreur insertion");

if(isset($_POST['cnx'])){

$mail=htmlentities($_POST['temail']);
$mdp=htmlentities($_POST['tps']);
}
$req=$bdd->prepare("SELECT * FROM client WHERE nom_utilisateur='$mail',mot_de_passe='$mdp' ")or die("erreur selection");
$res=$req->execute();
if($res-> rowCount()>0)
{
   $data=$res->fetchAll(); 
   if(password_verify($passe, $data[0]["mot_de_passe"])){
}


}
         ?> 

</html>
