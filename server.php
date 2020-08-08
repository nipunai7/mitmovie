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
$out="";
$flag = TRUE;

 if (isset($_POST['submit'])){

$name = $conn->real_escape_string($_POST['name']);
$fname = $conn->real_escape_string($_POST['fname']);
$email = $conn->real_escape_string($_POST['email']);
$password_1 = $conn->real_escape_string($_POST['password']);
$password_2 = $conn->real_escape_string($_POST['password-repeat']);
$error1="";

if (empty($name) || empty($email) || empty($password_1) || empty($password_2)|| empty($fname)){
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

      
 if (isset($_FILES['img'])){
  $out .= "Success <br>";

  var_dump($_FILES['img']);

  if($_FILES['img']['error'] == UPLOAD_ERR_OK) {
      $out .= "No Error <br>";
  } else {
      $out .= "Error: ".$_FILES['img']['error'];
      $flag = FALSE;
  }

  if($flag){

      $name123 = $conn->real_escape_string($_FILES['img']["name"]);

      $nameclr = str_replace(' ', '_', $name123);
      $newfilename = time().$nameclr;


      if(!move_uploaded_file($_FILES['img']["tmp_name"], 'assets/img/'.$newfilename)){
          $out .= "Failed to upload<br>";
      }else{
          $out .= "File Uploaded<br>";
      }

      header("Location: index.php");

  }
}

      $sql = "INSERT INTO users (name, email, pwd,fname,propc) VALUES (?,?,?,?,?)";
       $stmt = mysqli_stmt_init($conn);
       if (!mysqli_stmt_prepare($stmt,$sql)) {
         header("Location: register.php?error=sqlerror");
         exit();
       }else {

        $hashedpwd = password_hash($password_1,PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,"sssss",$name,$email,$hashedpwd,$fname,$newfilename);
        mysqli_stmt_execute($stmt);
        
         exit();
        
       }
    }
  }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);

 }


?>