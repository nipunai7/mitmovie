<?php 
include('header.php');
?>

<body style="background-color: rgb(0,0,0);color: rgb(255,255,255);font-family: Aldrich, sans-serif;background-image:none;">
   <?php include('navbar.php'); ?>
    <div>
        <div class="container" style="margin-top: 40px;">
            <div class="row" style="height: 380px;">
                <div class="col-sm-6 col-md-3"><img class="border rounded border-white" style="width: 100%;height: 100%;"></div>
                <div class="col-sm-6 col-md-3"></div>
                <div class="col-sm-6 col-md-3">
                    <div class="row text-center">
                        <div class="col text-center"><label class="col-form-label text-center" style="font-size: 52px;color: rgb(255,255,255);">Title</label></div>
                    </div>
                    <div class="row text-center">
                        <div class="col"><label class="col-form-label text-center" style="font-size: 28px;">Released Year</label></div>
                    </div>
                    <div class="row text-center">
                        <div class="col"><label class="col-form-label text-center" style="font-size: 28px;">Genre</label></div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    <div class="photo-gallery" style="background-color: rgb(0,0,0);">
        <div class="container">
            <div class="intro"></div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/desk.jpg"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/building.jpg"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/loft.jpg"><img class="img-fluid" src="assets/img/loft.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/building.jpg"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <div class="row">
                        <div class="col-md-12"><label class="col-form-label" style="font-size: 27px;">Description</label></div>
                        <div class="col"><textarea style="width: 100%;height: 350px;background-color: rgb(0,0,0);color: rgb(255,255,255);"></textarea></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="row" style="height: 54.3277px;"><div class="col-md-12"><label style="font-size: 27px;">Cast</label></div></div>
                    <div class="row" style="height: 350px;overflow-y: scroll;">
                        <div class="col">
                            <div class="row" style="height: 80px;">
                                <div class="col-4 text-center"><img src="assets/img/building.jpg" style="width: 100%;"></div>
                                <div class="col-8"><label class="col-form-label">Actor</label></div>
                            </div>
                            <div class="row" style="height: 80px;">
                                <div class="col-4 text-center"><img src="assets/img/desk.jpg" style="width: 100%;"></div>
                                <div class="col-8"><label class="col-form-label">Actress</label></div>
                            </div>
                            <div class="row" style="height: 80px;">
                                <div class="col-4 text-center"><img src="assets/img/loft.jpg" style="width: 100%;"></div>
                                <div class="col-8"><label class="col-form-label">Balla</label></div>
                            </div>
                            <div class="row" style="height: 80px;">
                                <div class="col-4 text-center"><img src="assets/img/desk.jpg" style="width: 100%;"></div>
                                <div class="col-8"><label class="col-form-label">Pusa</label></div>
                            </div>
                            <div class="row" style="height: 80px;">
                                <div class="col-4 text-center"><img src="assets/img/building.jpg" style="width: 100%;"></div>
                                <div class="col-8 text-left"><label class="col-form-label">Aliya</label></div>
                            </div>
                            <div class="row" style="height: 80px;">
                                <div class="col-4 text-center"><img src="assets/img/loft.jpg" style="width: 100%;"></div>
                                <div class="col-8"><label class="col-form-label">Kotiya</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="width: 100%;"><label class="col-form-label" style="font-size: 28px;">Reviews</label></div>
            </div>
            <div class="row">
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
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>