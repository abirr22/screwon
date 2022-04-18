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
        $sql="INSERT INTO avion (id, nom, prix, etat, choix,km, img1,img2,img3,img4) 
        VALUES (:id,:nom,:prix, :etat,:choix,:km, :img1, :img2, :img3, :img4)";
        $db = config::getConnexion(); //tjibli conx mtee bd
        try{
            
            
            
            


            $query = $db->prepare($sql); //t7adher fonction sql
            $query->execute([ //yaaml l execution mteeha 
                'id' => intval($avion->getId()),
                'nom' => $avion->getNom(),
                'prix' => intval($avion->getPrix()),
                'etat' => $avion->getEtat(),
                'choix' => $avion->getChoix(),
                'km' =>intval($avion->getKm()),
                'img1' => $avion->getImg1(),
                'img2' => $avion->getImg2(),
                'img3' => $avion->getImg3(),
                'img4' => $avion->getImg4()
            ]);	
            echo 'avion ajouter: ';		
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

}
class categorieC {

    public function afficherCategorie()
    {
        $sql="select * from categorie";
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
}
?>