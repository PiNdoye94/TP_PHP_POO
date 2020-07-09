<?php
	
	class Compte
	{
		$requete="INSERT INTO comptes VALUES(NULL, $num_compte, $num_agence, $cle_rib, $id_client, $id_resp_compte, $date_ouverture, $solde)";

        $db = connexion();
            $ok = $db->exec($requete);

            return $ok;

            $ok->closeCursor();
	}