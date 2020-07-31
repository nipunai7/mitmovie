<?php 
include('header.php'); 
?>

<body>
<?php include('navbar.php'); ?>
    <div class="register-photo" style="padding-top: 3%;">
        <div class="form-container" background-color="black">
            <div class="image-holder col-sm-0 col-md-6"></div>
            <form method="POST" action="register.php" name="reg" class="col-sm-12 col-md-6">
            <?php include('server.php'); ?>
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Username" id="name"></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" id="email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" id="password"></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)" id="password-repeat"></div>
                <div class="form-group">
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" id="submit" name="submit">Sign Up</button></div><a class="already" href="login.php">You already have an account? Login here.</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>