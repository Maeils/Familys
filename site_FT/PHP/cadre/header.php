<!doctype html>
<html xml:lang="fr" lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Site de la Family's Team</title>
  <link rel="stylesheet" href=<?php echo "\"".$chemin_css."style.css\""?>>
  <!-- Ce qu'il faut pour le slider -->
	<link rel="stylesheet" href="JS/nivo-slider/nivo-slider.css">
	<link rel="stylesheet" href="JS/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="JS/nivo-slider/themes/light/light.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="JS/nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="JS/nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
	<!-- Js pour les menus -->
	<script type="text/javascript" src=<?php echo "\"".$chemin_js."menus.js\""; ?> ></script>
</head>

<body>
	<div id="banniere">
		<img id="logo_ft" class="banniere" src=<?php echo "\"".$chemin_images_design."embleme.png\"" ?> alt="logo FT"/>
		<div id="banniere_ft" class="banniere">
			<img id="ft" src=<?php echo "\"".$chemin_images_design."ft.png\"" ?> alt="ft"/>
		</div>
		<!-- connexion représente le cadre de connexion -->
		<div id="connexion_deconnexion" class="banniere">
			<?php
				if((!(isset($_SESSION['pseudo']))) || ($_SESSION['pseudo'] == "")){
					echo '<div id="connexion">
						<form action="php/traitement/connexion.php" method="post" name="connexion" id="connexion">
							<p>pseudo : <input type="text" size="10" maxlength="30" name="pseudo"/></p>
							<p>mdp : <input type="text" size="10" maxlength="30" name="mdp"/></p>
							<p id="boutton"><input type="submit" value="connexion"/></p>
						</form>
						</div>';
				} else {
					echo '<div id="deconnexion">
						<p>Bonjour '.$_SESSION['pseudo'].'</p>
						<form action="php/traitement/deconnexion.php" method="post" name="deconnexion" id="deconnexion">
							<p><input type="submit" value="deconnexion"/></p>
						</form>
						</div>';
				}
			?>
		</div>
		<div class="fin_float"></div>
	</div>
	<div id="body">