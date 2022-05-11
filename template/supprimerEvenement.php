<?php
	include '../Controller/EvenementC.php';
	$EvenementC=new EvenementC();
	$EvenementC->supprimerEvenement($_GET["idEvenement"]);
	header('Location:afficherListeEvenements.php');
?>