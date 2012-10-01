<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/EquipeAction.php");
	
	$action = new EquipeAction();
	$action->execute();
	$equipe= $action->getEquipe();
	require_once("partial/header.php");
	
	foreach($equipe as $employe){
	?>
		
		<h3><?php echo($employe["NOM"])?> </h3>
		<img src="<?php echo($employe["CHEMIN_PHOTO"])?>" alt="Photo de <?php echo($employe["NOM"])?>"/>
		<div>
			<?php echo($employe["DESCRIPTION"])?>
		</div>
		<br/>
<?php

	}
	require_once("partial/footer.php");
?>