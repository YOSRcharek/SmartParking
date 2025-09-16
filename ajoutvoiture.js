function verif (){
    cin=f.tcin.value;
    tel=f.ph.value;
    label=f.la.value;
    mat=f.mat.value;
    mar=f.mar.value;
    puis=f.puis.value;
    modele=f.mod.value;
    nbp=f.nbp.value;
    if(cin.length!=8)||(isNaN(cin)){
        alert("votre cin doit de 8 num et numbre");
        return false ;
   }
   
   if(tel.length!=8)||(isNaN(tel)){
    alert("votre cin doit de 8 num et numbre");
    return false ;

    if(!alpha(label)){
        alert("votre nom doit etre alphabetique");
        return false;
    }
}
   if()


}

function alpha(ch){
    for(i=0;i<=ch.length;i++){
            if(ch[i].toUpperCase()<"A"||ch[i].toUpperCase()>"Z")
                    return false;
    }
    return true;
}

