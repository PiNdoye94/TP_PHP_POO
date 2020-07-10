<?php
	error_reporting(-1);
	class InsertionCompte
	{
		private $db;
		//public $Confirmation;

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
		    /*if ($requete) {
     			echo "données comptes inséres";
			}else{echo "données comptes non inséres";}*/

		}
		public function insertionCompteCourant(CompteCourant $CompteCourant){
			$requete="INSERT INTO compte_courant VALUES(NULL, :nom_employeur, :adresse_employeur, :raison_social, :id_compte, :id_agios)";
		    $requete_insertion=$this->db->prepare($requete);
		    $requete_insertion->execute(array(
		        'nom_employeur' => $CompteCourant->getNom_Employeur(),
		        'adresse_employeur' => $CompteCourant->getAdresse_Employeur(),
		        'raison_social' => $CompteCourant->getRaison_Sociale(),
		        'id_compte' => 1,
		        'id_agios' => 1
		    ));
		    /*if ($requete) {
     			echo "données compte courant inséres";
			}else{echo "données compte courant non inséres";}*/

		}
		public function insertionCompteEpargne(CompteEpargne $CompteEpargne){
			$requete="INSERT INTO compte_epargne VALUES(NULL, :frais_compte, :id_compte, :montant_renumeration)";
		    $requete_insertion=$this->db->prepare($requete);
		    $requete_insertion->execute(array(
		        'frais_compte' => $CompteEpargne->getFrais_Compte(),
		        'id_compte' => 1,
		        'montant_renumeration' => $CompteEpargne->getMontant_Renumeration()
		        
		    ));
			
		}
		public function insertionCompteBloque(CompteBloque $CompteBloque){
			$requete="INSERT INTO compte_bloque VALUES(NULL, :frais_compte, :duree_blocage, :id_compte, :montant_renumeration)";
		    $requete_insertion=$this->db->prepare($requete);
		    $requete_insertion->execute(array(
		        'frais_compte' => $CompteBloque->getFrais_Compte(),
		        'duree_blocage' => $CompteBloque->getDuree_Blocage(),
		        'id_compte' => 1,
		        'montant_renumeration' => $CompteBloque->getMontant_Renumeration()        
		    ));	
		}

		/*public function getConfirmation(){

			return $this->
			if ($requete) {
     	echo "Client enregistré!";
			}else{echo "Client non enregistré!";}

			
		}*/
	}
	