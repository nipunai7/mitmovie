<?php 
include('header.php'); 
?>
</head>
<form method="POST" action="register.php" enctype="multipart/form-data">

    <body style="background-color: black; background-image: url(" ../../img/SW.jpg");">
        <?php include('navbar.php'); ?>
        <div class="register-photo" style="padding-top: 3%;">
            <div class="form-container" background-color="black" style="margin-top: 50px;background-color: #ffffffa1;">
                <div class="row" style="padding-left: 15px;padding-right: 15px;">
                    <div class="col-sm-12 col-md-6">
                        <div class="row d-flex" style="padding: 10px;">
                            <div class="col-8"><input class="d-block float-left d-xl-flex align-items-xl-center"
                                    type="file" id="uploadpath" onchange="setimage(event)" name="img"></div>
                        </div>
                        <div class="row">
                            <div class="col"><img style="max-width: 100%;max-height: 430px;"
                                    class="align-items-center align-content-center align-self-center" id="movieimg">
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-6" >
                        <?php include('server.php'); ?>
                        <h2 class="text-center"><strong>Create</strong> an account.</h2>
                        <div class="form-group"><input class="form-control" type="text" name="name"
                                placeholder="Username" id="name"></div>
                        <div class="form-group"><input class="form-control" type="text" name="fname"
                                placeholder="Full Name" id="fname"></div>
                        <div class="form-group"><input class="form-control" type="email" name="email"
                                placeholder="Email" id="email"></div>
                        <div class="form-group"><input class="form-control" type="password" name="password"
                                placeholder="Password" id="password"></div>
                        <div class="form-group"><input class="form-control" type="password" name="password-repeat"
                                placeholder="Password (repeat)" id="password-repeat"></div>
                        <div class="form-group">
                        </div>
                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" id="submit"
                                name="submit">Sign Up</button></div><a class="already" href="login.php">You already have
                            an
                            account? Login here.</a>
                    </div>
                </div>
            </div>
</form>
</div>

<script>
var setimage = function(event) {
    var output = document.getElementById('movieimg');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src)
    }
};
</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>