<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/CompagnieAction.php");
	
	$action = new CompagnieAction();
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