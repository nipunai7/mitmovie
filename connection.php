<?php

$servername = "139.162.10.226";
$username = "mitmovie";
$password = "mitmovie";
$dbname = "mitmovie";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected";
}


?>