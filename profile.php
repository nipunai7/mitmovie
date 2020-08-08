<?php
include('header.php');

if (isset($_GET['ID'])){
  $ID= mysqli_real_escape_string($conn, $_GET['ID']);
  $sql = "SELECT * FROM users WHERE id='$ID'";
  $result = mysqli_query($conn, $sql) or die ("Conn error: $sql");
  $row = mysqli_fetch_array($result);

  $sql3 = "SELECT * FROM reviews WHERE userid='$ID'";
  $result3 = mysqli_query($conn, $sql3) or die ("Conn error: $sql3");
  
}else{
  header('Location: index.php');
}

if (isset($_POST['submitp'])){
  echo "User Updated";
  $fname = $conn->real_escape_string($_POST['firstname']);
  $email = $conn->real_escape_string($_POST['email']);
  $password_1 = $conn->real_escape_string($_POST['pass']);
  $password_2 = $conn->real_escape_string($_POST['confirmpass']);

  if (empty($fname) || empty($email) || empty($password_1) || empty($password_2)){
    header("Location: profile.php?error=emptyfields&name=".$name."&email=".$email);
    exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $name)){
    header("Location: profile.php?error=invalidusername&name=".$name);
    exit();
  }
  elseif ($password_2 !== $password_1) {
    header("Location: profile.php?error=passwordmismatch&name=".$name."&email=".$email);
    exit();
  }
  else{
  
    $sql = "SELECT name FROM users WHERE name=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
      header("Location: profile.php?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt,"s",$name);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $results = mysqli_stmt_num_rows($stmt);
      if ($results >0){
        header("Location: profile.php?error=userexist&email=".$email);
  
        exit();
      }
      else{
        $sql = "UPDATE users SET name=?, email=?, pwd=?, fname=? WHERE id = '$ID'";
         $stmt = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt,$sql)) {
           header("Location: profile.php?error=sqlerror");
           exit();
         }else {
  
          $hashedpwd = password_hash($password_1,PASSWORD_DEFAULT);
  
          mysqli_stmt_bind_param($stmt,"sss",$name,$email,$hashedpwd);
          mysqli_stmt_execute($stmt);
          header("Location: profile.php?useradded");
           exit();
          
         }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
  
   }
  // $sql2 = "INSERT INTO reviews (movieid, userid, review, username) VALUES ('$ID','$user_id','$review', '$username')";
  // if ($conn->query($sql2) === TRUE) {
  //     // mysqli_close($conn);
  //       } else {
  //     echo "Error: " . $sql2 . "<br>" . $conn->error;
  //   }
?>
<link rel="stylesheet" href="assets/css/Boostrap-Tabs.css">
<link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
<link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
<link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <?php 
  
  include('navbar.php');

  ?>
    <div class="container profile profile-view" id="profile">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="container py-5">

                    <div class="p-5 bg-white rounded shadow mb-5">
                        <!-- Bordered tabs-->
                        <ul id="myTab1" role="tablist"
                            class="nav nav-tabs nav-pills with-arrow flex-column flex-sm-row text-center">
                            <li class="nav-item flex-sm-fill">
                                <a id="home1-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home1"
                                    aria-selected="true"
                                    class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 border active">Profile</a>
                            </li>
                            <li class="nav-item flex-sm-fill">
                                <a id="profile1-tab" data-toggle="tab" href="#profile1" role="tab"
                                    aria-controls="profile1" aria-selected="false"
                                    class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 border">Activity</a>
                            </li>
                            <li class="nav-item flex-sm-fill">
                                <a id="contact1-tab" data-toggle="tab" href="#contact1" role="tab"
                                    aria-controls="contact1" aria-selected="false"
                                    class="nav-link text-uppercase font-weight-bold rounded-0 border">Liked Movies</a>
                            </li>
                        </ul>
                        <div id="myTab1Content" class="tab-content">
                            <div id="home1" role="tabpanel" aria-labelledby="home-tab"
                                class="tab-pane fade px-4 py-5 show active">
                                <form method="POST" action="<?php echo "profile.php?ID={$row['id']}";?>">
                                    <div class="form-row profile-row">
                                        <div class="col-md-4 relative">
                                            <div class="avatar">
                                                <div class="avatar-bg center"
                                                    style="background:url(assets/img/<?php echo $row['propc'] ?>);">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h1>Profile </h1>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="form-group"><label>Full name </label><input
                                                            class="form-control" type="text" name="firstname"
                                                            value="<?php echo $row['fname'] ?>" readonly></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label>Email </label><input class="form-control"
                                                    type="email" autocomplete="off" required="" name="email"
                                                    value="<?php echo $row['email'] ?>" readonly></div>
                                            <!-- <div class="form-row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group"><label>Password </label><input
                                                            class="form-control" type="password" name="pass"
                                                            autocomplete="off" required=""></div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group"><label>Confirm Password</label><input
                                                            class="form-control" type="password" name="confirmpass"
                                                            autocomplete="off" required=""></div>
                                                </div>
                                            </div> -->
                                            <!-- <hr> -->
                                            <!-- <div class="form-row">
                                                <div class="col-md-12 content-right"><button
                                                        class="btn btn-primary form-btn" type="submit" name="submitp"
                                                        id="submit">Update </button></div>
                                            </div> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="profile1" role="tabpanel" aria-labelledby="profile-tab"
                                class="tab-pane fade px-4 py-5">
                                <?php
                   if (mysqli_num_rows($result3)>0){
                       while($row2 = mysqli_fetch_array($result3)) {

                        $movie = $row2['movieid'];
                        $del = $row2['review_id'];

                        $sql4 = "SELECT * FROM movies WHERE movieid='$movie'";
                        $result4 = mysqli_query($conn, $sql4) or die ("Conn error: $sql4");
                        $row3 = mysqli_fetch_array($result4);
                           echo "
                           
                           
                           <div class='row' style='padding-bottom: 20px;'>
                           <div class='col-md-12' style='width: 100%;background-color:#4e4e54;border-radius: 10px'><label class='col-form-label'
                                   style='font-size: 20px;'>{$row3['title']} - {$row2['time']} <a href='delreview.php?delid={$del}'><i class='fa fa-trash fa-3' style='position: absolute;right: .5em;top: 50%;transform: translate(0,-50%);color: #de8970;' name='delrev'></i></a></label></div>
                                <br>
                           <div class='col-md-12'>
                               <p
                                   style='width: 100%;height: 150px;background-color: rgb(97 97 97 / 32%);color: rgb(255,255,255);padding-left: 10px;'>
                                   {$row2['review']}</p>
                           </div>
                           </div>
                        ";
                       }
                   }else{
                     echo "You don't have any reviews added. Add a review now.";
                   }
                   
                   ?>
                            </div>
                            <div id="contact1" role="tabpanel" aria-labelledby="contact-tab"
                                class="tab-pane fade px-4 py-5">

                            </div>
                        </div>
                        <!-- End bordered tabs -->
                    </div>



                </div>
            </div>
        </div>

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>