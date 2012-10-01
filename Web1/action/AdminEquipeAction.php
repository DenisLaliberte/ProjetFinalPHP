<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/CommonAction.php");
	require_once("action/dao/EquipeDAO.php");
	require_once("action/dao/PhotoDAO.php");
	class AdminEquipeAction extends CommonAction{
		private $equipe;
		private $modifier = false;
		private $id = "";
		private	$nom = "";
		private $cheminPhoto = "images/employes/manquante.png";
		private $description = "";
	public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_ADMIN, "Administration Carriere");
		}
		protected function executeAction(){
			if(isset($_POST["nom"])and isset($_POST["description"])){
				if($_FILES['photo']['size']>0){
					$this->cheminPhoto = PhotoDAO::setPhoto($_FILES['photo']['name'],$_FILES['photo']['tmp_name'],true);
				}
					if(isset($_POST["id"])){
						if(strcmp($_POST["bouton"],"modifier")==0){
							if($_FILES['photo']['size']>0){
								EquipeDAO::setEmploye($_POST["id"],$_POST["nom"], $_POST["description"],$this->cheminPhoto);
							}
							else{
								EquipeDAO::setEmployeSansPhoto($_POST["id"],$_POST["nom"], $_POST["description"]);
							}
						}
						else{
							EquipeDAO::deleteEmploye($_POST["id"]);
						}
					}
					else{
						EquipeDAO::nouvelEmploye($_POST["nom"], $_POST["description"],$this->cheminPhoto);
					}
			}
			$this->equipe = EquipeDAO::getEquipe();
			if(isset($_GET["employe"])){
				$this->modifier = true;
				$this->id = $this->equipe[$_GET["employe"]]["ID"];
				$this->nom = $this->equipe[$_GET["employe"]]['NOM'];
				$this->cheminPhoto = $this->equipe[$_GET["employe"]]['CHEMIN_PHOTO'];
				$this->description = $this->equipe[$_GET["employe"]]['DESCRIPTION'];
			}
		}
		
		public function getEquipe(){
			return $this->equipe;
		}
		public function getId(){
			return $this->id;
		}
		public function getNom(){
			return $this->nom;
		}
		public function getCheminPhoto(){
			return $this->cheminPhoto;
		}
		public function getDescription(){
			return $this->description;
		}
		public function aModifier(){
			return $this->modifier;
		}
	}