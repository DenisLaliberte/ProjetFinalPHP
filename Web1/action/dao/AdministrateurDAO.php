<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/

	class AdministrateurDAO {
	
		public static function authenticate($nom, $motDePasse) {
			$motDePasse = sha1($motDePasse);
			$administrateur = 0;
			$connection = ConnectionDAO::getConnection();
			$query = "SELECT * FROM  administrateur WHERE nom = :pNom AND mot_de_passe = :pMDP";
			$statement = oci_parse($connection, $query);
			oci_bind_by_name($statement, ":pNom", $nom);
			oci_bind_by_name($statement, ":pMDP", $motDePasse);
			oci_execute($statement);	
			if ($row = oci_fetch_array($statement)) {
				$administrateur = 1;
			}
			return $administrateur;
		}
	
	
	
	
	}