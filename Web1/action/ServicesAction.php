<?php
/*-------------------------------------------------------
*				Projet synth�se : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/CommonAction.php");	
	require_once("action/dao/textDao.php");
	class ServicesAction extends CommonAction{
	public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC, CommonAction::$SERVICES);
		}
		
		private $texte;
		
		protected function executeAction(){
			$this->texte = TextDAO::getText($this->pageName);
		} 
		public function getTexte(){
			return $this->texte;
		}
	}