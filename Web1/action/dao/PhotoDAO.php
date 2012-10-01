<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	class PhotoDAO {
		public static $dossierPhotos = "images/photosUploade/";
		public static $dossierEmploye = "images/employes/";
		
		private static function type($employe){
			if($employe){
				return PhotoDAO::$dossierEmploye;
			}
			else{
				return PhotoDAO::$dossierEmploye;
			}
		}
		public static function setPhoto($nomFichier,$fichierTemporaire,$employe=false) {
			$dossier = PhotoDAO::type($employe);
			$chemin =  $dossier . basename( $nomFichier); 
			$variableInnutile =  move_uploaded_file($fichierTemporaire, $chemin);
			return $chemin;
		}
		public static function deletePhoto($tableauPhoto){
			foreach($tableauPhoto as $photo){
					unlink($photo);
				}
		}
		public static function getPhotos(){
			$tableaPhotos = array();
			if ($dossierPhotos = opendir(PhotoDAO::$dossierPhotos)) {
				while (false !== ($photo = readdir($dossierPhotos))) {
					if ($photo != "." && $photo != "..") {
					$tableaPhotos[] = PhotoDAO::$dossierPhotos . $photo;
					}
				}
			} 
			return $tableaPhotos;
		}
		
	}