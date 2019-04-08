<?php
			include 'config/config_apiex.php';
			//----Declaration des variables

			if (isset($_POST['envoyer'])) {

				error_reporting(E_ALL);
				if(!empty($_POST))	{
						$retour=1;
				foreach($_POST as $cle=>$val)	{
					if(empty($val))		{
					 trigger_error("Impossible de diviser par zéro");

					$retour=0;
					}
				}
				if($retour==0)	{
							echo "<script>";
							echo 'javascript:history.go(-1);';
							echo "</script>";
				  }	else	{
						echo 'C\'est bon, on poursuit donc l\'exécution du script';
						}
				}	else {
					echo 'Idem formulaire exemple précédent';
				}



			$objetprojet = addslashes($_POST['objetprojet']);
			$adresseprojet = addslashes($_POST['adresseprojet']);
			$departement = addslashes($_POST['departement']);
			$commune = addslashes($_POST['commune']);
			$ville = addslashes($_POST['ville']);
			$quartier = addslashes($_POST['quartier']);
			$compl_adres = addslashes($_POST['compl_adres']);
			$regimesollicite = addslashes($_POST['regimesollicite']);
			$dureeproj = addslashes($_POST['dureeproj']);
			$fonds_dc = addslashes($_POST['fonds_dc']);
			$fonds_pri = addslashes($_POST['fonds_pri']);
			$emprunts_dc = addslashes($_POST['emprunts_dc']);
			$emprunts_pri = addslashes($_POST['emprunts_pri']);
			$chiffre_aff = addslashes($_POST['chiffre_aff']);
			$valeur_ajout = addslashes($_POST['valeur_ajout']);
			$masse_salarial = addslashes($_POST['masse_salarial']);
			$nbr_emploi = addslashes($_POST['nbr_emploi']);
			$rentab_finan = addslashes($_POST['rentab_finan']);

		foreach($_POST['engagement_sys'] as $valeur)
			{
			   $valeur = "OK";
				 $engagement_sys = $valeur;
			}




			//Plan approvisionnement
			$annee1 = "Annee1";
			$plan1 = addslashes($_POST['plan1']);  $plan10 = addslashes($_POST['plan10']); $plan11 = addslashes($_POST['plan11']);

			$annee2 = "Annee2";
			$plan2 = addslashes($_POST['plan2']);  $plan20 = addslashes($_POST['plan20']); $plan21 = addslashes($_POST['plan21']);

			$annee3 = "Annee3";
			$plan3 = addslashes($_POST['plan3']);  $plan30 = addslashes($_POST['plan30']); $plan31 = addslashes($_POST['plan31']);

			$annee4 = "Annee4";
			$plan4 = addslashes($_POST['plan4']);  $plan40 = addslashes($_POST['plan40']); $plan41 = addslashes($_POST['plan41']);

			$annee5 = "Annee5";
			$plan5 = addslashes($_POST['plan5']);  $plan50 = addslashes($_POST['plan50']); $plan51 = addslashes($_POST['plan51']);


			//infos projet
			var_dump(mysqli_query ($conn,"INSERT INTO projets (id, objetproj, adresse, departement, commune, ville, quartier, complementadres, regimespecial, duree, fonds_dc, fonds_pri, emprunt_dc, emprunt_pri, chifmanuel, valeurajout, massesalariale, nbremploi, rentafinance, syscohada, entreprise)

				VALUES ('', '$objetprojet', '$adresseprojet', '$departement', '$commune', '$ville', '$quartier', '$compl_adres', '$regimesollicite', '$dureeproj', '$fonds_dc', '$fonds_pri', '$emprunts_dc', '$emprunts_pri', '$chiffre_aff', '$valeur_ajout', '$masse_salarial', '$nbr_emploi', '$rentab_finan','$engagement_sys', '')"));

			//plan appro

			var_dump(mysqli_query ($conn,"INSERT INTO plan_appro_production (id, annee, matierepremiere, production, capacite, projet) VALUES
			 ('', '$annee1','$plan1','$plan10','$plan11',''),
			 ('', '$annee2','$plan2','$plan20','$plan21',''),
			 ('', '$annee3','$plan3','$plan30','$plan31',''),
			 ('', '$annee4','$plan4','$plan40','$plan41',''),
			 ('', '$annee5','$plan5','$plan50','$plan51','')"));



			 // close database
			 mysqli_close($conn);
			}


		?>
