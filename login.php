<?php         
 


$mail=htmlentities($_POST['temail']);
$mdp=htmlentities($_POST['tps']);}
@mysql_connect("localhost","root")or die("erreur");
@mysql_select_db("smart parking");


$req=@mysql_query("SELECT nom prenom FROM client WHERE  email=$email and password=$mdp  ") or die("erreur selection");
$res=@mysql_num_rows($req);
if($res==0){
        alert("vous n'etes pas inscrit dans notre base de données");
}
else{
$_POST['t1']=$res;
}




         ?> 

   