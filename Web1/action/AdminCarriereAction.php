<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/CommonAction.php");
	require_once("action/dao/PosteDAO.php");
	class AdminCarriereAction extends CommonAction{
		private $tableauPoste;
		private $modifier = false;
		private $id = "";
		private	$nom = "";
		private $date = "";
		private $description = "";
	public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_ADMIN, "Administration Carriere");
		}
		protected function executeAction(){
			if(isset($_POST["nom"])and isset($_POST["description"])and isset($_POST["date"])){
				
				if(isset($_POST["id"])){
					if(strcmp($_POST["bouton"],"modifier")==0){
						PosteDAO::setPoste($_POST["id"],$_POST["nom"], $_POST["description"], $_POST["date"]);
					}
				else{
					PosteDAO::deletePoste($_POST["id"]);
				}
				}
				else{
					PosteDAO::nouveauPoste($_POST["nom"], $_POST["description"], $_POST["date"]);
				}
			}
			$this->tableauPoste = PosteDAO::getAllPostes();
			if(isset($_GET["poste"])){
				$this->modifier = true;
				$this->id = $this->tableauPoste[$_GET["poste"]]["ID"];
				$this->nom = $this->tableauPoste[$_GET["poste"] ]['NOM'];
				$this->date = $this->tableauPoste[$_GET["poste"]]['DATE_DAFFICHAGE'];
				$this->description = $this->tableauPoste[$_GET["poste"]]['DESCRIPTION'];
			}
		}
		
		public function getAllPostes(){
			return $this->tableauPoste;
		}
		public function getId(){
			return $this->id;
		}
		public function getNom(){
			return $this->nom;
		}
		public function getDate(){
			return $this->date;
		}
		public function getDescription(){
			return $this->description;
		}
		public function aModifier(){
			return $this->modifier;
		}
		
		
	}