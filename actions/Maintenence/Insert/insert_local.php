<?php
  include_once('../../../config/init.php');
  include_once($BASE_DIR.'database/Maintenence/maintenence.php');
  include_once($BASE_DIR.'database/Maintenence/maintenence_insert.php');

  $local_name = strip_tags($_POST['name_l']);
	$local_price = strip_tags($_POST['price_l']);
	$city = strip_tags($_POST['city']);
	$link_img = strip_tags($_POST['link_img_local']);

  //verifica se tour já existe
  if (checkLocal($local_name)['count']){
    $_SESSION['error_messages'][] = 'Local name already exists';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/Maintenence/Insert.php');
  }
  else {
    try{
      creatLocal($local_name,$local_price,$city ,$link_img);

      $_SESSION['success_messages'][] = 'Local inserted successfully';
      header("Location: $BASE_URL"  . 'pages/Maintenence/Insert.php');
    }catch(PDOException $e){
      $_SESSION['error_messages'][] = 'Error creating Local ' . $e->getMessage();
      $_SESSION['form_values'] = $_POST;
      header("Location: $BASE_URL" . 'pages/Maintenence/Insert.php');
    }
  }
 ?>
