<?php 
include('header.php');

if (isset($_GET['ID'])){
    $ID= mysqli_real_escape_string($conn, $_GET['ID']);
    $sql = "SELECT * FROM movies WHERE movieid='$ID'";
    $result = mysqli_query($conn, $sql) or die ("Conn error: $sql");
    $row = mysqli_fetch_array($result);

if(isset($GET_['submit'])){
    echo "Review Added";
}
    
}else{
    //header('Location: index.php');
}

?>

<body style="background-color: rgb(0,0,0);color: rgb(255,255,255);font-family: Aldrich, sans-serif;">
   <?php include('navbar.php'); ?>
    <div>
        <div class="" style="margin-top: 40px;margin-bottom: 140px;">
            <div class="row" >
                <div class="col-sm-6 col-md-1"></div>
                <div class="col-sm-6 col-md-4 text-center"><img class="border rounded border-white" style="max-height:350px;" src="assets/img/<?php echo $row['img'] ?>"></div>
                <div class="col-sm-6 col-md-6">
                    <div class="row text-center">
                        <div class="col text-center"><label class="col-form-label text-center" style="font-size: 52px;color: rgb(255,255,255);"><?php echo $row['title'] ?></label></div>
                    </div>
                    <div class="row text-center">
                        <div class="col"><label class="col-form-label text-center" style="font-size: 28px;"><?php echo $row['year'] ?></label></div>
                    </div>
                    <div class="row text-center">
                        <div class="col"><label class="col-form-label text-center" style="font-size: 28px;"><?php echo $row['genre'] ?></label></div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="photo-gallery" style="background-color: rgb(0,0,0);margin:0px 5%;">
        <div class="cont1">
            <div class="intro"></div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/<?php echo $row['img1'] ?>"><img class="img-fluid" src="assets/img/<?php echo $row['img1'] ?>"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/<?php echo $row['img2'] ?>"><img class="img-fluid" src="assets/img/<?php echo $row['img2'] ?>"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/<?php echo $row['img3'] ?>"><img class="img-fluid" src="assets/img/<?php echo $row['img3'] ?>"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/<?php echo $row['img4'] ?>"><img class="img-fluid" src="assets/img/<?php echo $row['img4'] ?>"></a></div>
            </div>
        </div>
    </div>
    <div style="margin:0px 10%">
        <div >
            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <div class="row">
                        <div class="col-md-12"><label class="col-form-label" style="font-size: 27px;">Description</label></div>
                        <div class="col"><p style="width: 100%;height: 350px;background-color: rgb(0,0,0);color: rgb(255,255,255);"><?php echo $row['description'] ?></p></div>
                    </div>
                </div>
            </div>
        </div>
    
    <div>
    
        <div >
            <div class="row">
                <div class="col-md-12" style="width: 100%;"><label class="col-form-label" style="font-size: 28px;">Reviews</label></div>
            </div>
            <form method="POST" action="<?php echo "movie-single.php?ID={$row['movieid']}";?>">        
            <div class="row">   
        <div class="col-sm-6 col-md-3">
          <label class="labelrev">Add a Review</label>
        </div>
        <div class="col-sm-6 col-md-9">
          <div class="rate" >
            <input type="radio" id="star5" name="rate5" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate4" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate3" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate2" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate1" value="1" />
            <label for="star1" title="text">1 star</label>
        </div>
      </div>
      </div>
    <div class="row">
      <textarea  rows="4"  name="review" placeholder="leave your comment..."></textarea><br>
      <input type="submit" name="send" value="Send" style="margin-left: 16px;margin-top: 56px;">      
  </div>
</form>
  </div>
            <!-- <div class="row">
                <div class="col-7" style="width: 100%;"><label class="col-form-label" style="font-size: 20px;">[user name 1]</label></div>
                <div class="col-5"><label class="col-form-label" style="font-size: 20px;">[stars]</label></div>
                <div class="col-12"><textarea style="width: 100%;height: 150px;background-color: rgb(0,0,0);color: rgb(255,255,255);"></textarea></div>
            </div>
            <div class="row">
                <div class="col-7" style="width: 100%;"><label class="col-form-label" style="font-size: 20px;">[user name 2]</label></div>
                <div class="col-5"><label class="col-form-label" style="font-size: 20px;">[stars]</label></div>
                <div class="col-12"><textarea style="width: 100%;height: 150px;background-color: rgb(0,0,0);color: rgb(255,255,255);"></textarea></div>
            </div>
            <div class="row">
                <div class="col-7" style="width: 100%;"><label class="col-form-label" style="font-size: 20px;">[user name 3]</label></div>
                <div class="col-5"><label class="col-form-label" style="font-size: 20px;">[stars]</label></div>
                <div class="col-12"><textarea style="width: 100%;height: 150px;background-color: rgb(0,0,0);color: rgb(255,255,255);"></textarea></div>
            </div> -->
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>