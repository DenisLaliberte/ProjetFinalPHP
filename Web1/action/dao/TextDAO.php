<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	class TextDAO {
		public static function setText($page, $contenu) {
			
			$connection = ConnectionDAO::getConnection();
			$query = "UPDATE text SET CONTENU = :pContenu WHERE page=:pPage";
			$statement = oci_parse($connection, $query);
			oci_bind_by_name($statement, ":pPage", $page);
			oci_bind_by_name($statement, ":pContenu", $contenu);
			oci_execute($statement);
		}
		public static function getText($page){
			$text = "";
			$connection = ConnectionDAO::getConnection();
			$query = "SELECT contenu FROM  text WHERE page = :pPage";
			$statement = oci_parse($connection, $query);
			oci_bind_by_name($statement, ":pPage", $page);
			oci_execute($statement);	
			if ($row = oci_fetch_array($statement)) {
				$text = $row["CONTENU"];
			}
			return $text;
		}
	
}