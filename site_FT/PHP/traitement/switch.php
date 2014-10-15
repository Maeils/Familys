<?php

	$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$page = '';
	$page = get_value_parameter_url($url, 'page');
		
	if ($page != '') {

		switch($page){
			
			/* Pages simples */
			case 'accueil':
				include $chemin_articles."accueil.php";
				break;
			case 'contact':
				include $chemin_articles."contact.php";
				break;
			case 'forum':
				/* Il faut changer le header. Comme l'index.php a déjà inclu du php générant du
				html, ce cas va péter une erreur. Chercher du côté de redirect. */
				header("location: http://www.familys-team.com");
				break;
			
			/* Pages de familys team */
			case 'historique':
				include $chemin_familysteam."historique.php";
				break;
			case 'profil':
				include $chemin_familysteam."profil.php";
				break;
			case 'recensement':
				include $chemin_familysteam."recensement.php";
				break;
	
			/* Pages de gaming */
			case 'historique_gaming':
				include $chemin_gaming."historique_gaming.php";
				break;
			case 'planning':
				include $chemin_gaming."planning.php";
				break;
			case 'previsions':
				include $chemin_gaming."previsions.php";
				break;
				
			/* Pages de news */
			case 'insideft':
				include $chemin_news."insideft.php";
				break;
			case 'jeuxft':
				include $chemin_news."jeuxft.php";
				break;
			case 'zoom_news':
				include $chemin_news."zoom_news.php";
				break;
				
			/* Pages persos */
			case 'infos_perso':
				include $chemin_perso."infos_perso.php";
				break;
			case 'messagerie':
				include $chemin_perso."messagerie.php";
				break;
				
			/* Pages de promotion */
			case 'gaming':
				include $chemin_promotion."gaming.php";
				break;
				
			default:
				include $chemin_article."accueil.php";
				break;
		}
	} else {
	include $chemin_article."accueil.php";
	}

?>
