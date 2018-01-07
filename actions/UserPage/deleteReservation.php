<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR.'database/UserPage/userPage.php');

  $reservaID = $_POST['ref_reserva'];

  try{
    delete_reservation($reservaID);
    $_SESSION['success_messages'][] = 'Reservation Deleted';
    header("Location: $BASE_URL" . 'pages/MyTours/mytours.php');
  }catch(PDOException $e){
    $_SESSION['error_messages'][] = 'Error deleting reservation: '.$e->getMessage();
    header("Location: $BASE_URL" . 'pages/MyTours/mytours.php');
  }


 ?>
