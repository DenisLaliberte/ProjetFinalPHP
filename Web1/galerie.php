<?php
	require_once("action/GalerieAction.php");
	
	$action = new GalerieAction();
	$action->execute();
	$tableauPhoto = $action->getPhotos();
	require_once("partial/header.php");
	
	foreach($tableauPhoto as $photo){
?>
	<a class="lightbox" href="<?php echo($photo);?>"><img  src="<?php echo($photo);?>" width="72" height="72" alt="" /></a>

	<script type="text/javascript">
$(function() {
	$('a.lightbox').lightBox(); // Select all links with lightbox class
});
</script>
	
<?php
	}

	require_once("partial/footer.php");
?>