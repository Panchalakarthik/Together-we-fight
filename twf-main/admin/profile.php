<?php include 'user_auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php 
require('db.php');
$vol_id=$_SESSION['vol_id'];

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
        <title>Volunteer Profile</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--File Upload-->
		<link href="../assets/css/upload.css" rel="stylesheet">
		
		<script src="../jq.js"></script>
		<script src="../hayageek.js"></script>
		

    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
		<?php include 'head.php'; 
		include 'sidebar.php';
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
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
<?php
function getcb($s)
{
	(isset($_POST[$s]))?$op=$_REQUEST[$s]:$op=0;
	return $op;
}

if(isset($_POST['password_reset']))
{
	$old_pass=md5($_REQUEST['old_pass']);
	$new_pass=md5($_REQUEST['new_pass']);
	$con_pass=md5($_REQUEST['con_pass']);
	$email=$_SESSION['email'];
	
	if($new_pass==$con_pass)
	{
	$pass_q="UPDATE `volunteer` SET password='$new_pass' WHERE password='$old_pass' and email='$email';";
	
	$pass_res=mysqli_query($con,$pass_q);
	if(mysqli_affected_rows($con))
	{
		echo '
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		Password Reset Done...
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  	</button>
	</div>
		';

		
	}
	else{
		echo '
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Faild To Reset Password..
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  	</button>
	</div>
		';

	}
}
else{
	
		echo '
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		NEW PASSWORD NOT MATCHD WITH CONFORM PASSWORD
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  	</button>
	</div>
		';

	
}


}

if(isset($_POST['form_vol_id']))
{
	$id=$_REQUEST['form_vol_id'];
	//$sucess=0;
	//common
	$name=$_REQUEST['name'];
	$phno=$_REQUEST['phno'];
	$email=$_REQUEST['email'];
	//$pass=md5($_REQUEST['pass']);
	$ser=$_REQUEST['ser']; //discription

	//address
	$state=$_REQUEST['state'];
	$dist=$_REQUEST['dist'];
	$place=$_REQUEST['place'];
	$pincode=$_REQUEST['pincode'];
	
	//doner
	$food=getcb('food');

	
	$plasma=getcb('plasma');
	$blood=getcb('blood');
	$o2=getcb('o2');

	//medical
	$med=getcb('med');
	$me=getcb('me');
	$oc=getcb('oc');
	
	//hospatal
	$beds=getcb('beds');
	$beds_o2=getcb('beds_o2');
	$beds_ven=getcb('beds_ven');
	
	//home tretement
	$doc=getcb('doc');
	$med_i=getcb('med_i');
	
	//transport
	$two_w=getcb('2_w');
	$four_w=getcb('4_w');
	$amb=getcb('amb');

	//genral
	$guid=getcb('guid');
	$ess=getcb('ess');

	
	//$address_q="INSERT INTO `address`(`address_id`,`city`, `district`, `State`, `zipcode`) VALUES ('$id','$place','$dist','$state','$pincode')";
	$address_q="UPDATE `address` SET `city`='$place',`district`='$dist',`State`='$state',`zipcode`='$pincode' WHERE address_id='$id'";
	//UPDATE `address` SET `city`='$place',`district`='$dist',`State`='$state',`zipcode`='$pincode' WHERE address_id='$id'


	//$donar_q="INSERT INTO `donor`( `donor_id`,`food`, `plasma`, `oxygen`, `blood`) VALUES ('$id',$food,$plasma,$o2,$blood)";
	$donar_q="UPDATE `donor` SET `food`=$food,`plasma`=$plasma,`oxygen`=$o2,`blood`=$blood WHERE donor_id='$id'";
	//UPDATE `donor` SET `food`='$food',`plasma`='$plasma',`oxygen`='$o2',`blood`='$blood' WHERE donor_id='$id'

	//$medical_q="INSERT INTO `medical`(`medical_id`, `med`, `me`, `oc`, `beds`, `beds_o2`, `beds_ven`, `doc`, `med_i`) VALUES ('$id',$med,$me,$oc,$beds,$beds_o2,$beds_ven,$doc,$med_i)";
	$medical_q="UPDATE `medical` SET `med`=$med,`me`=$me,`oc`=$oc,`beds`=$beds,`beds_o2`=$beds_o2,`beds_ven`=$beds_ven,`doc`=$doc,`med_i`=$med_i WHERE medical_id='$id'";
	//UPDATE `medical` SET `med`='$med',`me`='$me',`oc`='$oc',`beds`='$beds',`beds_o2`='$beds_o2',`beds_ven`='$beds_ven',`doc`='$doc',`med_i`='$med_i' WHERE medical_id='$id'
	
	//$transport_q="INSERT INTO `transport`( `transport_id`,`two_w`, `Ambulance_service`, `four_w`) VALUES ('$id',$two_w,$four_w,$amb)";
	$transport_q="UPDATE `transport` SET `two_w`=$two_w,`Ambulance_service`=$amb,`four_w`=$four_w WHERE transport_id='$id'";
	//UPDATE `transport` SET `two_w`='$two_w',`Ambulance_service`='$amb',`four_w`='$four_w' WHERE transport_id='$id'

	//$services_q="INSERT INTO `services`(`service_id`, `vaccination`, `daily_ess`, `donor_id`, `transport_id`, `medical_id`) VALUES ('$id',$guid,$ess,'$id','$id','$id')";
	$services_q="UPDATE `services` SET `vaccination`=$guid,`daily_ess`=$ess WHERE service_id='$id' ";
	//UPDATE `services` SET `vaccination`='[$guid',`daily_ess`='$ess' WHERE service_id='$id' 
	
	//$volunteer_q="INSERT INTO `volunteer`(`vol_id`, `name`, `email`, `Phone`, `password`, `service_id`, `address_id`, `des`) VALUES ('$id','$name','$email','$phno','$pass','$id','$id','$ser')";
	$volunteer_q="UPDATE `volunteer` SET `name`='$name',`email`='$email',`Phone`='$phno',`des`='$ser' WHERE vol_id='$id'";
	//UPDATE `volunteer` SET `name`='$name',`email`='$email',`Phone`='$phno',`des`='$ser' WHERE vol_id='$id'


	if($address_res=mysqli_query($con,$address_q))
	{
		echo '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			Address Updated
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
			';
	}

	if($donar_res=mysqli_query($con,$donar_q))
	{
		/*echo '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			Donor Details Updated
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
			';*/
	}

	if($medical_res=mysqli_query($con,$medical_q))
	{
		/*echo '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			Madical Details Updated
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
			';*/
	}

	if($transport_res=mysqli_query($con,$transport_q))
	{	
		/*echo '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			Transport Details Updated
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
			';*/

	}

	if($services_res=mysqli_query($con,$services_q))
	{
		echo '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			Services Updated
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
			';

	}
	
	if($volunteer_res=mysqli_query($con,$volunteer_q))
	{
		echo '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		Profile Details Updated
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
			';

	}
	else{
		echo '
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		volunteer details not updated <br>'.mysqli_error($con).'
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
			';
	}
/*
	
	if($volunteer_res && $services_res && $transport_res && $medical_res && $donar_res &&  $address_res )
	{
		echo '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			Profile Updated...
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
			';
	
			
		}
		else{
			echo '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Faild To Update Profile..
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
			';
	
		}


}
*/

}


