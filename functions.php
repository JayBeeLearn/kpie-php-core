<?php

CONST BASE_PATH = __DIR__.'/../';

// function dd($value){
//     echo '<pre>';
//   var_dump($value);
//   echo '</pre>';

//   die();
// }

function base_path($path){
  return BASE_PATH . $path;
}

function view ($path, $attributes =[]){
  extract($attributes);
  require base_path('views/' . $path);
}
