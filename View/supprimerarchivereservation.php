<?php
    require '../Controller/archivereservationC.php';

    $archiveC = new archiveC();
    $archiveC->supprimerarchivereservation($_GET['idreservation']);
 header('Location:afficherarchivereservation.php'); 
?>  