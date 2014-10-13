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

?>
