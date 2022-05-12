<?php
    require '../Controller/staffC.php';

    $staffC = new staffC();
    $staffC->supprimerstaff($_GET['idstaff']);
    header('Location:afficherstaff.php');
?>