<?php
//muestra los datos del una variable
function dd($value){
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die();
}
//retorna si es o no el path ingresado pro parametors
function isThisPage($path){
  return $_SERVER['REQUEST_URI'] === $path;
}