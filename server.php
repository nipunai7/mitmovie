<?php

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$password_1 = $conn->real_escape_string($_POST['password']);
$password_2 = $conn->real_escape_string($_POST['password-repeat']);

$sql = "INSERT INTO user (name, email, pwd)
VALUES ('$name', '$email', '$password_1')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>