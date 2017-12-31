<?php
  function createUser($name, $email, $contact, $username, $password){
    global $conn;
    $stmt = $conn->prepare('INSERT INTO cliente (nome, email, contacto, username, password, admin) VALUES (?, ?, ?, ?, ?, false)');
    $stmt->execute(array($name, $email, $contact, $username, sha1($password)));
  }

  function isLoginCorrect($username, $password){
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM cliente WHERE username = ? AND password = ?');
    $stmt->execute(array($username, sha1($password)));

    return $stmt->fetch() == true;
  }

  function checkUsersame($username){
    global $conn;
    $stmt = $conn->prepare('SELECT COUNT(username) FROM cliente WHERE username = ?');
    $stmt->execute(array($username));

    return $stmt->fetch();
  }

  function isAdmin($username){
    global $conn;
    $stmt = $conn->prepare('SELECT admin FROM cliente WHERE username = ?');
    $stmt->execute(array($username));

    return $stmt->fetch();
  }


 ?>
