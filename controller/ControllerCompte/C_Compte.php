<?php

	class Compte
	{
		private $Id_Compte;
		private $Numero_Compte;
		private $Numero_Agence;
		private $Cle_Rib;
		private $Id_Client;
		private $Id_Responsable_Compte;
		private $Date_Ouverture;
		private $Solde;

		public function __construct(){}

		public function getId_Compte(){
			return $this->Id_Compte;
		}

		public function getNumero_Compte(){
			return $this->Numero_Compte;
		}

		public function getNumero_Agence(){
			return $this->Numero_Agence;
		}

		public function getCle_Rib(){
			return $this->Cle_Rib;
		}

		public function getId_Client(){
			return $this->Id_Client;
		}

		public function getId_Responsable_Compte(){
			return $this->Id_Responsable_Compte;
		}

		public function getDate_Ouverture(){
			return $this->Date_Ouverture;
		}

		public function getSolde(){
			return $this->Solde;
		}

		/*public function setId_Compte($Id_Compte) {
	        $this->Id_Compte = $Id_Compte;
	    }*/

	    public function setNumero_Compte($Numero_Compte) {
	        $this->Numero_Compte = $Numero_Compte;
	    }

	    public function setNumero_Agence($Numero_Agence) {
	        $this->Numero_Agence = $Numero_Agence;
	    }

	    public function setCle_Rib($Cle_Rib) {
	        $this->Cle_Rib = $Cle_Rib;
	    }

	    public function setId_Client($Id_Client) {
	        $this->Id_Client = $Id_Client;
	    }

	    public function setId_Responsable_Compte($Id_Responsable_Compte) {
	        $this->Id_Responsable_Compte = $Id_Responsable_Compte;
	    }

	    public function setDate_Ouverture($Date_Ouverture) {
	        $this->Date_Ouverture = $Date_Ouverture;
	    }

	    public function setSolde($Solde) {
	        $this->Solde = $Solde;
	    }
	}