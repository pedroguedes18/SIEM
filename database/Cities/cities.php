<?php

  function getAllCities() {
    global $conn;
    $stmt = $conn->prepare('SELECT nome_c
									          FROM cidade');
    $stmt->execute();
    return $stmt->fetchAll();
  }


?>
