<?php

	$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$url = explode('index.php',$url);
	if(isset($url[1])){
		$tmp = explode('=',$url[1]);
		$page = explode('?',$tmp[1]);
	
		switch($page[0]){
			case 'accueil':
				include "PHP/article/accueil.php";
				break;
			case 'inscription':
				include "PHP/formulaires/inscription.php";
				break;
			case 'contact':
				include "PHP/formulaires/contact.php";
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
