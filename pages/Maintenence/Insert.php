<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR.'database/Maintenence/maintenence.php');

  if (isset($_SESSION['form_values'])) {
    $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
    unset($_SESSION['form_values']);
  }

  $_SESSION['page'] = "Maintenance-insert";
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
  $citys = getCitys();
  $kombis = getKombis();
  $smarty->assign('hotels', $hotels);
  $smarty->assign('citys', $citys);
  $smarty->assign('kombis', $kombis);

  $smarty->display('Maintenence/insert.tpl');

?>
