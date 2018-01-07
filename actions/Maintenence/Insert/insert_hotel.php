<?php
  include_once('../../../config/init.php');
  include_once($BASE_DIR.'database/Maintenence/maintenence.php');
  include_once($BASE_DIR.'database/Maintenence/maintenence_insert.php');

  $hotel_name = strip_tags($_POST['name_h']);
	$hotel_price = strip_tags($_POST['price_h']);
	$wifi = strip_tags($_POST['wifi']);
	$pool = strip_tags($_POST['pool']);
	$stars = strip_tags($_POST['stars']);
	$link_img = strip_tags($_POST['link_img_hotel']);

  //verifica se tour já existe
  if (checkHotel($hotel_name)['count']){
    $_SESSION['error_messages'][] = 'Hotel name already exists';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/Maintenence/Insert.php');
  }
  else {
    try{
      creatHotel($hotel_name, $hotel_price, $wifi,$pool,$stars,$link_img);

      $_SESSION['success_messages'][] = 'Hotel inserted successfully';
      header("Location: $BASE_URL"  . 'pages/Maintenence/Insert.php');
    }catch(PDOException $e){
      $_SESSION['error_messages'][] = 'Error creating Hotel ' . $e->getMessage();
      $_SESSION['form_values'] = $_POST;
      header("Location: $BASE_URL" . 'pages/Maintenence/Insert.php');
    }
  }
 ?>
