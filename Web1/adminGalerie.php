<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/AdminGalerieAction.php");
	
	$action = new AdminGalerieAction();
	$action->execute();
	$photos = $action->getPhotos();
	require_once("partial/header.php");
?>
	<form action="adminGalerie.php" method="post" enctype="multipart/form-data">
	
	<input type="hidden" name="MAX_FILE_SIZE" id=value="100000" /> 
	<br />
	choisissez la photo : <input name="photo" type="file" /><br />
	<input type="submit" name="envoyer" value="envoyer" />
	</form>
	
	<form action="adminGalerie.php" method="post">
	<?php
		foreach($photos as $photo){
	?>
		<input type="checkbox" name="photoADeleter[]" value="<?php echo($photo);?>" />
		<img src="<?php echo($photo);?>" alt="" height="42" width="42" />
	<?php
		}
	?>
		<input type="submit" name="envoyer" value="deleter" />
		</form>
<?php
	require_once("partial/footer.php");
?>