
<?php 
//require ('user_auth.php');
$c="'";
$dimg='onerror="this.onerror=null;this.src='.$c.'assets/def.png'.$c.';"';
echo '
			
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.php" class="logo">
						<img src="assets/img/logo.png?t='.time().'" alt="Logo">
					</a>
					<a href="index.html" class="logo logo-small">
						<img src="assets/img/logo.png?t='.time().'" alt="Logo" width="25" height="25">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				
				
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="../assets/user_profile_pic/'. $_SESSION['vol_id'].'.jpg"  width="31" alt="User Image" '.$dimg.' ></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">

									<img src="../assets/user_profile_pic/'. $_SESSION['vol_id'].'.jpg" alt="User Image" class="avatar-img rounded-circle" '.$dimg.'>
								</div>
								<div class="user-text">
									<h6>'. $_SESSION['name'].'</h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.php">My Profile</a>
							<!-- <a class="dropdown-item" href="settings.html">Settings</a> -->
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
			'; ?>
		