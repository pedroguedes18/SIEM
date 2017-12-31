<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR.'database/SignIn/signIn.php');

  $aux = 0;

  if (!$_POST['name'] || !$_POST['email'] || !$_POST['contact'] || !$_POST['username'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    $aux = 1;
  }

  if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $_SESSION['error_messages'][] = 'Invalid email format';
      $_SESSION['form_values'] = $_POST;
      $aux = 1;
  }

  if($aux ==1){
    header("Location: $BASE_URL" . 'pages/SignIn/SignIn.php');
    exit;
  }

  $name = strip_tags($_POST['name']);
  $email = strip_tags($_POST['email']);
  $contact = strip_tags($_POST['contact']);
  $username = strip_tags($_POST['username']);
  $password = strip_tags($_POST['password']);

  if (checkUsersame($username)['count']){
    $_SESSION['error_messages'][] = 'Username already exists';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/SignIn/SignIn.php');
  }
  else {
    try{
      createUser($name, $email, $contact, $username, $password);
      $_SESSION['success_messages'][] = 'User registered successfully';
      header("Location: $BASE_URL");
    }catch(PDOException $e){
      $_SESSION['error_messages'][] = 'Error creating user';
      header("Location: $BASE_URL" . 'pages/SignIn/SignIn.php');
    }
  }

?>
