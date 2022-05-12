

<?php
   require '../Controller/archivereservationC.php';
   require_once     '../Controller/reservationC.php';
   require_once '../Model/reservation.php' ;

   $reservationC = new reservationC();
   $matier = $reservationC->getreservationbyID($_GET['idreservation']);

 if (!empty($matier))
 {
     $idreservation=$_GET['idreservation'];
    $reservation = new reservation($matier['idreservation'],$matier['nom'] , $matier['prenom'] , $matier['email'], $matier['cin'] , $matier['num'], $matier['poste'], $matier['destination'], $matier['depart'], $matier['retour'], $matier['staff'], $matier['id']  );
     $archiveC=new archiveC();
     $archiveC->ajouterarchivereservation($reservation);
 header("Location:supprimerback.php?idreservation=$idreservation");
 }


?>