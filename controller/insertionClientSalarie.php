<?php

	include "../model/db.php";
	include "ControllerClient/C_Client.php";
	include "ControllerClient/C_ClientSalarie.php";
	include "ControllerCompte/C_Compte.php";
	include "ControllerCompte/C_CompteCourant.php";
	include "ControllerCompte/C_CompteEpargne.php";
	include "ControllerCompte/C_CompteBloque.php";
	include "../model/InsertionClient.class.php";
	include "../model/InsertionCompte.class.php";

	//if (isset($_Post['envoyer'])) {
		
		$nom = $_POST['nom']; 
	    $prenom = $_POST['prenom']; 
	    $adresse = $_POST['Adresse'];
	    $telephone = $_POST['telephone'];
	    $email = $_POST['email'];
	    $carte_identite = $_POST['identite'];
	    $validite_CIN = $_POST['validite'];
	    $profession = $_POST['profession'];
	    $nom_entreprise = $_POST['nom_entreprise'];
	    $adresse_entreprise = $_POST['adresse_entreprise'];
	    $salaire_client = $_POST['salaire_client'];
	    $numero_compte = $_POST['numero_compte'];
	    $cle_rib = $_POST['cle_rib'];
	    $numero_agence = $_POST['numero_agence'];
	    $nom_Employeur = $_POST['nom_Employeur'];
	    $raison_sociale = $_POST['raison_sociale'];
	    $identifiant_employeur = $_POST['identifiant_employeur'];
	    $Adresse_employeur = $_POST['Adresse_employeur'];
	    $date_ouverture = $_POST['date_ouverture'];
	    $durée_blocage = $_POST['duree_blocage'];
	    $solde = $_POST['solde'];
	    $frais_ouverture = $_POST['frais_ouverture'];
	    $agios_compte_courant = $_POST['agios_compte_courant'];
	    $id_client = 1;
	    $id_Responsable_Compte = 1;
	    $id_compte = 1;
	    $id_agios = 1;
   
	//}

	$insertClient = new InsertionClient($db);
	$insertCompte = new InsertionCompte($db);

	//$clientSalarie = new ClientSalarie($Prenom, $Profession, $Salaire, $Nom_entreprise, $Adresse_entreprise, $Id_client, $Identifiant_employeur, $Validite_CIN);

	$ClientSalarie = new ClientSalarie();
	$Client = new Client();
	$Compte = new Compte();
	$CompteCourant = new CompteCourant();

	//Données table clients
	$Client->setNom($nom);
	$Client->setAdresse($adresse);
	$Client->setTelephone($telephone);
	$Client->setEmail($email);

	echo $Client->getNom();
	echo $Client->getAdresse();
	echo $Client->getTelephone();
	echo $Client->getEmail();

	//Données table clients salaries
	$ClientSalarie->setPrenom($prenom);
	$ClientSalarie->setProfession($profession);
	$ClientSalarie->setSalaire($salaire_client);
	$ClientSalarie->setNom_entreprise($nom_entreprise);
	$ClientSalarie->setAdresse_entreprise($adresse_entreprise);
	$ClientSalarie->setId_client($id_client);
	$ClientSalarie->setIdentifiant_employeur($identifiant_employeur); 
	$ClientSalarie->setCarte_Identite($carte_identite);
	$ClientSalarie->setValidite_CIN($validite_CIN);

	echo $ClientSalarie->getPrenom();
	echo $ClientSalarie->getProfession();
	echo $ClientSalarie->getSalaire();
	echo $ClientSalarie->getNom_entreprise();
	echo $ClientSalarie->getAdresse_entreprise();
	echo $ClientSalarie->getId_client();
	echo $ClientSalarie->getIdentifiant_employeur();
	echo $ClientSalarie->getCarte_Identite();
	echo $ClientSalarie->getValidite_CIN();

	//Données table compte
	$Compte->setNumero_Compte($numero_compte);
	$Compte->setNumero_Agence($numero_agence);
	$Compte->setCle_Rib($cle_rib);
	$Compte->setId_Client($id_client);
	$Compte->setId_Responsable_Compte($id_Responsable_Compte);
	$Compte->setDate_Ouverture($date_ouverture);
	$Compte->setSolde($solde);

	echo $Compte->getNumero_Compte();
	echo $Compte->getNumero_Agence();
	echo $Compte->getCle_Rib();
	echo $Compte->getId_Client();
	echo $Compte->getId_Responsable_Compte();
	echo $Compte->getDate_Ouverture();
	echo $Compte->getSolde();

	//Données table compte courant
	//$CompteCourant->setId_Compte_Courant($id_compte_courant);
	$CompteCourant->setNom_Employeur($nom_Employeur);
	$CompteCourant->setAdresse_Employeur($Adresse_employeur);
	$CompteCourant->setRaison_Sociale($raison_sociale);
	$CompteCourant->setId_Compte($id_compte);
	$CompteCourant->setId_Agios($id_agios);

	//Données table compte courant
	//echo $CompteCourant->getId_Compte_Courant();
	echo $CompteCourant->getNom_Employeur();
	echo $CompteCourant->getAdresse_Employeur();
	echo $CompteCourant->getRaison_Sociale();
	echo $CompteCourant->getId_Compte();
	echo $CompteCourant->getId_Agios();


	$insertClient->insertionClientSalarie($ClientSalarie);
	$insertClient->insertionClient($Client);
	$insertCompte->insertionCompte($Compte);
	$insertCompte->insertionCompteCourant($CompteCourant);

?>

	<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>OUVERTURE COMPTE</title>
        <link rel="stylesheet" href="../public/css/style.css"/>
    </head>
    <body>
        <header>
            <div id="logo">
                <img src="../public/img/logobp.png"/>
            </div>
            <div id="welcome">
                <h1>BIENVENUE DANS LA BANQUE DU PEUPLE !!</h1>
            </div>
        </header>
            <div>
                <button><a href="../index.php">RETOUR A L'ACCUEIL</a></button>
            </div>
            <div id="confirm" style="background-color: white; margin: 15px;" >
            <p style="text-align: center;font-size: 30px;">
            	<?php
	                if($requete)
	                {
	                    echo 'Client enregistré dans la base de données';
	                }
	                else
	                {
	                    echo "Client non enregistré dans la base de données";
	                }
            	?>	
            </p>
                
            </div>
    </body>
</html>

