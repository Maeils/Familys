<?php

/* fonction qui sécurise $string pour éviter les injections */
function securite_bdd($string)
{
  if (ctype_digit($string)) {
    $string = intval($string);
  } else {
    $string = mysql_real_escape_string($string);
    $string = addcslashes($string, '%_');
  }
        
  return $string;
}

/* fonction qui renvoie l'url de la page souhaitée selon le paramètre $page */
function url_page($page)
{
  return 'http://www.familysteam.com/index.php?page=' + $page;
}

/* fonction qui retourne la valeur d'un paramètre dans l'url si le paramètre existe */
function get_value_parameter_url($url, $parameter)
{
  
	$url = explode('index.php',$url);
	
	if (isset($url[1])) {
	  
		$tmp = explode('?',$url[1]);
		$tmp = explode('&', $tmp[1]);
		
		/* on cherche si l'un des paramètres de l'url est "page" */
		$page = explode('=', $tmp[1]);
		$testpage = $page[0];
		$max = sizeof($tmp);
		
		for ($i = 0; $i < $max && $testpage != 'page'; ++$i) {
			$page = explode('=', $tmp[$i + 1]);
			$testpage = $page[0];
		}
		
		if ($testpage == 'page' AND file_exists($page[1].'.php')) {
		  return $page[1];
		} else {
  		return '';
		}
	}
	else{
		return '';
	}
}

?>
