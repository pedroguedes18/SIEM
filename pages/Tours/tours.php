<?php
  include ('../../config/init.php');
  include_once ('../../database/Tours/tours.php');
  include_once ('../../database/Cities/cities.php');

  $tours = getAllTours();
  $cities = getAllCities();

  $smarty->assign('tours', $tours);
  $smarty->assign('cities', $cities);

  $smarty->display('tours/tours.tpl');

?>
