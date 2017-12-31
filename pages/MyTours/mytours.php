<?php
  include ('../../config/init.php');

  $_SESSION['page'] = "MyTours";
  $smarty->assign('PAGE', $_SESSION['page']);

  if (!isset($_SESSION['username'])) {
    $_SESSION['error_messages'] = 'You dont have permissions';
    header("Location: $BASE_URL");
    exit;
  }

  $smarty->display('MyTours/mytours.tpl');

?>
