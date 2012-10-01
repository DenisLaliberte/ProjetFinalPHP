<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/AdminEquipeAction.php");
	$action = new AdminEquipeAction();
	$action->execute();
	$equipe = $action->getEquipe();
	
	require_once("partial/header.php");
?>
	<?php if($action->aModifier()){
	?>
		<form action="AdminEquipe.php" method="get">
			<input type="submit" value="nouveau" />
		</form>
	<?php 
	}
	else{
	?>
		<form action="AdminEquipe.php" method="get">
			<select name="employe" >
				<?php
					$i=0;
					foreach($equipe as $employe){
				?>
						<option value="<?php echo($i); ?>"> <?php echo($employe["NOM"]); ?> </option>
				<?php 
						$i++;
					}
				?>
			</select>
		<input type="submit" value="modifier" />
		</form>
	<?php 
	}
	?>

	<form action="AdminEquipe.php" method="post" enctype="multipart/form-data">
		nom <input type="text" name="nom" value="<?php echo($action->getNom());?>"/><br/>
		<input type="hidden" name="MAX_FILE_SIZE" id=value="100000" /> 
		choisissez la photo : <input name="photo" type="file" /><br />
		<?php if($action->aModifier()){
		?>
		<img src="<?php echo($action->getCheminPhoto())?>" alt="Photo de <?php echo($action->getNom())?>"/>
		<br/>
		<?php
			}
		?>
		<textarea id="text" name="description" rows="10" cols="30"><?php echo($action->getDescription());?></textarea><br/>
		<?php if($action->aModifier()){
		?>
			
			<input type="hidden" name="id" value="<?php echo($action->getId());?>" />
			<input type="submit" name ="bouton" value="modifier" />
			<input type="submit" name="bouton" value="supprimer" />
		<?php
			}
			else{
		?>
			<input type="submit" value="envoyer" />
		<?php
			}
		?>
	</form>

