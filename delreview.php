<?php
session_start();
require_once('connection.php');

if(isset($_GET['delid'])){

    $revid= mysqli_real_escape_string($conn, $_GET['delid']);

        $sql="DELETE from reviews WHERE review_id ='$revid'";
    
        if ($conn->query($sql) === TRUE) {
            header("Location: profile.php?ID={$_SESSION['userID']}#profile1");
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
    
}



?>