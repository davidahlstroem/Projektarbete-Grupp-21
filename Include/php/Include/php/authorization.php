<?php
//används ej (kanske är bra om det blir många inputs)
function isEmpty($array){
  foreach ($array as $value){
    if (empty($value)){ return true; }
  }
  return false;
}

function isEmail($value)
{
	//kollar efter 1 tecken, @ och .
	return (0 !== preg_match("/.+@.+\..+/", $value));
}

function isPassword($pass){
  return (0 !== preg_match("/.{6,}/",$pass));
}

?>
