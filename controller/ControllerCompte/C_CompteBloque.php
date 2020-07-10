<?php
	error_reporting(-1);
	class CompteBloque
	{
		private $Id_Compte_Bloque;
		private $Frais_Compte;
		private $Duree_Blocage;
		private $Id_Compte;
		private $Montant_Renumeration;

		public function __construct(){}

		public function getId_Compte_Bloque(){
			return $this->Id_Compte_Bloque;
		}
		public function getFrais_Compte(){
			return $this->Frais_Compte;
		}
		public function getDuree_Blocage(){
			return $this->Duree_Blocage;
		}
		public function getId_Compte(){
			return $this->Id_Compte;
		}
		public function getMontant_Renumeration(){
			return $this->Montant_Renumeration;
		}

		/*public function setId_Compte_Bloque(){
			$this->Id_Compte_Bloque = $Id_Compte_Bloque;
		}*/
		public function setFrais_Compte($Frais_Compte){
			$this->Frais_Compte = $Frais_Compte;
		}
		public function setDuree_Blocage($Duree_Blocage){
			$this->Duree_Blocage = $Duree_Blocage;
		}
		public function setId_Compte($Id_Compte){
			$this->Id_Compte = $Id_Compte;
		}
		public function setMontant_Renumeration($Montant_Renumeration){
			$this->Montant_Renumeration = $Montant_Renumeration;
		}
	}