
<?php
    include_once 'categorie.php';
    include_once '../avionC.php';

    $error = "";

    // create adherent
    $categorie = null;
    echo $_POST["id_categorie"]; // utilisé pour passer une variable (bch natih l id l bch ybadlou )
      
    // create an instance of the controller
    $categorieC = new CategorieC();
    $categorie = new Categorie
    (
        $_POST['id_categorie'],
        $_POST['nom']
        
    );
   //echo $_POST["id"];

   $categorieC->modifierCategorie($categorie); 
    header('Location:gestion_categorie.php'); //header permet o specifier lpage li bch yaffichili feha resulat mte code
    ?>  
    
   