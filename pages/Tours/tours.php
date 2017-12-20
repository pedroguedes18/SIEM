<?php
  include ('../../config/init.php');
  include_once ('../../database/Tours/getTours.php');
  include_once ('../../database/Cities/cities.php');
  include_once ('../../database/Tours/filterTours.php');

  //$smarty->display('booking/booking.tpl');


  $tours = getAllTours();
  $cities = getAllCities();

  $smarty->assign('tours', $tours);
  $smarty->assign('cities', $cities);

  $smarty->display('tours/tours.tpl');

  if(isset($_GET['SearchTour'])){
				$cidade_req = $_GET['Cidade'];
				$price_req = $_GET['PriceMax'];
				$viajantes_req = $_GET['Viajantes'];
				$order_req = $_GET['Order'];
        print("hello");
        print("estou aqui");
        print($cidade_req);
        print($price_req);
        print($viajantes_req);
        print($order_req);
        var_dump($_GET);
        //$toursFiltrados = filterData($cidade_req,$price_req,$viajantes_req,$order_req);
        //$smarty->assign('toursFiltrados',$toursFiltrados);
        //$smarty->assign('price', $price_req);
  }

  var_dump($_GET);
  //print("hello");


  //<p> <span id="PriceReq"></span> </p>
  //<p> <span id="ViajantesReq"></span> </p>
  //<p> <span id="OrderReq"></span> </p>


?>
