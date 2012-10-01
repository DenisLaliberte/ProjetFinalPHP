 <?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/CommonAction.php");
	require_once("action/dao/PhotoDAO.php");
	class AdminGalerieAction extends CommonAction{
	public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_ADMIN, "Administration Galerie");
		}
			private $chemin = "";
			private $photos = array() ;
		protected function executeAction(){

			if(isset($_FILES['photo'])){
				$this->chemin = PhotoDAO::setPhoto($_FILES['photo']['name'],$_FILES['photo']['tmp_name']);
			}
			if(isset($_POST['photoADeleter'])){
				PhotoDAO::deletePhoto($_POST['photoADeleter']);
			}
			$this->photos = PhotoDAO::getPhotos();
		}
		
		public function uploadChemin(){
			return $this->chemin;
		}
		public function getPhotos(){
			return $this->photos;
		}
	}