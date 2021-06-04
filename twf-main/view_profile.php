
<!DOCTYPE html>
<html lang="en">
<?php 
require('db.php');
$vol_id=$_GET['vol_id'];



$gq="
SELECT * FROM volunteer ,services ,address,transport,donor,medical  
where volunteer.service_id = services.service_id and 
volunteer.address_id = address.address_id and
 services.transport_id = transport.transport_id and
  services.donor_id = donor.donor_id and 
  medical.medical_id = services.medical_id and 
  volunteer.vol_id='$vol_id'
";
$res=mysqli_query($con,$gq);
$data=mysqli_fetch_array($res);



?> 

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>View Profile</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="admin/assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="admin/assets/css/style.css">
		<link rel="stylesheet" href="assets/css/style.css">
		
		
		<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
		

		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper">
			<?php include 'head_res.php'; 
			//include 'sidebar.php';
			?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">User View</a></li>
									<li class="breadcrumb-item active">Volunteer Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					



					<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
								<div class="row align-items-center">
									<div class="col-auto profile-image">
										<a href="#">
											<img class="rounded-circle" alt="User Image" src="assets/user_profile_pic/<?php echo $data['vol_id'].'.jpg?t='.time(); ?>" onerror="this.onerror=null;this.src='assets/def.png';">
										</a>
									</div>
									<div class="col ml-md-n2 profile-user-info">
										<h4 class="user-name mb-0"><?php echo $data['name']; ?></h4>
										<h6 class="text-muted"><?php echo $data['email']; ?></h6>
										<div class="user-Location"><i class="fa fa-map-marker"></i> <?php echo $data['city'].' , '.$data['district'].' , '.$data['State']; ?></div>
										<div class="about-text"><?php echo $data['des']; ?></div>
									</div>
									<div class="col-auto profile-btn">
										
										
									</div>
								</div>
							</div>
							<div class="profile-menu">
								<ul class="nav nav-tabs nav-tabs-solid">
									<li class="nav-item">
										<a class="nav-link active rounded" style="background-color:#009688;" data-toggle="tab" href="#per_details_tab">About</a>
									
								</ul>
							</div>	
							<div class="tab-content profile-tab-cont">
								
								<!-- Personal Details Tab -->
								<div class="tab-pane fade show active" id="per_details_tab">
								
									<!-- Personal Details -->
									<div class="row">
										<div class="col-lg-12">
											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>Personal Details</span> 
														
													</h5>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
														<p class="col-sm-10"><?php echo $data['name']; ?></p>
													</div>
													
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
														<p class="col-sm-10"><?php echo $data['email']; ?></p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
														<p class="col-sm-10"><?php echo $data['Phone']; ?></p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0">Address</p>
														<p class="col-sm-10 mb-0"><?php echo $data['city'].', '; ?><br>
														<?php echo $data['district'].', '; ?><br>
														<?php echo $data['State'].'-'.$data['zipcode']; ?>.</p>
														
													</div>

												</div>
											</div>

											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>Services Details</span> 
													</h5>
													<?php
													echo '<div class="row"><ul>'; 
													$fp='<li>';
													$fe='</li>';
													?>
													<?php echo ($data['food']==1)?$fp.'Food & Daily Essentials'.$fe:''; ?>
													<?php echo ($data['plasma']==1)?$fp.'Plasma Donor'.$fe:''; ?>
													<?php echo ($data['blood']==1)?$fp.'BLood Donor'.$fe:''; ?>
													<?php echo ($data['oxygen']==1)?$fp.'Oxygen Donor'.$fe:''; ?>
													<?php echo ($data['med']==1)?$fp.'Medicinces'.$fe:''; ?>
													<?php echo ($data['me']==1)?$fp.'Medical Equipments'.$fe:''; ?> 
													<?php echo ($data['oc']==1)?$fp.'Oxygen	Concentrators'.$fe:''; ?>
													<?php echo ($data['beds']==1)?$fp.'Beds'.$fe:''; ?>
													<?php echo ($data['beds_o2']==1)?$fp.'Beds With Oxygen Supply'.$fe:''; ?>
													<?php echo ($data['beds_ven']==1)?$fp.'Beds With Ventilators'.$fe:''; ?>
													<?php echo ($data['doc']==1)?$fp.'Doctor'.$fe:''; ?>
													<?php echo ($data['med_i']==1)?$fp.'Medical Intern'.$fe:''; ?>
													<?php echo ($data['two_w']==1)?$fp.'Two Wheeler'.$fe:''; ?>
													<?php echo ($data['four_w']==1)?$fp.'Four Wheeler'.$fe:''; ?>
													<?php echo ($data['Ambulance_service']==1)?$fp.'Ambulance'.$fe:''; ?>
													<?php echo ($data['vaccination']==1)?$fp.'Guide people for Vaccination'.$fe:''; ?>
													<?php echo ($data['daily_ess']==1)?$fp.'Daily Essentials Distribution'.$fe:''; ?>
													<?php echo '</ul></div>'; ?>
												</div>
											</div>
											
											



											
											
										</div>

									
									</div>

									
									<!-- /Personal Details -->

								</div>
								<!-- /Personal Details Tab -->
								


								





								
								
							</div>
						</div>
					</div>


				
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
</div>
		<!-- /Main Wrapper -->
		
		<!<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<!-- <script  src="assets/js/script.js"></script> -->			<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
					


    </body>

</html>