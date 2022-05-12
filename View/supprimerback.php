<?php
    require '../Controller/reservationC.php';

    $reservationC = new reservationC();
    $reservationC->supprimerreservation($_GET['idreservation']);
    header('Location:afficherback.php');
?>