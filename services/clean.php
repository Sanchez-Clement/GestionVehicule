<?php

/** check if the param are not empty and sanityze them
 *@param array ($post)
 *@return empty
 */
function Clean($POST) {
  foreach ($POST as $key => $value) {
  if(empty($POST[$key])) {
    $error = "un des champs est manquants";
    return $error ;
  }
  filter_var ( $POST[$key], FILTER_SANITIZE_STRING);

  }
  
}

 ?>
