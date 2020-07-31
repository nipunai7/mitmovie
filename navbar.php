<nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark">
				<div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
					<div class="collapse navbar-collapse" id="navcol-1">
						<ul class="nav navbar-nav flex-grow-1 justify-content-between">
							<li class="nav-item" role="presentation"><a class="nav-link" href="index.php"><i class="fa fa-apple apple-logo"></i></a></li>
							<li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item" role="presentation"><a class="nav-link" href="register.php">Sign Up</a></li>
							
							
							<?php 

								if (isset($_SESSION['userID'])){
									echo "							
									<form action='logout.php' method='POST'>
									<button type='submit' name='logout-submit' style='background-color:#da0808;border-radius:6px;'><li class='nav-item' role='presentation'><a class='nav-link'>Logout</a></li></button>
									</form>
									<button style='background-color:#0a60c2;border-radius:6px;'><li class='nav-item' role='presentation'><a class='nav-link' href='addfilm.php'>Add Movies</a></li></button>
									<li class='nav-item' role='presentation'><a class='nav-link' href='index.php' style='float:right;'>{$_SESSION['userName']}</a></li>
									";
								}else{
									echo "
									<li class='nav-item' role='presentation' ><a class='nav-link' href='login.php'>Login</a></li>

									";
								}

							?>
						</ul>
					</div>
				</div>
			</nav>