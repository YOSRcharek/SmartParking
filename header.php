<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
 
</head>
<?php  
 $nom=isset($_SESSION['nom'])? $_SESSION['nom'] :'';
 $prenom=isset($_SESSION['prenom'])? $_SESSION['prenom'] :'';


 ?>
<link rel="stylesheet" type="text/css" href="login.css">
<body>
	<form method="post" action="login.php">
<header>
	<img src="smart-parking logo.png" width="80px" height="80px">

<div style="float:right ;clear:center ;">
	<img src="userlog.jpg" float="center" width="60px" height="60px">
	<br>
	
	<input type="text" name="t1" >
	
</div><?php  
	     echo " $login ";

	?>
</header>
</form>
</body>
</html>