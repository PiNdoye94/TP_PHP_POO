<?php

   
	class InsertionClient 
	{

		private $db;

		public function __construct(){
			include ("db.php");
			$this->db = $db;
		}
		/*public function setdb(PDO $db){
			$this->db = $db;
		}*/

		public function insertionClient(Client $Client){

			$requete="INSERT INTO clients VALUES(NULL, :nom, :Adresse, :telephone, :email)";
		    $requete_insertion=$this->db->prepare($requete);
		    $requete_insertion->execute(array(
		        'nom' => $Client->getNom(),
		        'Adresse' => $Client->getAdresse(),
		        'telephone' => $Client->getTelephone(),
		        'email' => $Client->getEmail()
     		));

     		/*if ($requete) {
     			echo "données client inséres";
			}else{echo "données client non inséres";}*/
		}

		public function insertionClientSalarie(ClientSalarie $clientSalarie){

			$requete="INSERT INTO client_salarie VALUES(NULL, :prenom, :profession, :salaire, :nom_entreprise, :adresse_entreprise, :id_client, :identifiant_employeur, :carte_identite, :validite_CIN)";
	    	$requete_insertion=$this->db->prepare($requete);
	    	$requete_insertion->execute(array(
	        'prenom' => $clientSalarie->getPrenom(),
	        'profession' => $clientSalarie->getProfession(),
	        'salaire' => $clientSalarie->getSalaire(),
	        'nom_entreprise' => $clientSalarie->getNom_entreprise(),
	        'adresse_entreprise' => $clientSalarie->getAdresse_entreprise(),
	        'id_client' => 1,
	        'identifiant_employeur' => $clientSalarie->getIdentifiant_employeur(),
	        'carte_identite' => $clientSalarie->getCarte_Identite(),
	        'validite_CIN' => $clientSalarie->getValidite_CIN()
     		));

     		/*if ($requete) {
     			echo "données client salarie inséres";
			}else{echo "données client salarie non inséres";}*/
		}

		public function insertionClienNonSalarie(){

			$requete = "INSERT INTO clients VALUES(NULL, '$nom', '$adresse', '$telephone', '$email')";

	        //$db = connexion();
	        $ok = $db->exec($requete);

	        return $ok;

	            $ok->closeCursor();
		}

		public function insertionClientMoral(){

			$requete = "INSERT INTO clients VALUES(NULL, '$nom', '$adresse', '$telephone', '$email')";

	        //$db = connexion();
	        $ok = $db->exec($requete);

	        return $ok;

	            $ok->closeCursor();
		}
	}

