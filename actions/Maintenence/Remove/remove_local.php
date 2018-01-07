<?php
  include_once('../../../config/init.php');
  include_once($BASE_DIR.'database/Maintenence/maintenence_remove.php');

  $id_local = strip_tags($_POST['local']);

  try{
    deleteLocal($id_local);
    $_SESSION['success_messages'][] = 'Local deleted';
    header("Location: $BASE_URL"  . 'pages/Maintenence/Remove.php');
  }catch(PDOException $e){
    $_SESSION['error_messages'][] = 'Error deleting Local ' . $e->getMessage();
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/Maintenence/Remove.php');
  }

 ?>
