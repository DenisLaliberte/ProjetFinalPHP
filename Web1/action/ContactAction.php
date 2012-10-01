<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/CommonAction.php");	
	class ContactAction extends CommonAction{
	public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC, CommonAction::$ACCEUIL);
		}
			private $reussite=false;
			private $message="";
			private $contact = "ftheriault@cvm.qc.ca";
		protected function executeAction(){
		//attention on ne fait rien encore avec le courriel
			if(isset($_POST["courriel"]) and isset($_POST["sujet"])){
				$this->message = $_POST["message"];
				$this->message = "message envoyé par " . $_POST["nom"] ." ". $_POST["prenom"] . " adresse de retour " . $_POST["courriel"] . $this->message;
				$this->message= wordwrap($this->message, 70);
				$this->message = str_replace("\n.", "\n..", $this->message);
				ini_set('SMTP','cigogne.cvm.qc.ca');
				ini_set('sendmail_from','ftheriault@cvm.qc.ca');
				$this->reussite = mail($this->contact, $_POST["sujet"],$this->message );
			}	
		} 
		public function getReussite(){
			return $this->reussite;
		}
			
		public function getMessage(){
			return $this->message;
		
		}
	}