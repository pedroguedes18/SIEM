<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR.'database/SignIn/signIn.php');

  $aux = 0;

  if (!$_POST['usernameL'] || !$_POST['passwordL']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    $aux=1;
  }

  if($aux ==1){
    header("Location: $BASE_URL" . 'pages/SignIn/SignIn.php');
    exit;
  }

  $username = $_POST['usernameL'];
  $password = $_POST['passwordL'];

  if(isLoginCorrect($username, $password)){
    $_SESSION['username'] = $username;
    $_SESSION['success_messages'][] = "Login successful";
    $resp = isAdmin($username);

    if($resp['admin'])
      $_SESSION['admin'] = 'TRUE';
    else {
      $_SESSION['admin'] = 'FALSE';
    }

    header("Location: $BASE_URL");
  }
  else{
    $_SESSION['error_messages'][] = "Wrong Password or Username";
    header("Location: $BASE_URL" . 'pages/SignIn/SignIn.php');
  }

 ?>
