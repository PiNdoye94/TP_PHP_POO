<?php
	
	class Client 
	{
		private $Id_client;
		private $Nom;
		private $Adresse;
		private $Telephone;
		private $Email;

		public function __construct(){}

	    public function getId_client() {
	        return $this->Id_client;
	    }

	    public function getNom() {
	        return $this->Nom;
	    }

	    public function getAdresse() {
	        return $this->Adresse;
	    }

	    public function getTelephone() {
	        return $this->Telephone;
	    }

	    public function getEmail() {
	        return $this->Email;
	    }

	    public function setNom($Nom) {

	    	/*if (condition) {
	    		# code...
	    	}
	    	else{*/
	    		$this->Nom = $Nom;
	    	//}
        	
	    }

	    public function setAdresse($Adresse) {
	        $this->Adresse = $Adresse;
	    }

	    public function setTelephone($Telephone) {
	        $this->Telephone = $Telephone;
	    }

	    public function setEmail($Email) {
	        $this->Email = $Email;
	    }

	    
	}

	/*$nom->setNnom($_Post['nom']);
	$adresse->setAdresse($_Post['adresse']);
	$telephone->setTelephone($_Post['telephone']);
	$email->setEmail($_Post['email']);*/