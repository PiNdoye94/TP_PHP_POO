<?php

	
	class CompteCourant
	{
		private $Id_Compte_Courant;
		private $Nom_Employeur;
		private $Adresse_Employeur;
		private $Raison_Sociale;
		private $Id_Compte;
		private $Id_Agios;

		public function __construct(){}

		public function getId_Compte_Courant(){
			return $this->Id_Compte_Courant;
		}
		public function getNom_Employeur(){
			return $this->Nom_Employeur;
		}
		public function getAdresse_Employeur(){
			return $this->Adresse_Employeur;
		}

		public function getRaison_Sociale(){
			return $this->Raison_Sociale;
		}
		public function getId_Compte(){
			return $this->Id_Compte;
		}
		public function getId_Agios(){
			return $this->Id_Agios;
		}
		/*public function setId_Compte_Courant($Id_Compte_Courant){
			$this->Id_Compte_Courant = $Id_Compte_Courant;
		}*/
		public function setNom_Employeur($Nom_Employeur){
			$this->Nom_Employeur = $Nom_Employeur;
		}
		public function setAdresse_Employeur($Adresse_Employeur){
			$this->Adresse_Employeur = $Adresse_Employeur;
		}

		public function setRaison_Sociale($Raison_Sociale){
			$this->Raison_Sociale = $Raison_Sociale;
		}
		public function setId_Compte($Id_Compte){
			$this->Id_Compte = $Id_Compte;
		}
		public function setId_Agios($Id_Agios){
			$this->Id_Agios = $Id_Agios;
		}

	}