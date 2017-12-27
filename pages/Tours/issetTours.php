<?php
  include ('../../config/init.php');

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
        //var_dump($_GET);
        //$toursFiltrados = filterData($cidade_req,$price_req,$viajantes_req,$order_req);
        //$smarty->assign('toursFiltrados',$toursFiltrados);
        //$smarty->assign('price', $price_req);
  }

?>
