<?php
  include_once('../../../config/init.php');
  include_once($BASE_DIR.'database/Maintenence/maintenence_update.php');

  $aux = 0;

  $ref_hotel = $_POST['ref_hotel'];

  $aux = 0;

  if($_POST['name_h'] != ''){
    $hotel_name = strip_tags($_POST['name_h']);
    updateHotelName($hotel_name, $ref_hotel);
    $aux = 1;
  }

  if($_POST['price_h'] != ''){
    $hotel_price = strip_tags($_POST['price_h']);
    updateHotelPrice($hotel_price, $ref_hotel);
    $aux = 1;
  }

  if(isset($_POST['wifi'])){
    $wifi = strip_tags($_POST['wifi']);
    updateHotelWifi($wifi, $ref_hotel);
    $aux = 1;
  }

  if(isset($_POST['pool'])){
    $pool = strip_tags($_POST['pool']);
    updateHotelPool($pool, $ref_hotel);
    $aux = 1;
  }

  if(isset($_POST['stars'])){
    $stars = strip_tags($_POST['stars']);
    updateHotelStars($stars,$ref_hotel);
    $aux = 1;
  }

  if($_POST['link_img_hotel'] != ''){
    $link_img_hotel = strip_tags($_POST['link_img_hotel']);
    updateHotelLinkImg($link_img_hotel,$ref_hotel);
    $aux = 1;
  }

  if($aux == 1){
    $_SESSION['success_messages'][] = 'Hotel modified successfully';
    header("Location: $BASE_URL" . 'pages/Maintenence/Update.php');
  }
  else{
    $_SESSION['error_messages'][] = 'At least one field is needed';
    header("Location: $BASE_URL" . 'pages/Maintenence/Update.php');
  }


?>
