<?php


function validarCampo($campo){

  //campos que se pasan por post

  $campo = trim($campo);  //limpia espacios final y inicio
  $campo = stripcslashes($campo); //limpio de slach /
  $campo = htmlspecialchars($campo); // limpia etiquetas html y <scrip>

  return $campo;

}


 ?>
