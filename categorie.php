<?php
	class categorie{
		private $id=null;
		private $nom=null;
		
		
		function __construct($id_categorie, $nom){
			$this->id=$id;
			$this->nom=$nom;
			
		}
		function getId_categorie(){
			return $this->id_categorie;
		}
		function getNom(){
			return $this->nom;
		}
		





		function setId_categorie(string $id_categorie){
			$this->id_categorie=$id_categorie;
		}
		function setNom(string $nom){
			$this->nom=$nom;
		}
		
		
		
	}


?>