<?php

    require_once '../Assets/Utils/config.php';
    require_once '../Model/staff.php';


    Class staffC {
    
        function afficherstaff()
        {
            $requete = "select * from staff";
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


        function afficherstafft()
        {
            $requete = "select * from staff order by nom";
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

        public function afficherbyname($namerecherche)
        {
            try {
                $db = config::getConnexion();
    
                $querry = $db->prepare('select * from staff where nom like "%'.$namerecherche.'%"');
                $querry->execute();
                $result = $querry->fetchAll();
                return $result;
            } catch (PDOException $th) {
                $th->getMessage();
            }
        }

        function getstaffbyID($idstaff)
        {
            $requete = "select * from staff where idstaff=:idstaff";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'idstaff'=>$idstaff
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ajouterstaff($staff)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO staff
                (idstaff,nom,prenom,job,dispo,idreservation)
                VALUES
                (:idstaff,:nom,:prenom,:job,:dispo,:idreservation)
                ');
                $querry->execute([
                    'idstaff'=>$staff->getidstaff(),
                    'nom'=>$staff->getnom(),
                    'prenom'=>$staff->getprenom(),
                    'job'=>$staff->getjob(),
                    'dispo'=>$staff->getdispo(),
                    'idreservation'=>$staff->getidreservation(),
          
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierstaff($staff)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE staff SET
                nom=:nom,
               prenom=:prenom,
                job=:job,
                dispo=:dispo,
                idreservation=:idreservation
                where idstaff=:idstaff
                ');
                $querry->execute([
                    'idstaff'=>$staff->getidstaff(),
                    'nom'=>$staff->getnom(),
                    'prenom'=>$staff->getprenom(),
                    'job'=>$staff->getjob(),
                    'dispo'=>$staff->getdispo(),
                    'idreservation'=>$staff->getidreservation(),

                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerstaff($idstaff)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM staff WHERE idstaff =:idstaff
                ');
                $querry->execute([
                    'idstaff'=>$idstaff
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
    }

?>