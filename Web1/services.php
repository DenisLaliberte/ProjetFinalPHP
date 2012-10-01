<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/ServicesAction.php");
	
	$action = new ServicesAction();
	$action->execute();

	require_once("partial/header.php");
?>

	<div>
	<?php
		echo($action->getTexte());
	?>
	</div>


<?php
	require_once("partial/footer.php");
?>