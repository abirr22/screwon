<?php 
include '../avionC.php';
$categorieC=new CategorieC() ;
$categorieC->supprimerCategorie($_GET["id-categorie"]); //$GET (yekhou l adherent selon son numadherent) 
header('Location:gestion_categorie.php'); 
?>