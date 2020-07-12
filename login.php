<?php include ('header.php'); ?>

<body>
<?php include('navbar.php'); ?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('/assets/images/SW.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/vendor/bootstrap/js/popper.js"></script>
	<script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="/assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/assets/js/main.js"></script>

</body>
</html>