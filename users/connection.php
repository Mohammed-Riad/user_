<?php

$servername = "mysql:host=localhost;dbname=logindb";
$username = "root";
$password = "root";

try {
  $conn = new PDO($servername, $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
}

?>