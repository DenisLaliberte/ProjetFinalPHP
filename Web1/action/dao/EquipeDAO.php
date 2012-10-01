<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	class EquipeDAO {
		public static function setEmploye($id,$nom,$description,$cheminPhoto) {
			$connection = ConnectionDAO::getConnection();
			$query = "UPDATE employe SET nom = :pNom,description = :pDescription , chemin_photo = :pCheminPhoto WHERE id=:pID";
			$statement = oci_parse($connection, $query);
			oci_bind_by_name($statement, ":pId", $id);
			oci_bind_by_name($statement, ":pNom", $nom);
			oci_bind_by_name($statement, ":pDescription", $description);
			oci_bind_by_name($statement, ":pCheminPhoto", $cheminPhoto);
			oci_execute($statement);
		}
		public static function setEmployeSansPhoto($id,$nom,$description) {
			$connection = ConnectionDAO::getConnection();
			$query = "UPDATE employe SET nom = :pNom,description = :pDescription WHERE id=:pID";
			$statement = oci_parse($connection, $query);
			oci_bind_by_name($statement, ":pId", $id);
			oci_bind_by_name($statement, ":pNom", $nom);
			oci_bind_by_name($statement, ":pDescription", $description);
			oci_execute($statement);
		}
		public Static function nouvelEmploye($nom, $description, $cheminPhoto){
			$connection = ConnectionDAO::getConnection();
			$query = "Insert INTO employe (id, nom, description, chemin_photo) VALUES ( employes_id.nextval, :pNom, :pDescription, :pCheminPhoto)";
			$statement = oci_parse($connection, $query);
			oci_bind_by_name($statement, ":pNom", $nom);
			oci_bind_by_name($statement, ":pDescription", $description);
			oci_bind_by_name($statement, ":pCheminPhoto", $cheminPhoto);
			oci_execute($statement);
		}
		public static function getEmploye($id){
			$employe=null;
			$connection = ConnectionDAO::getConnection();
			$query = "SELECT * FROM  employe WHERE id = :pId";
			$statement = oci_parse($connection, $query);
			oci_bind_by_name($statement, ":pId", $id);
			oci_execute($statement);	
			if ($row = oci_fetch_array($statement)) {
				$employe = $row;
			}
			return $employe;
		}
		public static function deleteEmploye($id){
			$connection = ConnectionDAO::getConnection();
			$query = "DELETE FROM employe WHERE id = :pId";
			$statement = oci_parse($connection, $query);
			oci_bind_by_name($statement, ":pId", $id);
			oci_execute($statement);
		}
		public static function getEquipe(){
			$equipe = array();
			$connection = ConnectionDAO::getConnection();
			$query = "SELECT * FROM employe";
			$statement = oci_parse($connection, $query);
			oci_execute($statement);
			while ($row = oci_fetch_array($statement)) {
				$equipe[] = $row;
			}
			return $equipe;
		}
}