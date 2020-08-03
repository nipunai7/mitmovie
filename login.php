<?php 

include('header.php'); 

?>

<body style="background-color: black; background-image: url("../../img/SW.jpg");">
<?php include('navbar.php'); ?>
    <div class="login-clean" style="border-top-width: 50px;margin-top: 175px;" >
    <form action="loginback.php" method="POST">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password">
            
            <div class="form-group"><input type="submit" class="btn btn-primary" value="Login" name="login-submit"></div>
            <a class="forgot" href="#">Forgot your email or password?</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>