<?php

  $BASE_DIR = '/usr/users2/mieec2012/ee12144/public_html/trabalhosSiem/trabalhoPHP-2/';
  $BASE_URL = 'https://gnomo.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-2/';

  $conn = new PDO('pgsql:host=db.fe.up.pt;dbname=siem1737', 'siem1737', 'basedados123');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);
?>
