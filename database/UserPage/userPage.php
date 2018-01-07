<?php
  function getAllreservations($username){
    global $conn;
    $stmt = $conn->prepare('SELECT nome_t, linkimg, duracao, datapartida, realizado, nome_h, nome_c, ref_reserva
				                    FROM reserva
				                          JOIN cliente USING (num_cliente)
				                          JOIN tour USING (id_tour)
                        					JOIN hotel USING (ref_hotel)
                        					JOIN tourcidade USING (id_tour)
                        					JOIN cidade USING(id_cidade)
				                   WHERE username = ?
                           ORDER BY datapartida DESC');
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }

  function getNumReservations($username){
    global $conn;
    $stmt = $conn->prepare('SELECT COUNT(*) FROM reserva JOIN cliente USING (num_cliente)WHERE username = ?');
    $stmt->execute(array($username));
    return $stmt->fetch();
  }

  function getAtractions($reservation){
    global $conn;
    $stmt = $conn->prepare('SELECT nome_l
				                    FROM reserva
                    					JOIN cliente USING (num_cliente)
                    					JOIN reservalocal USING (ref_reserva)
                    					JOIN localvisita USING (id_local)
                            WHERE ref_reserva =?');
    $stmt->execute(array($reservation));
    return $stmt->fetchAll();
  }

  function getNumAtractions($reservation){
    global $conn;
    $stmt = $conn->prepare('SELECT COUNT(nome_l)
				                    FROM reserva
                    					JOIN cliente USING (num_cliente)
                    					JOIN reservalocal USING (ref_reserva)
                    					JOIN localvisita USING (id_local)
                            WHERE ref_reserva =?');
    $stmt->execute(array($reservation));
    return $stmt->fetch();
  }

  function delete_reservation($reservationID){
    global $conn;
    $stmt = $conn->prepare('DELETE FROM reservalocal WHERE ref_reserva = ?');
    $stmt->execute(array($reservationID));
    $stmt = $conn->prepare('DELETE FROM reserva WHERE ref_reserva = ?');
    $stmt->execute(array($reservationID));
  }

 ?>
