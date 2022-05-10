<?php 
include '../Controller/avionC.php';
$avionC=new avionC() ;
$avionC->supprimerAvion($_GET["id"]); //$GET (yekhou l adherent selon son numadherent) 
header('Location:gestion_avion.php'); //header(affiche de nouveau le tableau apres la suppression)




?>
