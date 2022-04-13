<?php 
include '../avionC.php';
$avionC=new avionC() ;
$avionC->supprimerAvion($_GET["id"]); //$GET (yekhou l adherent selon son numadherent) 
header('Location:back.php'); //header(affiche de nouveau le tableau apres la suppression)
?>