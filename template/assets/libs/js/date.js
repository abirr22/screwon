
 function verifierdate()
        {
        var temps= new Date();
        var jour= temps.getDate();
        var mois=temps.getMonth();
        var annee=temps.getFullYear();
        var d = new Date(document.f.dateEvenement.value);
        var j= d.getDate();
        var m= d.getMonth()+1;
        var a= d.getFullYear();
        if(a-annee<=0)
        {
        if(m-(mois+1)<=0)
        {if(m-(mois+1)<0){element.style.backgroundColor="red";
        element.focus();
        document.getElementById("id1").innerHTML="erreur";}
        else{if(j-jour<0)
        {document.getElementById("id1").innerHTML="erreur";
        element.style.backgroundColor="red";
        element.focus();}
        else{ element.style.backgroundColor="white";
        document.getElementById("id1").innerHTML="";}
        }}
    }}
    document.getElementById("dateEvenement").addEventListener("change",verifierdate)
