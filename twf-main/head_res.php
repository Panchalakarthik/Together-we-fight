
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header ">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.php" class="navbar-brand logo">
							<img src="assets/img/logo.png" style="height: 50px;width:90px;"  class="img-fluid ml-5" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.php" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="active">
								<a style="color:white;" href="index.php">Home</a>
							</li>
							<li>
								<a style="color:white;" href="services.php
								" >Services</a>
							</li>
							
                            <li>
								<a style="color:white;" href="register.php" >Register</a>
							</li>

							<li>
								<a style="color:white;" href="posts.php" >Get Help</a>
							</li>


						

							<?php @session_start(); echo (isset($_SESSION['name']))?'<li><a  href="admin"  style="color:white;"> '.$_SESSION['name'].'</a></li><li> <a style="color:white;" href="admin/logout.php" >Logout</a> </li>':'<li><a style="color:white;" href="admin" >Sign In</a></li>'; ?>
								<script>
									function logout_ask()
									{
										
										if (confirm("Click Yes To Logout")) 
										{
											window.location.href = "admin/logout.php";
										} else {
											//window.location.href = "index.php";
										}
									}
								</script>
							
                            
						</ul>		 
					</div>		 
					
				</nav>
			</header>
			<!-- /Header -->