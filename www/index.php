<?php
$buisnes = [
  'name' => 'Laracasts',
  'cost' => 15,
  'categories' => ["Testing", "PHP", "JavaScript"]
];

function dd($value){
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die();
}

function isThisPage($path){
  return $_SERVER['REQUEST_URI'] === $path;
}

require "views/index.view.php";
dd($_SERVER);