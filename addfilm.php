<?php
include('header.php');
include('addmoviedb.php');

?>

</head>

<body class="text-center" style="background-color: rgb(241,247,252);">
    <?php include('navbar.php'); ?>
    <form method="post" action="addfilm.php" enctype="multipart/form-data">
        <div class="text-center d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center register-photo"
            style="padding: 0px;margin-top:100px;">
            <div class="row d-flex form-container" style="background-color: rgba(255, 255, 255, 0.53);display:flex;">
                <div class="col-sm-6 col-md-6 text-center" style="height: 400px;">
                    <div class="row d-flex" style="padding: 10px;">
                        <div class="col-8"><input class="d-block float-left d-xl-flex align-items-xl-center" type="file"
                                id="uploadpath" onchange="setimage(event)" name="img"></div>
                    </div>
                    <div class="row">
                        <div class="col"><img style="max-width: 100%;max-height: 430px;"
                                class="align-items-center align-content-center align-self-center" id="movieimg"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6"
                    style="background-color: #ffffff;padding: 15px;padding-right: 0px;padding-left: 15px;">
                    <div
                        style="padding: 0px;max-width: 100%;padding-top: 0px;padding-right: 15px;padding-bottom: 0px;padding-left: 15px;">
                        <h2 class="text-center"><strong>Add</strong> A Movie.</h2>
                        <div class="form-group"><input class="form-control" type="text" name="title" placeholder="Tile"
                                id="title"></div>
                        <div class="form-group"><input class="form-control" type="text" name="genre" placeholder="Genre"
                                id="genre"></div>
                        <div class="form-group"><input class="form-control" type="text" name="year" placeholder="Year"
                                id="year"></div>
                        <div class="form-group"><textarea class="form-control" placeholder="Description" id="desc"
                                name="desc" style="min-height: 170px;"></textarea></div>

                        <div class="row">
                            <div class="col-md-6">
                                <input class="d-block float-left d-xl-flex align-items-xl-center" type="file"
                                    id="uploadpath1" onchange="setimage1(event)" name="img1">
                                <img style="max-width: 30%;max-height: 430px;"
                                    class="align-items-center align-content-center align-self-center" id="movieimg1">
                            </div>
                            <div class="col-md-6">
                                <input class="d-block float-left d-xl-flex align-items-xl-center" type="file"
                                    id="uploadpath2" onchange="setimage2(event)" name="img2">
                                <img style="max-width: 30%;max-height: 430px;"
                                    class="align-items-center align-content-center align-self-center" id="movieimg2">
                            </div>
                            <div class="col-md-6">
                                <input class="d-block float-left d-xl-flex align-items-xl-center" type="file"
                                    id="uploadpath3" onchange="setimage3(event)" name="img3">
                                <img style="max-width: 30%;max-height: 430px;"
                                    class="align-items-center align-content-center align-self-center" id="movieimg3">
                            </div>
                            <div class="col-md-6">
                                <input class="d-block float-left d-xl-flex align-items-xl-center" type="file"
                                    id="uploadpath4" onchange="setimage4(event)" name="img4">
                                <img style="max-width: 30%;max-height: 430px;"
                                    class="align-items-center align-content-center align-self-center" id="movieimg4">
                            </div>
                        </div>
                        <div class="form-group"><button class="btn btn-primary btn-block border rounded"
                                type="submit">Submit</button></div>

    </form>
    </div>
    </div>
    </div>
    </div>
    <?php 
    echo $out;
    ?>
    <script src="assets/js/jquery.min.js"></script>

    <script>
    var setimage = function(event) {
        var output = document.getElementById('movieimg');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src)
        }
    };
    var setimage1 = function(event) {
        var output = document.getElementById('movieimg1');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src)
        }
    };
    var setimage2 = function(event) {
        var output = document.getElementById('movieimg2');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src)
        }
    };
    var setimage3 = function(event) {
        var output = document.getElementById('movieimg3');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src)
        }
    };
    var setimage4 = function(event) {
        var output = document.getElementById('movieimg4');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src)
        }
    };
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>