<?php
  function getHotels(){
    global $conn;
    $stmt = $conn->prepare('SELECT nome_h, ref_hotel
                  				  FROM hotel
                  				  ORDER BY nome_h ASC');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getCitys(){
    global $conn;
    $stmt = $conn->prepare('SELECT nome_c, id_cidade
                  				  FROM cidade
                  				  ORDER BY nome_c ASC');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getKombis(){
    global $conn;
    $stmt = $conn->prepare('SELECT nome_k, num_kombi
                  				  FROM kombi
                  				  WHERE disponibilidade = true
                  				  ORDER BY nome_k ASC');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function checkTour($tour_name){
    global $conn;
    $stmt = $conn->prepare('SELECT COUNT(nome_t)
                  				  FROM tour
                  				  WHERE nome_t = ?');
    $stmt->execute(array($tour_name));
    return $stmt->fetch();
  }

  function getIdTour($tour_name){
    global $conn;
    $stmt = $conn->prepare('SELECT id_tour
                  				  FROM tour
                  				  WHERE nome_t =  ?');
    $stmt->execute(array($tour_name));
    return $stmt->fetch();
  }

  function checkHotel($hotel_name){
    global $conn;
    $stmt = $conn->prepare('SELECT COUNT(nome_h)
                  				  FROM hotel
                  				  WHERE nome_h = ?');
    $stmt->execute(array($hotel_name));
    return $stmt->fetch();
  }

  function getLocals2remove(){
    global $conn;
    $stmt = $conn->prepare('SELECT nome_l, id_local
                  				  FROM localvisita
                  				  WHERE id_local NOT IN (
                  						SELECT id_local
                  						FROM localvisita
                  							 JOIN reservalocal USING (id_local))');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function checkLocal($local_name){
    global $conn;
    $stmt = $conn->prepare('SELECT COUNT(nome_l)
                  				  FROM localvisita
                  				  WHERE nome_l = ?');
    $stmt->execute(array($local_name));
    return $stmt->fetch();
  }

  function checkKombi($kombi_name){
    global $conn;
    $stmt = $conn->prepare('SELECT COUNT(nome_k)
                  				  FROM kombi
                  				  WHERE nome_k = ?');
    $stmt->execute(array($kombi_name));
    return $stmt->fetch();
  }


 ?>
