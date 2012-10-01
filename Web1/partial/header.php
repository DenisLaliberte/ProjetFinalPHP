<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php echo($action->getPageName()); ?></title>
	
	<link href="css/global.css" rel="stylesheet" type="text/css" media="screen" />   
	<link href="css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" media="screen" />     
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
</head>
<body>
	<div class="main">
		<div class="titre">
		<h1>DynamiqueKoncept</h1>
		<h2 class="soustitre"><?php echo($action->getPageName()); ?></h2>
		</div>
			<div class="cadre"><div class="photo"></div></div>
					
				<div class="menu">
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li>~</li>
						<li><a href="compagnie.php">compagnie</a></li>
						<li>~</li>
						<li><a href="carriere.php">Carrière</a></li>
						<li>~</li>
						<li><a href="equipe.php">Équipe</a></li>
						<li>~</li>
						<li><a href="galerie.php">Galerie Photos</a></li>
						<li>~</li>
						<li><a href="services.php">Services</a></li>
						<li>~</li>
						<li><a href="contact.php">Contactez-nous</a></li>
						
						<?php
						if($action->estAdministrateur()){
						?>
						<br/>
						<li><a href="administration.php">[Aceuil Admin]</a></li>
						<li><a href="adminCarriere.php">[Admin Carriere]</a></li>
						<li><a href="adminEquipe.php">[Admin Equipe]</a></li>
						<li><a href="adminGalerie.php">[Admin Galerie]</a></li>
						<li><a href="easterEgg/tetris.htm">perte de temps</a></li>
						<li><a href="<?php echo($action->getCurrentPage()) ?>?deconnection">[deconnection]</a></li>
						<?php
						} else{
						?>
						<li>~</li>
						<li><a href="connection.php">login</a></li>
						<?php 
						}
						?>
						
					</ul>
					
					<div class="espace"></div>
					<div class="ligne"></div>	
				</div>
	<div class="contenu">
		<div class="texte">
		
		
		
		
		
		
		
		
		
		
		
		
	