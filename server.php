<?php

// $name = $conn->real_escape_string($_POST['name']);
// $email = $conn->real_escape_string($_POST['email']);
// $password_1 = $conn->real_escape_string($_POST['password']);
// $password_2 = $conn->real_escape_string($_POST['password-repeat']);

// $sql = "INSERT INTO user (name, email, pwd)
// VALUES ('$name', '$email', '$password_1')";

// if ($conn->query($sql) === TRUE) {
//   // echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

 if (isset($_POST['submit'])){

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$password_1 = $conn->real_escape_string($_POST['password']);
$password_2 = $conn->real_escape_string($_POST['password-repeat']);

if (empty($name) || empty($email) || empty($password_1) || empty($password_2)){
  header("Location: register.php?error=emptyfields&name=".$name."&email=".$email);
  exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/", $name)){
  header("Location: register.php?error=invalidusername&name=".$name);
  exit();
}
elseif ($password_2 !== $password_1) {
  header("Location: register.php?error=passwordmismatch&name=".$name."&email=".$email);
  exit();
}
else{

  $sql = "SELECT name FROM users WHERE name=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
    header("Location: register.php?error=sqlerror");
    exit();
  }
  else{
    mysqli_stmt_bind_param($stmt,"s",$name);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $results = mysqli_stmt_num_rows($stmt);
    if ($results >0){
      header("Location: register.php?error=userexist&email=".$email);
      exit();
    }
    else{
      $sql = "INSERT INTO users (name, email, pwd) VALUES (?,?,?)";
       $stmt = mysqli_stmt_init($conn);
       if (!mysqli_stmt_prepare($stmt,$sql)) {
         header("Location: register.php?error=sqlerror");
         exit();
       }else {

        $hashedpwd = password_hash($password_1,PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,"sss",$name,$email,$hashedpwd);
        mysqli_stmt_execute($stmt);
        header("Location: register.php?useradded");
         exit();
        
       }
    }
  }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);

 }

?>