?>























					<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
								<div class="row align-items-center">
									<div class="col-auto profile-image">
										<a href="#">
											<img class="rounded-circle" alt="User Image" src="../assets/user_profile_pic/<?php echo $data['vol_id'].'.jpg?t='.time(); ?>" onerror="this.onerror=null;this.src='assets/def.png';">
										</a>
									</div>
									<div class="col ml-md-n2 profile-user-info">
										<h4 class="user-name mb-0"><?php echo $data['name']; ?></h4>
										<h6 class="text-muted"><?php echo $data['email']; ?></h6>
										<div class="user-Location"><i class="fa fa-map-marker"></i> <?php echo $data['city'].' , '.$data['district'].' , '.$data['State']; ?></div>
										<div class="about-text"><?php echo $data['des']; ?></div>
									</div>
									<div class="col-auto profile-btn">
										
										<a data-toggle="modal" href="#edit_profile_pic" class="edit-link btn btn-primary">
											Change Profile Pic
										</a>
									</div>
								</div>
							</div>
							<div class="profile-menu">
								<ul class="nav nav-tabs nav-tabs-solid">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
									</li>
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
														<a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a>
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
														<a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a>
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

											
											<!-- Edit Details Modal -->
											<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
												<div class="modal-dialog modal-dialog-centered" role="document" >
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Personal Details</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form action="" method="post">
																<input type="hidden" name="form_vol_id" value="<?php echo $_SESSION['vol_id']; ?>" >
																<div class="row form-row">
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Name</label>
																			<input name="name" type="text" class="form-control" value="<?php echo $data['name']; ?>">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Mobile Number</label>
																			<input name="phno" type="text"  class="form-control" value="<?php echo $data['Phone']; ?>">
																		</div>
																	</div>
																	<div class="col-12">
																		<div class="form-group">
																			<label>E-Mail</label>
																			<!-- <div class="cal-icon"> -->
																				<input name="email" type="text" class="form-control" value="<?php echo $data['email']; ?>">
																			<!-- </div> -->
																		</div>
																	</div>
																	<div class="col-12">
																		<h5 class="form-title"><span>Address</span></h5>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																		<labsel for="exampleInputPassword1">Select State</label>
																				<select name="state" class="form-control">
																				<option value="<?php echo $data['State']; ?>"><?php echo $data['State']; ?></option>
																				<option value="Andhra Pradesh">Andhra Pradesh</option>
																				<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
																				<option value="Arunachal Pradesh">Arunachal Pradesh</option>
																				<option value="Assam">Assam</option>
																				<option value="Bihar">Bihar</option>
																				<option value="Chandigarh">Chandigarh</option>
																				<option value="Chhattisgarh">Chhattisgarh</option>
																				<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
																				<option value="Daman and Diu">Daman and Diu</option>
																				<option value="Delhi">Delhi</option>
																				<option value="Lakshadweep">Lakshadweep</option>
																				<option value="Puducherry">Puducherry</option>
																				<option value="Goa">Goa</option>
																				<option value="Gujarat">Gujarat</option>
																				<option value="Haryana">Haryana</option>
																				<option value="Himachal Pradesh">Himachal Pradesh</option>
																				<option value="Jammu and Kashmir">Jammu and Kashmir</option>
																				<option value="Jharkhand">Jharkhand</option>
																				<option value="Karnataka">Karnataka</option>
																				<option value="Kerala">Kerala</option>
																				<option value="Madhya Pradesh">Madhya Pradesh</option>
																				<option value="Maharashtra">Maharashtra</option>
																				<option value="Manipur">Manipur</option>
																				<option value="Meghalaya">Meghalaya</option>
																				<option value="Mizoram">Mizoram</option>
																				<option value="Nagaland">Nagaland</option>
																				<option value="Odisha">Odisha</option>
																				<option value="Punjab">Punjab</option>
																				<option value="Rajasthan">Rajasthan</option>
																				<option value="Sikkim">Sikkim</option>
																				<option value="Tamil Nadu">Tamil Nadu</option>
																				<option value="Telangana">Telangana</option>
																				<option value="Tripura">Tripura</option>
																				<option value="Uttar Pradesh">Uttar Pradesh</option>
																				<option value="Uttarakhand">Uttarakhand</option>
																				<option value="West Bengal">West Bengal</option>
																				</select>
																				</div>
																	</div>
																	
																	<div class="col-12">
																		<div class="form-group">
																		<label for="exampleInputPassword1">Select District</label>
																		<select  name="dist" class="form-control">
																		<option value="<?php echo $data['district']; ?>"><?php echo $data['district']; ?></option>
																			<option value="Krishna">Krishna</option>
																			<option value="Visakhapatnam">Visakhapatnam</option>
																		</select>
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>City</label>
																			<input name="place" type="text" class="form-control" value="<?php echo $data['city']; ?>">
																		</div>
																	</div>
																	
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Zip Code</label>
																			<input name="pincode" type="text" class="form-control" value="<?php echo $data['zipcode']; ?>">
																		</div>
																	</div>


																	<div class="col-12">
																		<h5 class="form-title"><span> Volunteer Available resources </span></h5>
																	</div>

																	<!--************************************************-->
																	<div class="form-group">
												<!-- <label> <h4> Volunteer Available resources </h4></label> -->
												
																	<fieldset class="form-group">
																		
																		<legend class="col-form-label">Donor</legend>
																		<div class="col-sm-10">
																			<div class="form-check">
																			<input class="form-check-input" name="food" type="checkbox"  id="gridRadios111" value="1" <?php echo ($data['food']==1)?'checked':''; ?> >
																			<label class="form-check-label" for="gridRadios111">
																				Food & Daily Essentials
																			</label>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input" name="plasma" type="checkbox"  id="gridRadios112" value="1"  <?php echo ($data['plasma']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios112">
																					Plasma Donor
																				</label>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input" name="blood" type="checkbox"  id="gridRadios113" value="1" <?php echo ($data['blood']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios114">
																					BLood Donor
																				</label>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input" name="o2" type="checkbox"  id="gridRadios115" value="1" <?php echo ($data['oxygen']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios115">
																					Oxygen Donor
																				</label>
																			</div>
																		</div>
																		
																	</fieldset>
																	<fieldset class="form-group">
																		
																		<legend class="col-form-label">Medical Supplier</legend>
																		<div class="col-sm-10">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" name="med" id="gridRadios1" value="1" <?php echo ($data['med']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios1">
																					Medicinces	
																				</label>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" name="me" id="gridRadios2" value="1" <?php echo ($data['me']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios2">
																					Medical Equipments
																				</label>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" name="oc" id="gridRadios3" value="1" <?php echo ($data['oc']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios3">
																					Oxygen	Concentrators
																				</label>
																			</div>
																		</div>
																		
																	</fieldset>
																	<fieldset class="form-group">
																		
																		<legend class="col-form-label">Hospital Services</legend>
																		<div class="col-sm-10">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" name="beds" id="gridRadios4" value="1" <?php echo ($data['beds']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios4">
																					Beds
																				</label>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" name="beds_o2" id="gridRadios5" value="1" <?php echo ($data['beds_o2']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios5">
																					Beds With Oxygen Supply	
																				</label>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" name="beds_ven" id="gridRadios6" value="1" <?php echo ($data['beds_ven']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios6">
																					Beds With Ventilators
																				</label>
																			</div>
																		</div>
																		
																	</fieldset>

																	<fieldset class="form-group">
																		
																		<legend class="col-form-label">Home Treatment Suggestions</legend>
																		<div class="col-sm-10">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" name="doc" id="gridRadios7" value="1" <?php echo ($data['doc']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios7">
																					Doctor
																				</label>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" name="med_i" id="gridRadios8" value="1" <?php echo ($data['med_i']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios8">
																					Medical Intern	
																				</label>
																			</div>
																		</div>
																		
																	</fieldset>
																	<fieldset class="form-group">
																		
																		<legend class="col-form-label">Transport Facilitator</legend>
																		<div class="col-sm-10">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" name="2_w" id="gridRadios9" value="1" <?php echo ($data['two_w']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios9">
																					Two Wheeler
																				</label>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" name="4_w" id="gridRadios10" value="1" <?php echo ($data['four_w']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios10">
																					Four Wheeler	
																				</label>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" name="amb" id="gridRadios11" value="1" <?php echo ($data['Ambulance_service']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios11">
																					Ambulance
																				</label>
																			</div>
																		</div>
																		
																	</fieldset>
																	<fieldset class="form-group">
																	
																		<legend class="col-form-label">General Services</legend>
																		<div class="col-sm-10">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" name="guid" id="gridRadios12" value="1" <?php echo ($data['vaccination']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios12">
																				Will you Guide people for Vaccination
																				</label>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" name="ess" id="gridRadios13" value="1" <?php echo ($data['daily_ess']==1)?'checked':''; ?> >
																				<label class="form-check-label" for="gridRadios13">
																					Daily Essentials Distribution	
																				</label>
																			</div>
																		</div>
																		
																	</fieldset>
												
																	</div>
											<!--************************************************************-->
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Service Description</label>
																			<textarea name="ser" style="margin-top: 0px; margin-bottom: 0px; height: 223px;" class="form-control" rows="3"><?php echo $data['des']; ?></textarea>
																		</div>
																	</div>




																</div>
																<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
															</form>
														</div>
													</div>
												</div>
											</div>
											<!-- /Edit Details Modal -->



											<!-- Edit Profile Photo Modal -->
											<div class="modal fade" id="edit_profile_pic" aria-hidden="true" role="dialog">
												<div class="modal-dialog modal-dialog-centered" role="document" >
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Edit Profile Pic</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div>
																<div class="row form-row">
																	
																<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Upload Photo</label>
																			<!-- <input type="text" class="form-control" value="John"> -->
																			

																		</div>
																		<div  class="" id="fileuploader" ></div> 
																	</div>


																</div>
																<button type="button" data-dismiss="modal" aria-label="Close" class="close btn btn-primary btn-block">Close</button>
