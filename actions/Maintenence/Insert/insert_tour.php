<?php
  include_once('../../../config/init.php');
  include_once($BASE_DIR.'database/Maintenence/maintenence.php');
  include_once($BASE_DIR.'database/Maintenence/maintenence_insert.php');

  $tour_name = strip_tags($_POST['name_t']);
	$city = strip_tags($_POST['city']);
	$duration = strip_tags($_POST['duration']);
	$free_places = strip_tags($_POST['free_places']);
	$bus = strip_tags($_POST['bus']);
	$date = strip_tags($_POST['date']);
	$tour_price = strip_tags($_POST['price']);
	$kombi = strip_tags($_POST['kombi']);
	$link_img_tour = strip_tags($_POST['link_img_tour']);
	$link_img2 = strip_tags($_POST['link_img2']);
	$link_img3 = strip_tags($_POST['link_img3']);
	$description = strip_tags($_POST['description']);

  //verifica se tour já existe
  if (checkTour($tour_name)['count']){
    $_SESSION['error_messages'][] = 'Tour name already exists';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/Maintenence/Insert.php');
  }
  else {
    try{
      createTour($tour_name, $duration, $free_places, $bus, $date, $tour_price,$kombi, $link_img_tour, $link_img2, $link_img3, $description);
      //Associa hoteis ao tour
      $hotels = getHotels();

      $array = array();

      foreach ($hotels as $hotel) {
        if(isset($_POST[$hotel['ref_hotel']])){
          array_push($array, $_POST[$hotel['ref_hotel']]);
        }
      }

      $idTour = getIdTour($tour_name);

      foreach ($array as $ref_hotel) {
        AssociateTourHotel($idTour['id_tour'], $ref_hotel);
      }

      AssociateTourCidade($idTour['id_tour'], $city);
      
      $_SESSION['success_messages'][] = 'Tour inserted successfully';
      header("Location: $BASE_URL"  . 'pages/Maintenence/Insert.php');
    }catch(PDOException $e){
      $_SESSION['error_messages'][] = 'Error creating tour' . $e->getMessage();
      $_SESSION['form_values'] = $_POST;
      header("Location: $BASE_URL" . 'pages/Maintenence/Insert.php');
    }
  }
 ?>
