<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="<?php echo url(''); ?>"><h2>Kelompok 2</h2></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
							<li class="nav-item"><a class="nav-link" href="<?php echo url(''); ?>">Home</a></li>
											
							<li class="nav-item"><a class="nav-link" href="<?php echo url(''); ?>">
							<?php
								if(isset($_SESSION['idis'])){
								 echo "<li class='nav-item'><a class='nav-link' href='?logout'>Logout</a></li>";
								 
								}else{
								echo "<li class='nav-item'><a class='nav-link' href='index.php'>Login</a></li>";
								echo "<li class='nav-item'><a class='nav-link' href='register'>Signup</a></li>";
								}
								if(isset($_GET['logout'])){
									session_destroy();
 									header("Location: index.php");
								}

							?>
							
							<!-- <li class="nav-item"><a class="nav-link" href="<?php //echo url('register'); ?>">Signup</a></li> -->
							
							
						</ul>
						<!-- <ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="<?php echo url('register'); ?>" class="primary_btn text-uppercase">free trial</a></li>
						</ul> -->
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->