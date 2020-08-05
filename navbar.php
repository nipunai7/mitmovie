<nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark">
				<div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
					<div class="collapse navbar-collapse" id="navcol-1">
						<ul class="nav navbar-nav flex-grow-1 justify-content-between" >
							<li class="nav-item" role="presentation" style="width: 54px;background-color: cornsilk;border-radius: 33px;"><a class="nav-link" href="index.php"><img src="assets/img/Untitled-1.png"></a></li>
							<li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item" role="presentation"><a class="nav-link" href="register.php">Sign Up</a></li>
							
							
							<?php 

								if (isset($_SESSION['userID'])){
									echo "							
									<form action='logout.php' method='POST'>
									<button type='submit' name='logout-submit' style='background-color:#da0808;border-radius:6px;'><li class='nav-item' role='presentation'><a class='nav-link'>Logout</a></li></button>
									</form>
									<button type='submit' style='background-color:#0a60c2;border-radius:6px;max-height:38px;'><li class='nav-item' role='presentation'><a class='nav-link' href='addfilm.php'>Add Movies</a></li></button>
									<li class='nav-item' role='presentation'><a class='nav-link' href='index.php?ID={$_SESSION['userID']}' style='float:right;'>Welcome, {$_SESSION['userName']}</a></li>
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