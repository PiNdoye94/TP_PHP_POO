<?php 

	class ClientSalarie
	{
		private $Prenom;
		private $Profession;
		private $Salaire;
		private $Nom_entreprise;
		private $Adresse_entreprise;
		private $Id_client;
		private $Identifiant_employeur;
		private $Carte_Identite;
		private $Validite_CIN;

		public function __construct(){}

		public function getPrenom() {
	        return $this->Prenom;
	    }
	    public function getProfession() {
	        return $this->Profession;
	    }
	    public function getSalaire() {
	        return $this->Salaire;
	    }
	    public function getNom_entreprise() {
	        return $this->Nom_entreprise;
	    }
	    public function getAdresse_entreprise() {
	        return $this->Adresse_entreprise;
	    }
	    public function getId_client() {
	        return $this->Id_client;
	    }
	    public function getIdentifiant_employeur() {
	        return $this->Identifiant_employeur;
	    }
	    public function getCarte_Identite() {
	        return $this->Carte_Identite;
	    }
	    public function getValidite_CIN() {
	        return $this->Validite_CIN;
	    }

	    public function setPrenom($Prenom) {
	        $this->Prenom = $Prenom;
	    }

	    public function setProfession($Profession) {
	        $this->Profession = $Profession;
	    }

	    public function setSalaire($Salaire) {
	        $this->Salaire = $Salaire;
	    }

	    public function setNom_entreprise($Nom_entreprise) {
	        $this->Nom_entreprise = $Nom_entreprise;
	    }

	    public function setAdresse_entreprise($Adresse_entreprise) {
	        $this->Adresse_entreprise = $Adresse_entreprise;
	    }

	    public function setId_client($Id_client) {
	        $this->Id_client = $Id_client;
	    }

	    public function setIdentifiant_employeur($Identifiant_employeur) {
	        $this->Identifiant_employeur = $Identifiant_employeur;
	    }

	    public function setCarte_Identite($Carte_Identite) {
	        $this->Carte_Identite = $Carte_Identite;
	    }

	    public function setValidite_CIN($Validite_CIN) {
	        $this->Validite_CIN = $Validite_CIN;
	    }
	}