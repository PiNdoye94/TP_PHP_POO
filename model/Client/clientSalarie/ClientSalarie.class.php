<?php

	class ClientSalarie
	{
		public function insertionClientSalarie(){

		$requete="INSERT INTO client_salarie VALUES(NULL, '$prenom', '$profession', $salaire, '$nom_entreprise', '$adresse_entreprise', $id_client, '$identifiant_employeur', '$carte_identite', $validite_CIN)";

        $db = connexion();
            $ok = $db->exec($requete);

            return $ok;

            $ok->closeCursor();
		}
	}