<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/CommonAction.php");
	require_once("action/dao/EquipeDAO.php");
	class EquipeAction extends CommonAction{
		private $equipe = array();
	public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC, "Equipe");
		}
		protected function executeAction(){
			$this->equipe = EquipeDAO::getEquipe();
		}
		public function getEquipe(){
			return $this->equipe;
		}
		
	}