<?php
	include_once '../config.php';
	include_once '../Model/Evenement.php';
	class EvenementC {
		function afficherEvenements(){
			$sql="SELECT * FROM evenement";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerEvenement($idEvenement){
			$sql="DELETE FROM evenement WHERE idEvenement=:idEvenement";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idEvenement', $idEvenement);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		function ajouterEvenement($Evenement){
			$sql="INSERT INTO evenement (nomEvenement, descriptionEvenement, prix, temps, dateEvenement, img) 
			VALUES (:nomEvenement,:descriptionEvenement, :prix,:temps, :dateEvenement, :img)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'nomEvenement' => $Evenement->getNomEvenement(),
					'descriptionEvenement' => $Evenement->getDescriptionEvenement(),
					'prix' => $Evenement->getPrix(),
					'temps' => $Evenement->getTemps(),
					'dateEvenement' => $Evenement->getDateEvenement(),
					'img' => $Evenement->getImg(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function getevenementbyID($idEvenement)
        {
            $requete = "select * from evenement where idEvenement=:idEvenement";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'idEvenement'=>$idEvenement
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
		
		function modifierEvenement($Evenement, $idEvenement){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE evenement SET  
					    nomEvenement= :nomEvenement,
						descriptionEvenement= :descriptionEvenement, 
						prix= :prix, 
						temps= :temps, 
						dateEvenement= :dateEvenement,
						img= :img
					WHERE idEvenement= :idEvenement'
				);
				$query->execute([
					'nomEvenement' => $Evenement->getNomEvenement(),
					'descriptionEvenement' => $Evenement->getDescriptionEvenement(),
					'prix' => $Evenement->getPrix(),
					'temps' => $Evenement->getTemps(),
					'dateEvenement' => $Evenement->getDateEvenement(),
					'img' => $Evenement->getImg(),
					'idEvenement' => $idEvenement
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function affichertrier()
        {
            $requete = "select * from evenement order by nomEvenement";
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
?>