<?php
    include_once 'avion.php';
    include_once '../avionC.php';

    $error = "";

    // create adherent
    $avion = null;
    echo $_POST["id"];
   
       echo  $_POST['nom'];
       echo  $_POST['prix']; 
       echo  $_POST['etat'];
       echo  $_POST['choix'];
       echo  $_POST['km'];
        echo $_POST['img1'];
       echo  $_POST['img2'];
       echo  $_POST['img3'];
       echo  $_POST['img4'];
    // create an instance of the controller
    $avionC = new AvionC();
    $avion = new Avion(
        $_POST['id'],
        $_POST['nom'],
        $_POST['prix'], 
        $_POST['etat'],
        $_POST['choix'],
        $_POST['km'],
        $_POST['img1'],
        $_POST['img2'],
        $_POST['img3'],
        $_POST['img4']
    );
   //echo $_POST["id"];
   $avionC->modifierAvion($avion);
    header('Location:gestion_avion.php');
    ?>  
    
   