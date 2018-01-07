<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR.'database/UserPage/userPage.php');

  $_SESSION['page'] = "MyTours";
  $smarty->assign('PAGE', $_SESSION['page']);

  if (!isset($_SESSION['username'])) {
    $_SESSION['error_messages'] = 'You dont have permissions';
    header("Location: $BASE_URL");
    exit;
  }

  $reservations = getAllreservations($_SESSION['username']);
  $numReservations = getNumReservations($_SESSION['username']);
  $atractions = array();
  $numAtractions = array();
  foreach ($reservations as $reservation) {
    array_push($atractions, getAtractions($reservation['ref_reserva']));
    array_push($numAtractions,  getNumAtractions($reservation['ref_reserva']));
  }

  $smarty->assign('reservations', $reservations);
  $smarty->assign('numReservations', $numReservations);
  $smarty->assign('atractions', $atractions);
  $smarty->assign('numAtractions', $numAtractions);

  $smarty->display('MyTours/mytours.tpl');

?>
