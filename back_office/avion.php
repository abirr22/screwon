<?php
	class Avion{
		private $id=null;
		private $nom=null;
		private $prix=null;
		private $etat=null;
		private $choix=null;
		private $img1;
		private $img2;
        private $img3;
        private $img4;
		
		function __construct($id, $nom, $prix, $etat, $choix, $img1, $img2, $img3, $img4){
			$this->id=$id;
			$this->nom=$nom;
			$this->prix=$prix;
			$this->etat=$etat;
			$this->choix=$choix;
			$this->img1=$img1;
            $this->img2=$img1;
            $this->img3=$img1;
            $this->img4=$img1;
		}
		function getId(){
			return $this->id;
		}
		function getNom(){
			return $this->nom;
		}
		function getPrix(){
			return $this->prix;
		}
		function getEtat(){
			return $this->etat;
		}
		function getChoix(){
			return $this->choix;
		}
		function getImg1(){
			return $this->img1;
		}
        function getImg2(){
			return $this->img2;
		}
        function getImg3(){
			return $this->img3;
		}
        function getImg4(){
			return $this->img4;
		}
		function setId(string $id){
			$this->id=$id;
		}
		function setNom(string $nom){
			$this->nom=$nom;
		}
		function setPrix(string $prix){
			$this->prix=$prix;
		}
		function setEtat(string $etat){
			$this->etat=$etat;
		}
		function setImg1(string $img1){
			$this->img1=$img1;
		}
        function setImg2(string $img2){
			$this->img2=$img2;
		}
        function setImg3(string $img3){
			$this->img3=$img3;
		}
        function setImg4(string $img4){
			$this->img4=$img4;
		}
		
	}


?>