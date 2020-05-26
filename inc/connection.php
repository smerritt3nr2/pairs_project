<?php

try {
    $hostname = "localhost";
    $port = 3306;
    $dbname = "pairs_project";
    $username = "root";
    $pw = "password";
    $dbh = new PDO ("mysql:host=$hostname:$port;dbname=$dbname","$username","$pw");
} catch (PDOException $e) {
    echo "Unable to Connect";
    exit;
}
$stmt = $dbh->prepare("SELECT *
                       FROM contacts
                       ");
$stmt->execute();

try {
$contacts = $stmt->fetchAll();
} catch (Exception $e) {
    echo "Unable to retrieve data";
    exit;
}
//$con=mysqli_connect("localhost","root","","password") or die(mysqli_error());