<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/CommonAction.php");
	require_once("action/dao/PosteDAO.php");
	class CarriereAction extends CommonAction{
		private $carrieres = array();
	public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC, "Carriere");
		}
		protected function executeAction(){
			$this->carrieres = PosteDAO::getAllPostes();
		}
		public function getPostes(){
			return $this->carrieres;
		}
		
	}