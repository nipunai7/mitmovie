<?php

$servername = "localhost";
$username = "nipuna";
$password = "samsungpl120";
$dbname = "mitmovie";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected";
}


?>