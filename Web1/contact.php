<?php
/*-------------------------------------------------------
*				Projet synthèse : H2012					*
*				Auteur : Denis Laliberte				*
*-------------------------------------------------------*/
	require_once("action/ContactAction.php");
	
	$action = new ContactAction();
	$action->execute();

	require_once("partial/header.php");

	if($action->getReussite()){
?>
	<p>votre message as bien été envoyé : </p>
	<p>
		<?php echo($action->getMessage());?>
	</p>
<?php
	}
	else {
?>

		<form action="contact.php" method="post">
			Sujet : <input type="text" name="sujet" /><br />
			Prénom : <input type="text" name="prenom" />
			Nom : <input type="text" name="nom" /><br />
			Courriel: <input type="text" name="courriel" /><br />
			Message: <br /><textarea rows="10" cols="30" name="message"></textarea>
			<input type="submit" value="Envoyer" />
		</form>
		
		<div>ceci est mon adresse</div>
		<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=255,+rue+Ontario+Est+Montr%C3%A9al+(Qu%C3%A9bec)+H2X+1X6&amp;aq=&amp;sll=45.609715,-73.400345&amp;sspn=0.352086,0.577469&amp;ie=UTF8&amp;hq=&amp;hnear=255+Rue+Ontario+Est,+Montr%C3%A9al,+Communaut%C3%A9-Urbaine-de-Montr%C3%A9al,+Qu%C3%A9bec+H2X&amp;t=m&amp;z=14&amp;ll=45.514657,-73.565851&amp;output=embed"></iframe><br /><small><a href="http://maps.google.ca/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=255,+rue+Ontario+Est+Montr%C3%A9al+(Qu%C3%A9bec)+H2X+1X6&amp;aq=&amp;sll=45.609715,-73.400345&amp;sspn=0.352086,0.577469&amp;ie=UTF8&amp;hq=&amp;hnear=255+Rue+Ontario+Est,+Montr%C3%A9al,+Communaut%C3%A9-Urbaine-de-Montr%C3%A9al,+Qu%C3%A9bec+H2X&amp;t=m&amp;z=14&amp;ll=45.514657,-73.565851" style="color:#0000FF;text-align:left">Agrandir le plan</a></small>

<?php
	}
	require_once("partial/footer.php");
?>