<?php
    class staff
    {
        private $idstaff;
        private $nom;
		private $prenom;
		private $job;
		private $dispo;
		private $idreservation;
		private $poste;
		private $destination;
		private $depart;
		private $retour;
		private $staff;

        function __construct($idstaff, $nom, $prenom, $job, $dispo, $idreservation){
			$this->idstaff=$idstaff;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->job=$job;
			$this->dispo=$dispo;
			$this->idreservation=$idreservation;
	
		}

        function setidstaff(string $idstaff){
			$this->idstaff=$idstaff;
		}
        function setnom(string $nom){
			$this->nom=$nom;
		}
		function setprenom(string $prenom){
			$this->prenom=$prenom;
		}
		function setjob(string $job){
			$this->job=$job;
		}
		function setdispo(string $dispo){
			$this->dispo=$dispo;
		}
		function setidreservation(string $idreservation){
			$this->idreservation=$idreservation;
		}

        function getidstaff(){
			return $this->idstaff;
		}
        function getnom(){
			return $this->nom;
		}
		function getprenom(){
			return $this->prenom;
		}
		function getjob(){
			return $this->job;
		}
		function getdispo(){
			return $this->dispo;
		}
		function getidreservation(){
			return $this->idreservation;
		}

    }
    

?>

