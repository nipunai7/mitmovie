<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/review.css">
  <title>Star rating using pure CSS</title>
</head>

<body>
    

      <div class="row">
        <div class="col-sm-6 col-md-8">
          <label>Add a Review</label><br><br>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="rate" >
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
        </div>
      </div>
      </div>
    <div class="row">
      <textarea  rows="4"  name="comment" placeholder="leave your comment..."></textarea><br>
      <input type="button" name="send" value="Send" style="margin-left: 897px;margin-bottom: 6px;margin-top: 0px;">      
  </div>
 
</body>

</html>