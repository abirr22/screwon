<?php
	class Evenement{
		private $idEvenement;
		private $nomEvenement=null;
		private $descriptionEvenement=null;
		private $prix;
        private $temps;
		private $dateEvenement;
		private $img;
		private $nmbrParticipants;
       
		
		
		function __construct($nomEvenement, $descriptionEvenement, $prix, $temps, $dateEvenement, $img, $nmbrParticipants){
		
			$this->nomEvenement=$nomEvenement;
			$this->descriptionEvenement=$descriptionEvenement;
			$this->prix=$prix;
			$this->temps=$temps;
			$this->dateEvenement=$dateEvenement;
			$this->img=$img;
			$this->nmbrParticipants=$nmbrParticipants;
		}
		function getIdEvenement(){
			return $this->idEvenement;
		}
		function getNomEvenement(){
			return $this->nomEvenement;
		}
		function getDescriptionEvenement(){
			return $this->descriptionEvenement;
		}
		function getPrix(){
			return $this->prix;
		}
		function getTemps(){
			return $this->temps;
		}
		function getDateEvenement(){
			return $this->dateEvenement;
		}
		function getImg(){
			return $this->img;
		}
		function getnmbrParticipants(){
			return $this->nmbrParticipants;
		}
		function setIdEvenement(int $idEvenement){
			$this->idEvenement=$idEvenement;
		}
		function setNomEvenement(string $nomEvenement){
			$this->nomEvenement=$nomEvenement;
		}
		function setDescriptionEvenement(text $descriptionEvenement){
			$this->descriptionEvenement=$descriptionEvenement;
		}
		function setPrix(float $prix){
			$this->prix=$prix;
		}
		function setTemps(time $temps){
			$this->temps=$temps;
		}
		function setDateEvenement(date $dateEvenement){
			$this->dateEvenement=$dateEvenement;
		}
		function setImg(file $img){
			$this->img=$img;
		}
		function setnmbrParticipants(int $nmbrParticipants){
			$this->nmbrParticipants=$nmbrParticipants;
		}
		
	}


?>