<?php

include 'database.php'; // ..: return le dossier precedent 

class AvionC {

    public function afficherAvions()
    {
        $sql="select * from avion"; //bch n3ayet l les avion l kol mel base de donné 
        $db=config::getconnexion(); // naayet l fonction getconnexion taamli conx maa base de donné
        try{
            $liste = $db->query($sql); // liste nhot feha l sql mteei 
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
            return $req->fetch(); // fetch trecuperi les ligne o trajaali un tableau enumere
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
        $req=$db->prepare($sql); //t7adher fonction sql
        $req->bindValue(':id', $id); // on a Associe une valeur à un paramètre (id)
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
                'id' => intval($avion->getId()), //intval ay chaine de caratere trodha entier
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


    function modifierAvion($avion){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                "UPDATE avion SET 
                     
                    nom = :nom, 
                    prix = :prix, 
                    etat = :etat, 
                    choix = :choix,
                    km= :km,
                    img1= :img1,
                    img2= :img2,
                    img3= :img3,
                    img4= :img4
                WHERE id= :id"
            );
            echo      $avion->getNom();
               echo $avion->getPrix();
                echo $avion->getEtat();
              echo $avion->getChoix();
               echo $avion->getKm();
                echo $avion->getImg1();
               echo $avion->getImg2();
               echo $avion->getImg3();
              echo $avion->getImg4();
               echo intval($avion->getId());
            $query->execute([
                
                'nom' => $avion->getNom(),
                'prix' => intval($avion->getPrix()),
                'etat' => $avion->getEtat(),
                'choix' => $avion->getChoix(),
                'km' => intval($avion->getKm()),
                'img1' => $avion->getImg1(),
                'img2' => $avion->getImg2(),
                'img3' => $avion->getImg3(),
                'img4' => $avion->getImg4(),
                'id' =>   intval($avion->getId()),
            ]);
            
        } catch (PDOException $e) {
       echo    $e->getMessage();
        }
    }

    function affichertrier()
    {
        $requete = "select * from avion order by nom";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result ;
        } catch (PDOException $th) {
             $th->getMessage();
        }
    }



}

class CategorieC {

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

    function ajouterCategorie($categorie){
        $sql="INSERT INTO categorie (id_categorie, nom) 
        VALUES (:id_categorie,:nom)";
        $db = config::getConnexion(); //tjibli conx mtee bd
        try{
            
            
            
            
    
    
            $query = $db->prepare($sql); //t7adher fonction sql
            $query->execute([ //yaaml l execution mteeha 
                'id_categorie' => intval($categorie->getId_categorie()),
                'nom' => $categorie->getNom(),
                
            ]);	
            echo 'categorie ajoutee: ';		
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
     function supprimerCategorie($id_categorie) 
    {
        $sql = "DELETE FROM categorie where id_categorie =:id_categorie";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_categorie', $id_categorie);
        try {
            $req->execute();
        }
        catch(Exception $e)
         {
            die('Erreur:'.$e->getMessage());
        }
      
    }
    

    function modifierCategorie($categorie){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                "UPDATE categorie SET 
                     
                    nom = :nom
                   
                WHERE id_categorie= :id_categorie"
            );
            echo      $categorie->getNom();
               
               echo intval($categorie->getId_categorie());
            $query->execute([
                
                'nom' => $categorie->getNom(),
                
                'id_categorie' =>   intval($categorie->getId_categorie()),
            ]);
            
        } catch (PDOException $e) {
       echo    $e->getMessage();
        }
    }

}



?>