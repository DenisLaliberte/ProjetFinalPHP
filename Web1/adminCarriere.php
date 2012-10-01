<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/AdminCarriereAction.php");
	$action = new AdminCarriereAction();
	$action->execute();
	$postes = $action->getAllPostes();
	
	require_once("partial/header.php");
	// a ajouter au select onchange="changeTexte(texte[this.selectedIndex])"
?>
	<?php if($action->aModifier()){
	?>
		<form action="AdminCarriere.php" method="get">
			<input type="submit" value="nouveau" />
		</form>
	<?php 
	}
	else{
	?>
		<form action="AdminCarriere.php" method="get">
			<select name="poste" >
				<?php
					$i=0;
					foreach($postes as $poste){
				?>
						<option value="<?php echo($i); ?>"> <?php echo($poste["NOM"] . " ".$poste["DATE_DAFFICHAGE"] ); ?> </option>
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

	<form action="AdminCarriere.php" method="post">
		nom <input type="text" name="nom" value="<?php echo($action->getNom());?>"/><br/>
		date ( yy/mm/dd )<input type="text" name="date" value="<?php echo($action->getdate());?>"/><br/>
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

