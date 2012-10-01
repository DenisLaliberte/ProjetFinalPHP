<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/CommonAction.php");
	require_once("action/dao/photoDAO.php");
	class GalerieAction extends CommonAction{
	public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_ADMIN, "Administration Galerie");
		}
		
		private $photos = array() ;
		
		protected function executeAction(){
				$this->photos = PhotoDAO::getPhotos();
		}
		public function getPhotos(){
			return $this->photos;
		}
	}