<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/CarriereAction.php");
	
	$action = new CarriereAction();
	$action->execute();
	$carrieres = $action->getPostes();
	require_once("partial/header.php");

		foreach($carrieres as $carriere){
	?>
		<div>
			<h3><?php echo( $carriere["NOM"]); ?></h3>
			<p class="petit" >Date d'affichage :<?php echo($carriere["DATE_DAFFICHAGE"]);?></p>
			<p><?php echo($carriere["DESCRIPTION"]);?></p>
			<br/>
		</div>
<?php

}
	require_once("partial/footer.php");
?>