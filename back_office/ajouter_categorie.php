<?php
    include_once 'categorie.php';
    include_once '../avionC.php';

    $error = "";

    // create adherent
    $categorie = null;

    // create an instance of the controller
    $categorieC = new categorieC();
    if (
        isset($_POST["id-categorie"]) &&   //isset verifier si l'attribut definie ou pas
		isset($_POST["nom"]) 	//post tebath les champs mtee formulaire 
        
    ) {
        if (
            !empty($_POST["id-categorie"]) &&  // empty verifie si la valeur est vide ou pas 
			!empty($_POST['nom'])
            
        ) {
            $categorie = new categorie( //nouveau objet avion o 3amar les champs mteei 
                $_POST['id-categorie'],
				$_POST['nom'],
               
            );
            $categorieC->ajouterCategorie($categorie); //3ayat l fonction ajouteravvion li heya mawjouda f avionc o 3aditlha variable avion 
            header('Location:gestion_categorie.php'); // redirection (tbadali l'url )
        }
        else
            $error = "Missing information";
    }

    
?>
