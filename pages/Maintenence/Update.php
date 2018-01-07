<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR.'database/Maintenence/maintenence.php');

  $_SESSION['page'] = "Maintenance-update";
  $smarty->assign('PAGE', $_SESSION['page']);

  if (!isset($_SESSION['username'])) {
    $_SESSION['error_messages'] = 'You dont have permissions';
    header("Location: $BASE_URL");
    exit;
  }

  if($_SESSION['admin'] == 'FALSE'){
    $_SESSION['error_messages'] = 'You dont have permissions';
    header("Location: $BASE_URL");
    exit;
  }

  $hotels = getHotels();
  $smarty->assign('hotels', $hotels);

  if(!isset($_POST['Hotel']))
    $smarty->display('Maintenence/update.tpl');
  else{
    $smarty->assign('ref_hotel', $_POST['Hotel']);
    $smarty->display('Maintenence/updateHotel.tpl');
  }

?>
