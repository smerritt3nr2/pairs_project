<?php

$hostname = "localhost";
$port = 3306;
$dbname = "pairs_project";
$username = "root";
$pw = "password";
try {

  $pdo = new PDO ("mysql:host=$hostname:$port;dbname=$dbname","$username","$pw");
} catch(PDOException $e) {
  echo "DB Connection Failed: " . $e->getMessage();
}

