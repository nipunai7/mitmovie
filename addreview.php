<?php

$review = $conn->real_escape_string($_POST['review']);
$rate = $conn->real_escape_string($_POST['rate']);
$movieid = $conn->real_escape_string($_POST['id']);
$user = $conn->real_escape_string($_POST['username']);

$sql = "INSERT INTO reviews (review, rate, movieid, user)
VALUES ('$review', '$rate', '$movieid', '$user')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>