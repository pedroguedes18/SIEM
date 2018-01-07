<?php

  function createTour($tour_name, $duration, $free_places, $bus, $date, $tour_price,$kombi, $link_img_tour, $link_img2, $link_img3, $description){
    global $conn;
    $stmt = $conn->prepare('INSERT INTO tour (nome_t, duracao, vagas, lotacao, datapartida, num_kombi, custo_tour, linkimg, descricao, linkimgdois, linkimgtres,noites)
							VALUES (?,?,?,?,?,?,?,?,?,?,?,?)');
    $stmt->execute(array($tour_name, $duration,$free_places,$bus,$date,$kombi,$tour_price,$link_img_tour,$description, $link_img2, $link_img3, $duration));
  }

  function AssociateTourHotel($idTour, $ref_hotel){
    global $conn;
    $stmt = $conn->prepare('INSERT INTO tourhotel (id_tour, ref_hotel) VALUES (?,?)');
    $stmt->execute(array($idTour, $ref_hotel));
  }

  function AssociateTourCidade($idTour, $id_cidade){
    global $conn;
    $stmt = $conn->prepare('INSERT INTO tourcidade (id_tour, id_cidade) VALUES (?,?)');
    $stmt->execute(array($idTour, $id_cidade));
  }

  function creatHotel($hotel_name, $hotel_price, $wifi,$pool,$stars,$link_img){
    global $conn;
    $stmt = $conn->prepare('INSERT INTO hotel (nome_h, custo_hotel, estrelas, wifi, piscina, linkimghotel) VALUES (?,?,?,?,?,?)');
    $stmt->execute(array($hotel_name, $hotel_price,$stars,$wifi,$pool,$link_img));
  }

  function creatLocal($local_name,$local_price,$city ,$link_img){
    global $conn;
    $stmt = $conn->prepare('INSERT INTO localvisita (nome_l, custo_bilhete, id_cidade, linkimglocal) VALUES (?,?,?,?)');
    $stmt->execute(array($local_name,$local_price,$city ,$link_img));
  }

  function creatKombi($kombi_name){
    global $conn;
    $stmt = $conn->prepare('INSERT INTO kombi (nome_k) VALUES (?)');
    $stmt->execute(array($kombi_name));
  }

 ?>
