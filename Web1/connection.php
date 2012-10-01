<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/ConnectionAction.php");
	
	$action = new ConnectionAction();
	$action->execute();
	
	require_once("partial/header.php");
?>

	<form action="connection.php" method="post">
		
		<?php 
			if($action->echecConnection()){
		?>
				<div>
					Mot de passe non valide.
				</div>
		<?php 
			} 
		?>
		<div>
			<label for="nom">
				Nom d'usager : 
			</label>
			<input type="text" name="nom" id="nom" />
		</div>

		<div>
			<label for="motdepasse">
				Mot de passe : 
			</label>
			<input type="password" name="motdepasse" id="motdepasse" />
		</div>
		
		<input type="submit" value="Connexion" />
	</form>
<?php
	require_once("partial/footer.php");
	