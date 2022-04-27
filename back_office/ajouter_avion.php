<?php
    include_once 'avion.php';
    include_once '../avionC.php';

    $error = "";

    // create adherent
    $avion = null;

    // create an instance of the controller
    $avionC = new avionC();
    if (
        isset($_POST["id"]) &&   //isset verifier si l'attribut definie ou pas
		isset($_POST["nom"]) &&		//post tebath les champs mtee formulaire 
        isset($_POST["prix"]) &&
		isset($_POST["etat"]) && 
        isset($_POST["choix"]) &&
        isset($_POST["km"]) && 
        isset($_POST["img1"])&&
        isset($_POST["img2"])&&
        isset($_POST["img3"])&&
        isset($_POST["img4"])
    ) {
        if (
            !empty($_POST["id"]) &&  // empty verifie si la valeur est vide ou pas 
			!empty($_POST['nom']) &&
            !empty($_POST["prix"]) && 
			!empty($_POST["etat"]) && 
            !empty($_POST["choix"]) && 
            !empty($_POST["km"]) && 
            !empty($_POST["img1"])&&
            !empty($_POST["img2"])&&
            !empty($_POST["img3"])&&
            !empty($_POST["img4"])
        ) {
            $avion = new avion( //nouveau objet avion o 3amar les champs mteei 
                $_POST['id'],
				$_POST['nom'],
                $_POST['prix'], 
				$_POST['etat'],
                $_POST['choix'],
                $_POST['km'],
                $_POST['img1'],
                $_POST['img2'],
                $_POST['img3'],
                $_POST['img4']
            );
            $avionC->ajouterAvion($avion); //3ayat l fonction ajouteravvion li heya mawjouda f avionc o 3aditlha variable avion 
            header('Location:gestion_avion.php'); // redirection (tbadali l'url ) thezni l page gestion avion 

        }
        else
            $error = "Missing information";
    }

    
?>
