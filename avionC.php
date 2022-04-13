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
    public function supprimerAvion($id) 
    {
        $sql = "DELETE FROM avion where id =:id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        }
        catch(Exception $e)
         {
            die('Erreur:'.$e->getMessage());
        }
      
    }
    
    function ajouterAvion($avion){
        $sql="INSERT INTO avion (id, Nom, prix, etat, choix, img1,img2,img3,img4) 
        VALUES (:id,:nom,:prix, :etat,:choix, :img1, :img2, :img3, :img4)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $avion->getId(),
                'Nom' => $avion->getNom(),
                'prix' => $avion->getPrix(),
                'etat' => $avion->getEtat(),
                'choix' => $avion->getChoix(),
                'img1' => $avion->getImg1(),
                'img2' => $avion->getImg2(),
                'img3' => $avion->getImg3(),
                'img4' => $avion->getImg4()
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

}
?>