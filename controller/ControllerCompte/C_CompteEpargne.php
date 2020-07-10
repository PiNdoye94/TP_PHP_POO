<?php
	error_reporting(-1);
	class CompteEpargne
	{
		private $Id_Compte_Epargne;
		private $Frais_Compte;
		private $Id_Compte;
		private $Montant_Renumeration;

		public function __construct(){}

		public function getId_Compte_Epargne(){
			return $this->Id_Compte_Epargne;
		}
		public function getFrais_Compte(){
			return $this->Frais_Compte;
		}
		public function getId_Compte(){
			return $this->Id_Compte;
		}
		public function getMontant_Renumeration(){
			return $this->Montant_Renumeration;
		}

		/*public function setId_Compte_Epargne(){
			$this->Id_Compte_Epargne = $Id_Compte_Epargne;
		}*/
		public function setFrais_Compte($Frais_Compte){
			$this->Frais_Compte = $Frais_Compte;
		}
		public function setId_Compte($Id_Compte){
			$this->Id_Compte = $Id_Compte;
		}
		public function setMontant_Renumeration($Montant_Renumeration){
			$this->Montant_Renumeration = $Montant_Renumeration;
		}
	}