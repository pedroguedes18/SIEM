<?php
  include ('../../config/init.php');

  $_SESSION['page'] = "InitialPage";
  $smarty->assign('PAGE', $_SESSION['page']);

  $smarty->display('initialPage/initialPage.tpl');

?>
