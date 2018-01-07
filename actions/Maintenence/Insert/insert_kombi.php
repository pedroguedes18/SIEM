<?php
  include_once('../../../config/init.php');
  include_once($BASE_DIR.'database/Maintenence/maintenence.php');
  include_once($BASE_DIR.'database/Maintenence/maintenence_insert.php');

  $kombi_name = strip_tags($_POST['name_k']);

  //verifica se tour já existe
  if (checkKombi($kombi_name)['count']){
    $_SESSION['error_messages'][] = 'Kombi name already exists';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/Maintenence/Insert.php');
  }
  else {
    try{
      creatKombi($kombi_name);

      $_SESSION['success_messages'][] = 'Kombi inserted successfully';
      header("Location: $BASE_URL"  . 'pages/Maintenence/Insert.php');
    }catch(PDOException $e){
      $_SESSION['error_messages'][] = 'Error creating Kombi ' . $e->getMessage();
      $_SESSION['form_values'] = $_POST;
      header("Location: $BASE_URL" . 'pages/Maintenence/Insert.php');
    }
  }
 ?>
