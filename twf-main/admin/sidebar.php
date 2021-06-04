

<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
						<li class="active" > 
								<a href="/index.php"><i class="fe fe-home"></i> <span>Home Page</span></a>
							</li>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							
							<li class="<?php if(basename($_SERVER['PHP_SELF']) =="index.php"){ echo 'active'; }?>"> 
								<a href="index.php"><i class="fe fe-notice-push"></i> <span>Dashbord</span></a>
							</li>
							<li class="<?php if(basename($_SERVER['PHP_SELF']) =="profile.php"){ echo 'active'; }?>" > 
								<a href="profile.php"><i class="fe fe-user"></i> <span>My Profile</span></a>
							</li>

							
							
						</ul>
					</div>
                </div>
            </div>
		