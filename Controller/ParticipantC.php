<?php
	include_once '../config.php';
	include_once '../Model/Participant.php';
	include_once '../Model/Evenement.php';
	class ParticipantC {
		public function afficheridev($idEvenement){
            try{
                $db = config::getConnexion();
                $querry = $db->prepare(
                    'SELECT * FROM evenement where idEvenement =:idEvenement'
                );
                $querry->execute([
                    'idEvenement'=>$idEvenement
                ]);
                return $querry->fetchAll();
            }catch (PDOException $e){
                $e -> getMessage();
            }
        }

		function afficherEvenPart(int $iduser)
    {   $db=config::getConnexion();
        try
        {
            $query = $pdo->prepare('select * from evenement e join participant p on e.idEvenement=p.idEvenement where iduser=:iduser');
            $query->execute([
                'iduser'=>$iduser
                ]);
            $result = $query->fetchALL();
            return $result;
        }
        catch(Exception $e)
        {
            die('erreur :'.$e->getMessage());
        }

    }

		function afficherParticipants(){
			$sql="SELECT * FROM participant";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerParticipant($idParticipant){
			$sql="DELETE FROM Participant WHERE idParticipant=:idParticipant";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idParticipant', $idParticipant);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		function ajouterParticipant($Participant){
			$sql="INSERT INTO participant (idEvenement, nomParticipant, email, numTel, adresse, genre) 
			VALUES (:idEvenement, :nomParticipant, :email,:numTel, :adresse, :genre)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'idEvenement' => $Participant->getIdEvenement(), 
					'nomParticipant' => $Participant->getNomParticipant(),
					'email' => $Participant->getEmail(),
					'numTel' => $Participant->getNumTel(),
					'adresse' => $Participant->getAdresse(),
					'genre' => $Participant->getGenre(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

        function getParticipantbyID($idParticipant)
        {
            $requete = "select * from Participant where idParticipant=:idParticipant";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'idParticipant'=>$idParticipant
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

		function recupererParticipant($idParticipant){
			$sql="SELECT * from participant where idParticipant=$idParticipant";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$participant=$query->fetch();
				return $participant;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierParticipant($participant, $idParticipant){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE participant SET  
						nomParticipant= :nomParticipant, 
						email= :email, 
						numTel= :numTel, 
						adresse= :adresse,
						genre= :genre
					WHERE idParticipant= :idParticipant'
				);
				$query->execute([
					'nomParticipant' => $participant->getnomParticipant(),
					'email' => $participant->getEmail(),
					'numTel' => $participant->getNumTel(),
					'adresse' => $participant->getAdresse(),
					'genre' => $participant->getGenre(),
					'idParticipant' => $idParticipant
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>