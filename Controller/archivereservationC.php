<?php

    require_once '../Assets/Utils/config.php';



    Class archiveC {
        public function afficherbyname($namerecherche)
        {
            try {
                $db = config::getConnexion();
    
                $querry = $db->prepare('select * from archivereservation where nom like "%'.$namerecherche.'%"');
                $querry->execute();
                $result = $querry->fetchAll();
                return $result;
            } catch (PDOException $th) {
                $th->getMessage();
            }
        }

    
        function afficherarchivereservation()
        {
            $requete = "select * from archivereservation";
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

        function affichertrier()
        {
            $requete = "select * from archivereservation order by nom";
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


       

        function getarchivereservationbyID($idreservation)
        {
            $requete = "select * from archivereservation where idreservation=:idreservation";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'idreservation'=>$idreservation
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ajouterarchivereservation($reservation)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO archivereservation
                (idreservation,nom,prenom,email,cin,num,poste,destination,depart,retour,staff,id)
                VALUES
                (:idreservation,:nom,:prenom,:email,:cin,:num,:poste,:destination,:depart,:retour,:staff,:id)
                ');
                $querry->execute([
                    'idreservation'=>$reservation->getidreservation(),
                    'nom'=>$reservation->getnom(),
                    'prenom'=>$reservation->getprenom(),
                    'email'=>$reservation->getemail(),
                    'cin'=>$reservation->getcin(),
                    'num'=>$reservation->getnum(),
                    'poste'=>$reservation->getposte(),
                    'destination'=>$reservation->getdestination(),
                    'depart'=>$reservation->getdepart(),
                    'retour'=>$reservation->getretour(),
                    'staff'=>$reservation->getstaff(),
                    'id'=>$reservation->getid(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierreservation($reservation)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE reservation SET
                nom=:nom,
               prenom=:prenom,
                email=:email,
                cin=:cin,
                num=:num,
                poste=:poste,
                destination=:destination,
                depart=:depart,
                retour=:retour,
                staff=:staff,
                id=:id
                where idreservation=:idreservation
                ');
                $querry->execute([
                    'idreservation'=>$reservation->getidreservation(),
                    'nom'=>$reservation->getnom(),
                    'prenom'=>$reservation->getprenom(),
                    'email'=>$reservation->getemail(),
                    'cin'=>$reservation->getcin(),
                    'num'=>$reservation->getnum(),
                    'poste'=>$reservation->getposte(),
                    'destination'=>$reservation->getdestination(),
                    'depart'=>$reservation->getdepart(),
                    'retour'=>$reservation->getretour(),
                    'staff'=>$reservation->getstaff(),
                    'id'=>$reservation->getid(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerarchivereservation($idreservation)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM archivereservation WHERE idreservation =:idreservation
                ');
                $querry->execute([
                    'idreservation'=>$idreservation
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
    }

?>