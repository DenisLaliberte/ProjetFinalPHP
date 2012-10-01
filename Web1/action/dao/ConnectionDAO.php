<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	define("DB_USER", "h11lalibde");
	define("DB_PASS", "a");
	define("DB_ALIAS", "DECINFO");

	class ConnectionDAO {
		private static $connection;
		
		public static function getConnection() {
			if (!isset(ConnectionDAO::$connection)) {
				ConnectionDAO::$connection = oci_new_connect(DB_USER, DB_PASS, DB_ALIAS);
			}
			
			return ConnectionDAO::$connection;
		}
	
		public static function closeConnection() {
			if (isset(ConnectionDAO::$connection)) {
				oci_close(ConnectionDAO::$connection);
			}
		}
	}