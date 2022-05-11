<?php
	class Participant{
		private $idEvenement=null;
		private $idParticipant;
		private $nomParticipant=null;
		private $email=null;
        private $numTel;
		private $adresse=null;
		private $genre=null;
       
		
		
		function __construct($idEvenement, $nomParticipant, $email, $numTel, $adresse, $genre){
			$this->$idEvenement=$idEvenement;
			$this->nomParticipant=$nomParticipant;
			$this->email=$email;
			$this->numTel=$numTel;
			$this->adresse=$adresse;
			$this->genre=$genre;
		}
		function getIdEvenement(){
			return $this->idEvenement;
		}
		function getIdParticipant(){
			return $this->idParticipant;
		}
		function getNomParticipant(){
			return $this->nomParticipant;
		}
		function getEmail(){
			return $this->email;
		}
		function getNumTel(){
			return $this->numTel;
		}
		function getAdresse(){
			return $this->adresse;
		}
		function getGenre(){
			return $this->genre;
		}
		function setIdEvenement(string $idEvenement){
			$this->idEvenement=$idEvenement;
		}
		function setIdParticipant(int $idParticipant){
			$this->idParticipant=$idParticipant;
		}
		function setNomParticipant(string $nomParticipant){
			$this->nomParticipant=$nomParticipant;
		}
		function setEmail(string $email){
			$this->email=$email;
		}
		function setNumTel(int $numTel){
			$this->numTel=$numTel;
		}
		function setAdresse(string $adresse){
			$this->adresse=$adresse;
		}
		function setgenre(string $genre){
			$this->genre=$genre;
		}
		
	}


?>