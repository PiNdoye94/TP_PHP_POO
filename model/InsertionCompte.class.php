<?php

	class InsertionCompte
	{
		private $db;

		public function __construct(){
			include ("db.php");
			$this->db = $db;
		}

		public function insertionCompte(Compte $Compte){
			$requete="INSERT INTO comptes VALUES(NULL, :num_compte, :num_agence, :cle_rib, :id_client, :id_resp_compte, :date_ouverture, :solde)";
		    $requete_insertion=$this->db->prepare($requete);
		    $requete_insertion->execute(array(
		        'num_compte' => $Compte->getNumero_Compte(),
		        'num_agence' => $Compte->getNumero_Agence(),
		        'cle_rib' => $Compte->getCle_Rib(),
		        'id_client' => 1,
		        'id_resp_compte' => 1,
		        'date_ouverture' => $Compte->getDate_Ouverture(),
		        'solde' => $Compte->getSolde()
		     ));
		    if ($requete) {
     			echo "données comptes inséres";
			}else{echo "données comptes non inséres";}

		}
		/*public function insertionCompteCourant(CompteCourant $CompteCourant){

		}
		public function insertionCompteEpargne(){
			
		}
		public function insertionCompteBloque(){
			
		}*/
	}