<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	class PosteDAO {
		public static function setPoste($id,$nom,$description,$date) {
			$connection = ConnectionDAO::getConnection();
			$query = "UPDATE poste SET nom = :pNom,description = :pDescription , date_daffichage = to_date(:pDate, 'yy-mm-dd') WHERE id=:pID";
			$statement = oci_parse($connection, $query);
			oci_bind_by_name($statement, ":pId", $id);
			oci_bind_by_name($statement, ":pNom", $nom);
			oci_bind_by_name($statement, ":pDescription", $description);
			oci_bind_by_name($statement, ":pDate", $date);
			oci_execute($statement);
		}
		public Static function nouveauPoste($nom, $description, $date){
			$connection = ConnectionDAO::getConnection();
			$query = "Insert INTO poste (id, nom, description, date_daffichage) VALUES ( poste_id.nextval, :pNom, :pDescription, to_date(:pDate, 'yy-mm-dd') )";
			$statement = oci_parse($connection, $query);
			oci_bind_by_name($statement, ":pNom", $nom);
			oci_bind_by_name($statement, ":pDescription", $description);
			oci_bind_by_name($statement, ":pDate", $date);
			oci_execute($statement);
		}
		public static function getPoste($id){
			$poste=null;
			$connection = ConnectionDAO::getConnection();
			$query = "SELECT * FROM  poste WHERE id = :pId";
			$statement = oci_parse($connection, $query);
			oci_bind_by_name($statement, ":pId", $id);
			oci_execute($statement);	
			if ($row = oci_fetch_array($statement)) {
				$poste = $row;
			}
			return $poste;
		}
		public static function deletePoste($id){
			$connection = ConnectionDAO::getConnection();
			$query = "DELETE FROM poste WHERE id = :pId";
			$statement = oci_parse($connection, $query);
			oci_bind_by_name($statement, ":pId", $id);
			oci_execute($statement);
		}
		public static function getAllPostes(){
			$tableauPoste = array();
			$connection = ConnectionDAO::getConnection();
			$query = "SELECT * FROM poste ORDER BY date_daffichage";
			$statement = oci_parse($connection, $query);
			oci_execute($statement);
			while ($row = oci_fetch_array($statement)) {
				$tableauPoste[] = $row;
			}
			return $tableauPoste;
		}
}