</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /Edit Profile Photo Modal -->
											
										</div>

									
									</div>
									<!-- /Personal Details -->

								</div>
								<!-- /Personal Details Tab -->
								


								





								<!-- Change Password Tab -->
								<div id="password_tab" class="tab-pane fade">
								
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Change Password</h5>
											<div class="row">
												<div class="col-md-10 col-lg-6">
													<form action="" method="post">
														<input type="hidden" name="password_reset" value="1">
														<div class="form-group">
															<label>Old Password</label>
															<input name="old_pass" type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>New Password</label>
															<input name="new_pass" type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>Confirm Password</label>
															<input name="con_pass" type="password" class="form-control">
														</div>
														<button class="btn btn-primary" type="submit">Save Changes</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Change Password Tab -->
								
							</div>
						</div>
					</div>



































				
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <!-- <script src="assets/js/jquery-3.2.1.min.js"></script> -->
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
		<?php echo'
		<script>
				$(document).ready(function()
					{
					
					var uploadObj=$("#fileuploader").uploadFile({
						url:"../file_upload.php",
						fileName:"myfile",
						maxFileCount:1,
						multiple:false,
						
						acceptFiles:"image/*",
						showDone:false,
						formData: {"filename_id":'."'".$_SESSION['vol_id']."'".'},
						afterUploadAll:function(obj)
						{
							alert("Profile Photo Uploaded..");
							location.replace('."'profile.php'".');
						}
						});
					});
					
		</script>';
		?>


    </body>

</html>