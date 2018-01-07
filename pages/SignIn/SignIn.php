<?php
  include ('../../config/init.php');

  if (isset($_SESSION['form_values'])) {
    $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
    unset($_SESSION['form_values']);
  }

  $_SESSION['page'] = "SignIn";
  $smarty->assign('PAGE', $_SESSION['page']);

  if (isset($_SESSION['username'])) {
    $_SESSION['error_messages'] = 'You are already loged in';
    header("Location: $BASE_URL");
    exit;
  }

  $smarty->display('SignIn/SignIn.tpl');

?>
