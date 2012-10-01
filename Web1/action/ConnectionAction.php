<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/

	require_once("action/CommonAction.php");
	require_once("action/dao/AdministrateurDAO.php");

	class ConnectionAction extends CommonAction {
			private $erreurConnection = false;
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC,"Connection");
		}
			
		protected function executeAction() {
			
			if (isset($_POST["nom"])) {
				$visibility = AdministrateurDAO::authenticate($_POST["nom"], $_POST["motdepasse"]);
				
				if ($visibility > CommonAction::$VISIBILITY_PUBLIC) {
					$_SESSION["nom"] = $_POST["nom"];
					$_SESSION["visibility"] = $visibility;
				}
				else{
					$this->erreurConnection=true ; 
				}
			}
		}
		public function echecConnection(){
			return $this->erreurConnection;
		}
	}