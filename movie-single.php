<?php 
include('header.php');

if (isset($_GET['ID'])){
    $ID= mysqli_real_escape_string($conn, $_GET['ID']);
    $sql = "SELECT * FROM movies WHERE movieid='$ID'";
    $result = mysqli_query($conn, $sql) or die ("Conn error: $sql");
    $row = mysqli_fetch_array($result);

    $sql3 = "SELECT * FROM reviews WHERE movieid='$ID'";
    $result3 = mysqli_query($conn, $sql3) or die ("Conn error: $sql3");
    
    
}else{
    header('Location: index.php');
}

if (isset($_POST['submit'])){
    echo "Review Added";
    $review = $conn->real_escape_string($_POST['review']);
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
        $conn -> close();
          } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
      }

}

?>

<body style="background-color: rgb(0,0,0);color: rgb(255,255,255);font-family: Aldrich, sans-serif;">
    <?php include('navbar.php'); ?>
    <div>
        <div class="" style="margin-top: 40px;margin-bottom: 140px;">
            <div class="row">
                <div class="col-sm-6 col-md-1"></div>
                <div class="col-sm-6 col-md-4 text-center"><img class="border rounded border-white"
                        style="max-height:350px;" src="assets/img/<?php echo $row['img'] ?>"></div>
                <div class="col-sm-6 col-md-6">
                    <div class="row text-center">
                        <div class="col text-center"><label class="col-form-label text-center"
                                style="font-size: 52px;color: rgb(255,255,255);"><?php echo $row['title'] ?></label>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col"><label class="col-form-label text-center"
                                style="font-size: 28px;"><?php echo $row['year'] ?></label></div>
                    </div>
                    <div class="row text-center">
                        <div class="col"><label class="col-form-label text-center"
                                style="font-size: 28px;"><?php echo $row['genre'] ?></label></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="photo-gallery" style="background-color: rgb(0 0 0 / 0%);margin:0px 5%;">
        <div class="cont1">
            <div class="intro"></div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos"
                        href="assets/img/<?php echo $row['img1'] ?>"><img class="img-fluid"
                            src="assets/img/<?php echo $row['img1'] ?>"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos"
                        href="assets/img/<?php echo $row['img2'] ?>"><img class="img-fluid"
                            src="assets/img/<?php echo $row['img2'] ?>"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos"
                        href="assets/img/<?php echo $row['img3'] ?>"><img class="img-fluid"
                            src="assets/img/<?php echo $row['img3'] ?>"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos"
                        href="assets/img/<?php echo $row['img4'] ?>"><img class="img-fluid"
                            src="assets/img/<?php echo $row['img4'] ?>"></a></div>
            </div>
        </div>
    </div>
    <div style="margin:0px 10%">
        <div>
            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <div class="row">
                        <div class="col-md-12"><label class="col-form-label"
                                style="font-size: 27px;">Description</label></div>
                        <div class="col">
                            <p style="width: 100%;height: 350px;background-color: rgb(0,0,0);color: rgb(255,255,255);">
                                <?php echo $row['description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" style="width: 100%;"><label class="col-form-label"
                    style="font-size: 28px;">Reviews</label>

                <form method="POST" action="<?php echo "movie-single.php?ID={$row['movieid']}";?>">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <label class="labelrev">Add a Review</label>
                        </div>
                        <div class="col-sm-6 col-md-9">

                            <div class="rateyo" id="rating" data-rateyo-rating="4" data-rateyo-num-stars="5"
                                data-rateyo-score="3"></div>

                            <span class='result'>0</span>
                            <input type="hidden" name-"rating">

                            <div class="row">
                                <textarea rows="4" name="review" placeholder="leave your comment..."></textarea><br>
                                <!-- <input type="submit" name="submit" value="Send"
                                    style="margin-left: 16px;margin-top: 56px;"> -->
                                <button type='submit' name='submit'
                                    style='background-color:#ad6507;border-radius:6px;max-height:40px'>
                                    <li class='nav-item' role='presentation'><a class='nav-link'>Submit</a></li>
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
                <?php
                   if (mysqli_num_rows($result3)>0){
                       while($row2 = mysqli_fetch_array($result3)) {
                           echo "
                           <div class='row' style='padding-bottom: 20px;'>
                           <div class='col-md-12' style='width: 100%;background-color:#4e4e54;border-radius: 10px'><label class='col-form-label'
                                   style='font-size: 20px;'>{$row2['username']}</label></div>
                                <br>
                           <div class='col-md-12'>
                               <p
                                   style='width: 100%;height: 150px;background-color: rgb(97 97 97 / 32%);color: rgb(255,255,255);padding-left: 10px;'>
                                   {$row2['review']}</p>
                           </div>
                           </div>
                       
                        ";
                       }
                   }
                   
                   ?>
            </div>
        </div>
        <div class="rateyo"></div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.rateyo.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>