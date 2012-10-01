<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	session_start();
	require_once("action/dao/ConnectionDAO.php");
	abstract class CommonAction {
		public static $VISIBILITY_PUBLIC = 0;
		public static $VISIBILITY_ADMIN = 1;
		public static $ACCEUIL = "acceuil";
		public static $COMPAGNIE = "compagnie";
		public static $SERVICES = "services";

		private $pageVisibility;
		protected $pageName;
		
		public function __construct($pageVisibility, $pageName) {
			$this->pageVisibility = $pageVisibility;
			$this->pageName = $pageName;
		}
		
		public function execute() {
		
			if (isset($_GET["deconnection"])) {
				session_unset();
				session_destroy();
				session_start();
			}
		
			if (!isset($_SESSION["visibility"])) {
				$_SESSION["visibility"] = CommonAction::$VISIBILITY_PUBLIC;
			}
		
			if ($_SESSION["visibility"] < $this->pageVisibility) {
				header("location:index.php");
				exit;
			}
			
			$this->executeAction();
		}
		
		public function getUsername() {
			$name = "Invité";
			
			if (isset($_SESSION["username"])) {
				$name = $_SESSION["username"];
			}
			return $name;
		}
		
		public function getPageName(){
			return $this->pageName;
		}
		
		public function getCurrentPage() {
			 $pageURL = 'http';
			 $pageURL .= "://";
			 if ($_SERVER["SERVER_PORT"] != "80") {
			  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			 } else {
			  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			 }
			 return $pageURL;
		}
		
		public function estAdministrateur(){
			$rep = false;
			if(isset($_SESSION["visibility"])){
				if($_SESSION["visibility"]==CommonAction::$VISIBILITY_ADMIN){
					$rep = true;
				}
			}
			return $rep;
		}
		protected abstract function executeAction();
	}