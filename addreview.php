<?php
include('connection.php');
if (isset($_POST['submit'])){

  $review = $conn->real_escape_string($_POST['review']);
  $ID=$row['movieid'];
  $user_id = "";
  if (isset($_SESSION['userID'])){
      $user_id = ($_SESSION['userID']);
      $username = ($_SESSION['userName']);
  }else{
      $user_id = "None";
      $username = "Anonymous";
  }

  $sql2 = "INSERT INTO reviews (movieid, userid, review, username) VALUES ('$ID','$user_id','$review', '$username')";
  if ($conn->query($sql2) === TRUE) {
      header("Location: movie-single.php?ID={$row['movieid']}");
        } else {
      echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
    
}
?>