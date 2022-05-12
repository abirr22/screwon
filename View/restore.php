

<?php
   require_once   '../Controller/archivereservationC.php';
   require_once     '../Controller/reservationC.php';
   require_once '../Model/reservation.php' ;

  




   if (isset($_GET['idreservation'] )) 
 {
  $s = new reservationC();
  $reservationC = new archiveC();
  $matier=$reservationC->getarchivereservationbyID($_GET['idreservation']);
     $idreservation=$_GET['idreservation'];
     var_dump($matier);
    $reservation = new reservation($matier['idreservation'],$matier['nom'] , $matier['prenom'] , $matier['email'], $matier['cin'] , $matier['num'], $matier['poste'], $matier['destination'], $matier['depart'], $matier['retour'], $matier['staff'], $matier['id']);
     $s->ajouterreservation($reservation);
 header("Location:supprimerarchivereservation.php?idreservation=$idreservation");
 }


?>