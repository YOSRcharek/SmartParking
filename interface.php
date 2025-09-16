
<?php  
$cin =$_POST['tcin'];
$fn=$_POST['tfn'];
$ln=$_POST['tln'];
$phone=$_POST['tph'];
$matri=$_POST['tmat'];
$login=$_POST['tlog'];
$passe=$_POST['tp'];}


$bd=mysqli_connect("localhost","root","");
mysqli_select_db($bd,"smart parking");

$req="INSERT INTO  client (cin,nom,prénom,nom utilisateur,mot_de_passe,matricule,telephone) VALUES ($cin,'$ln','$fn','$login','$passe','$matri',$phone)";
mysqli_query($bd,$req);   


         ?> 
