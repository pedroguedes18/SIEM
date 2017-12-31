<?php
  session_set_cookie_params(3600, '/~ee12144/trabalhosSiem/trabalhoPHP-2/');
  session_start();

  $BASE_DIR = '/usr/users2/mieec2012/ee12144/public_html/trabalhosSiem/trabalhoPHP-2/';
  $BASE_URL = 'https://gnomo.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-2/';

  $conn = new PDO('pgsql:host=db.fe.up.pt;dbname=siem1737', 'siem1737', 'basedados123');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare("set schema 'kombiwithus'");
  $stmt->execute();

  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);

  if (isset($_SESSION['error_messages'])){
    $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
    unset($_SESSION['error_messages']);
  }

  if (isset($_SESSION['success_messages'])) {
    $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
    unset($_SESSION['success_messages']);
  }

  if (isset($_SESSION['username'])) {
    $smarty->assign('USERNAME', $_SESSION['username']);
  }

  if (isset($_SESSION['admin'])){
    $smarty->assign('ADMIN', $_SESSION['admin']);
  }
  else {
    $_SESSION['admin'] = 'FALSE';
    $smarty->assign('ADMIN', $_SESSION['admin']);
  }

?>
