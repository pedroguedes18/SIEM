<?php
function updateHotelName($hotel_name, $hotel_id){
  global $conn;
  $stmt = $conn->prepare('UPDATE hotel SET nome_h = ? WHERE ref_hotel = ?');
  $stmt->execute(array($hotel_name,$hotel_id));
}

function updateHotelPrice($hotel_price, $hotel_id){
  global $conn;
  $stmt = $conn->prepare('UPDATE hotel SET custo_hotel = ? WHERE ref_hotel = ?');
  $stmt->execute(array($hotel_price,$hotel_id));
}

function updateHotelWifi($wifi, $hotel_id){
  global $conn;
  $stmt = $conn->prepare('UPDATE hotel SET wifi = ? WHERE ref_hotel = ?');
  $stmt->execute(array($wifi,$hotel_id));
}

function updateHotelPool($pool, $hotel_id){
  global $conn;
  $stmt = $conn->prepare('UPDATE hotel SET piscina = ? WHERE ref_hotel = ?');
  $stmt->execute(array($pool,$hotel_id));
}

function updateHotelStars($stars, $hotel_id){
  global $conn;
  $stmt = $conn->prepare('UPDATE hotel SET estrelas = ? WHERE ref_hotel = ?');
  $stmt->execute(array($stars,$hotel_id));
}

function updateHotelLinkImg($link, $hotel_id){
  global $conn;
  $stmt = $conn->prepare('UPDATE hotel SET linkimghotel = ? WHERE ref_hotel = ?');
  $stmt->execute(array($link,$hotel_id));
}
 ?>
