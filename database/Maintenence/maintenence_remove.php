<?php
  function deleteLocal($local_id){
    global $conn;
    $stmt = $conn->prepare('DELETE FROM localvisita WHERE id_local = ?');
    $stmt->execute(array($local_id));
  }

 ?>
