<?php
	include '../Controller/ParticipantC.php';
	$ParticipantC=new ParticipantC();
	$ParticipantC->supprimerParticipant($_GET["idParticipant"]);
	header('Location:afficherListeParticipants.php');
?>