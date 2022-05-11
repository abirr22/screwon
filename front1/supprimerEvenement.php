<?php
	include '../Controller/EvenementC.php';
	$EvenementC=new EvenementC();
	$EvenementC->supprimerEvenement($_GET["nomEvenement"]);
	header('Location:afficherListeEvenements.php');
?>