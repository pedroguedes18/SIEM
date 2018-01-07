<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR.'database/Maintenence/maintenence.php');

  if (isset($_SESSION['form_values'])) {
    $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
    unset($_SESSION['form_values']);
  }

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

  $locals = getLocals2remove();
  $smarty->assign('locals', $locals);

  $smarty->display('Maintenence/remove.tpl');
?>
