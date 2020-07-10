<?php 

	class ClientNonSalarie
	{
		private $Prenom;
		private $Activite;
		private $Id_client;
		private $Carte_Identite;
		private $Validite_CIN;

		public function __construct(){}

		public function getPrenom() {
	        return $this->Prenom;
	    }
	    public function getActivite() {
	        return $this->Activite;
	    }
	    public function getId_client() {
	        return $this->Id_client;
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

	    public function setActivite($Activite) {
	        $this->Activite = $Activite;
	    }

	    public function setId_client($Id_client) {
	        $this->Id_client = $Id_client;
	    }

	    public function setCarte_Identite($Carte_Identite) {
	        $this->Carte_Identite = $Carte_Identite;
	    }

	    public function setValidite_CIN($Validite_CIN) {
	        $this->Validite_CIN = $Validite_CIN;
	    }
	}