<?php

	$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$url = explode('index.php',$url);
	if(isset($url[1])){
		$tmp = explode('=',$url[1]);
		$page = explode('?',$tmp[1]);
	
		switch($page[0]){
			
			/* Pages simples */
			case 'accueil':
				include "PHP/article/accueil.php";
				break;
			case 'contact':
				include "PHP/formulaires/contact.php";
				break;
			case 'forum':
				header("location: http://www.familys-team.com");
				break;
			
			/* Pages de familys team */
			case 'historique':
				include "PHP/articles/familysteam/historique.php";
				break;
			case 'profil':
				include "PHP/articles/familysteam/profil.php";
				break;
			case 'recensement':
				include "PHP/articles/familysteam/recensement.php";
				break;

			/* Pages de gaming */
			case 'historique_gaming':
				include "PHP/articles/gaming/historique_gaming.php";
				break;
			case 'planning':
				include "PHP/articles/gaming/planning.php";
				break;
			case 'previsions':
				include "PHP/articles/gaming/previsions.php";
				break;
				
			/* Pages de news */
			case 'insideft':
				include "PHP/articles/news/insideft.php";
				break;
			case 'jeuxft':
				include "PHP/articles/news/jeuxft.php";
				break;
				
			/* Pages persos */
			case 'infos_perso':
				include "PHP/articles/perso/infos_perso.php";
				break;
			case 'messagerie':
				include "PHP/articles/perso/messagerie.php";
				break;
				
			/* Pages de promotion */
			case 'gaming':
				include "PHP/articles/promotion/gaming.php";
				break;
				
			default:
				include "PHP/article/accueil.php";
				break;
		}
	}
	else{
		include "PHP/article/accueil.php";
	}

?>
