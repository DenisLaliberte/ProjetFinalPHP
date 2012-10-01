<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/CommonAction.php");
	require_once("action/dao/textDAO.php");
	class AdministrationAction extends CommonAction{
	public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_ADMIN, "Administration");
		}
		protected $acceuil;
		protected $compagnie;
		protected $services;
		protected $enregistrement = "";
		
		protected function executeAction(){
			if (isset($_POST["text"])) {
					TextDAO::setText($_POST["page"],$_POST["text"]);
					$this->enregistrement=$_POST["text"];
			}
				$this->acceuil = str_replace("\r\n", "", TextDAO::getText(CommonAction::$ACCEUIL));
				$this->compagnie = str_replace("\r\n", "", TextDAO::getText(CommonAction::$COMPAGNIE));
				$this->services = str_replace("\r\n", "", TextDAO::getText(CommonAction::$SERVICES));
		} 	
		public function getAcceuil(){
			return $this->acceuil;
		}
		public function getCompagnie(){
			return $this->compagnie;
		}
		public function getServices(){
			return $this->services;
		}
		public function getEnregistrement(){
			return $this->enregistrement;
		}
		
		
	}