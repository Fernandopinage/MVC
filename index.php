<?php

use App\route\Route;

require_once  __DIR__ . '/vendor/autoload.php';

$url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

if (!empty($url)) {

   $url = array_filter(explode('/', $url));

   $tamanho  = count($url);

   switch ($tamanho) {

      case 1:
         Route::file($url[0]);
         break;
      case 2:
         Route::pages($url[0],$url[1]);
         break;
      default:
         Route::index();
         break;
   }
} else {

   Route::index();
}
