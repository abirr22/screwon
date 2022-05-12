
function allLetter(word) {
    var letters = /^[A-Za-z]+$/;
    if (word.match(letters)) {
        return true;
    }
    else {
        return false;
    }
}
function verif() {

    var num=document.getElementById("num").value;
    if (num.length != 8) {
        alert("check num");
        return false;
    }

    
        
    
    
 
  



    let nom = document.getElementById("nom").value;
    let prenom = document.getElementById("prenom").value;
    if (document.getElementById("nom").value == false) {
        alert("vide");
    }

    if (allLetter(nom) === false) {
        alert("check nom");
        return false;
      
    }
    if (document.getElementById("prenom").value == false) {
        alert("vide");
    }

    if (allLetter(prenom) === false) {
        alert("check prenom");
        return false;
    
    }
    return true;
}

