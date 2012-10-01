<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/AdministrationAction.php");
	$action = new AdministrationAction();
	$action->execute();

	require_once("partial/header.php");
?>
	<script type="text/javascript" >
		var texte = new Array();
		texte[0]="<?php echo($action->getAcceuil()); ?>";
		texte[1]="<?php echo($action->getCompagnie()); ?>";
		texte[2]="<?php echo($action->getServices()); ?>";
		
		function changeTexte(selection){
			CKEDITOR.instances.text.setData( texte[selection] );
		}
	</script>
	<?php 
		if(strlen($action->getEnregistrement())!=0){
	?>
		<div> 
			Le texte de la section <?php echo($action->getEnregistrement())?> as été modifié;
		</div>
	<?php
		}
	?>
	
	<form action="administration.php" method="post">
		<textarea id="text" name="text" rows="10" cols="30"><?php echo($action->getAcceuil()); ?></textarea>
		<script type="text/javascript">
			CKEDITOR.replace( 'text',{
							toolbar : 'Basic',
							} );
		</script>
		
		<select name="page" onchange="changeTexte(this.selectedIndex)">
			<option value="<?php echo(CommonAction::$ACCEUIL); ?>">Acceuil</option>
			<option value="<?php echo(CommonAction::$COMPAGNIE); ?>">Compagnie</option>
			<option value="<?php echo(CommonAction::$SERVICES); ?>">Services</option>
		</select>
		
		<input type="submit" value="envoyer" />
	</form>

<?php
	require_once("partial/footer.php");
?>