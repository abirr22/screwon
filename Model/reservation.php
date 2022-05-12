<?php
    class reservation
    {
        private $idreservation;
        private $nom;
		private $prenom;
		private $email;
		private $cin;
		private $num;
		private $poste;
		private $destination;
		private $depart;
		private $retour;
		private $staff;
		private $id;
        function __construct($idreservation, $nom, $prenom, $email, $cin, $num, $poste, $destination, $depart, $retour, $staff, $id){
			$this->idreservation=$idreservation;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->cin=$cin;
			$this->num=$num;
			$this->poste=$poste;
			$this->destination=$destination;
			$this->depart=$depart;
			$this->retour=$retour;
			$this->staff=$staff;
			$this->id=$id;
		}

        function setidreservation(string $idreservation){
			$this->idreservation=$idreservation;
		}
        function setnom(string $nom){
			$this->nom=$nom;
		}
		function setprenom(string $prenom){
			$this->prenom=$prenom;
		}
		function setemail(string $email){
			$this->email=$email;
		}
		function setcin(string $cin){
			$this->cin=$cin;
		}
		function setnum(string $num){
			$this->num=$num;
		}
		function setposte(string $poste){
			$this->poste=$poste;
		}
		function setdestination(string $destination){
			$this->destination=$destination;
		}
		function setdepart(string $depart){
			$this->depart=$depart;
		}
		function setretour(string $retour){
			$this->retour=$retour;
		}
		function setstaff(string $staff){
			$this->staff=$staff;
		}
		function setid(string $id){
			$this->id=$id;
		}
        function getidreservation(){
			return $this->idreservation;
		}
        function getnom(){
			return $this->nom;
		}
		function getprenom(){
			return $this->prenom;
		}
		function getemail(){
			return $this->email;
		}
		function getcin(){
			return $this->cin;
		}
		function getnum(){
			return $this->num;
		}
		function getposte(){
			return $this->poste;
		}
        function getdestination(){
			return $this->destination;
		}
		function getdepart(){
			return $this->depart;
		}
		function getretour(){
			return $this->retour;
		}
		function getstaff(){
			return $this->staff;
		}
		function getid(){
			return $this->id;
		}
    }
    

?>