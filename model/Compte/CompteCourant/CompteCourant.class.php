<?php

	$requete="INSERT INTO compte_courant VALUES(NULL, '$nom_employeur', '$adresse_employeur', '$raison_social', $id_compte, $id_agios)";

	        $db = connexion();
	            $ok = $db->exec($requete);

	            return $ok;

	            $ok->closeCursor();