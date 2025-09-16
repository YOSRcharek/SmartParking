function enregister(){
   
        document.getElementById('for').hidden=true;
        f2.hidden=false;
    
  } 
  
  function verif() {
       mail=f1.temail.value;
       pass=f1.tps.value;

    at=mail.indexOf("@");
    p=mail.indexOf(".",at+2);
    if(at==-1)||(p==-1){
        alert("verifier votre mail");
        return false;
    }
    if(pass.length <=4){
        alert("saisie votre passe");
        return false;   }
 

  }
  function verif2(){

   
       cin=f2.tcin.value;
       nom=f2.tfn.value:
       prenom=f2.tln.value;
       tel=f2.tph.value;
       mat=f2.tmat.value;
       login=f2.tlog.value;
       pass1=f2.tp.value;
  
  

    if(pass1.length<=4){
        alert("saisie votre passe");
        return false;
   }
    
    if(!alpha(nom)){
        alert("votre nom doit etre alphabetique");
        return false;
    }
   
    if(!alpha(prenom)){
        alert("votre nom doit etre alphabetique");
        return false;
    }

   if(cin.length!=8)||(isNaN(cin)){
        alert("votre cin doit de 8 num et numbre");
        return false ;
   }


   if(tel.length!=8)||(isNaN(tel)){
        alert("votre tel doit de 8 num et numbre");
        return false ;
   }
}
  



  function alpha(ch){
        for(i=0;i<=ch.length;i++){
                if(ch[i].toUpperCase()<"A"||ch[i].toUpperCase()>"Z")
                        return false;
        }
        return true;
  }





  