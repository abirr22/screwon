<?php 
include '../avionC.php';
$categorieC=new CategorieC() ;
$categorieC->supprimerCategorie($_GET["id-categorie"]); //$GET (yekhou l categorie  selon son id ) 
header('Location:gestion_categorie.php'); 
?>