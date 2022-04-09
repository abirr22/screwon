<?php

include 'database.php'; // ..: return le dossier precedent 

class AvionC {

    public function afficherAvions()
    {
        $sql="select * from avion";
        $db=config::getconnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(exeption $e)
        {
            die('erreur:'.$e->getmessage());
        }
    }

    public function rechercherAvion($id)
    {
        $sql = "SELECT * FROM avion  where id =:id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute(); 
            return $req->fetch();
        }
        catch(Exception $e)
         {
            die('Erreur:'.$e->getMessage());
        }
      
    }



}
?>