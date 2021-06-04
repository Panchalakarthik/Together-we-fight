<!DOCTYPE html> 
<html lang="en">

<head>
		<meta charset="utf-8">
		<title>Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<style>
/*body {font-family: Arial, Helvetica, sans-serif;}*/

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  /* width: 50%; Full width */
  /* height: 50%; Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  /* width: 50%; */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #E0E0E0;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
</style>


<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
	</head>

<?php 
require('db.php');
function getcb($s)
{
	(isset($_POST[$s]))?$op=$_REQUEST[$s]:$op=0;
	return $op;
}

if(isset($_POST['name']))
{
	$id=$_REQUEST['vid'];
	$sucess=0;
	//common
	$name=$_REQUEST['name'];
	$phno=$_REQUEST['phno'];
	$email=$_REQUEST['email'];
	$pass=md5($_REQUEST['pass']);
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

	$address_q="INSERT INTO `address`(`address_id`,`city`, `district`, `State`, `zipcode`) VALUES ('$id','$place','$dist','$state','$pincode')";
	$donar_q="INSERT INTO `donor`( `donor_id`,`food`, `plasma`, `oxygen`, `blood`) VALUES ('$id',$food,$plasma,$o2,$blood)";
	$medical_q="INSERT INTO `medical`(`medical_id`, `med`, `me`, `oc`, `beds`, `beds_o2`, `beds_ven`, `doc`, `med_i`) VALUES ('$id',$med,$me,$oc,$beds,$beds_o2,$beds_ven,$doc,$med_i)";
	$transport_q="INSERT INTO `transport`( `transport_id`,`two_w`, `Ambulance_service`, `four_w`) VALUES ('$id',$two_w,$four_w,$amb)";
	
	$services_q="INSERT INTO `services`(`service_id`, `vaccination`, `daily_ess`, `donor_id`, `transport_id`, `medical_id`) VALUES ('$id',$guid,$ess,'$id','$id','$id')";
	//INSERT INTO `services`(`service_id`, `vaccination`, `daily_ess`, `donor_id`, `transport_id`, `medical_id`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
	
	$volunteer_q="INSERT INTO `volunteer`(`vol_id`, `name`, `email`, `Phone`, `password`, `service_id`, `address_id`, `des`) VALUES ('$id','$name','$email','$phno','$pass','$id','$id','$ser')";
	$address_res=mysqli_query($con,$address_q);
	$donar_res=mysqli_query($con,$donar_q);
	$medical_res=mysqli_query($con,$medical_q);
	$transport_res=mysqli_query($con,$transport_q);
	$services_res=mysqli_query($con,$services_q);
	$volunteer_res=mysqli_query($con,$volunteer_q);
	if(!$services_res)
	{
		//echo '<script>alert("Serv---> '.$services_q.'")</script>';
	}
	if($volunteer_res && $services_res && $transport_res && $medical_res && $donar_res &&  $address_res )
	{
		$sucess=1;
	}
	
	echo '<div id="myModal" class="modal">

	<!-- Modal content -->
	<div class="modal-content ">
	<div class="modal-header">
		<span class="close">&times;</span>
		<h2>Message</h2>
	  </div>
	  <center><div class="modal-body">
		<p>Sucessfully Registred...<br>Scan This Qr TO Join Our Telegram Group</p>
		<img style="width:20%;height:20%" src="assets\group_qr_code.jpeg"></img>
		<p>Or Join Using Below Link</p>
		<a style="color:red;" href="https://t.me/joinchat/eqJD6IbXQeo5NzI1">Join With Us</a>
	  </div></center>
	  
	</div>
  
  </div>


<script>
var modal = document.getElementById("myModal");
modal.style.display = "block";
   </script>
';


}







?>









	<body class="account-page" style="background-image: url('assets/img/rbg.jpg');">

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
		<?php include 'head_res.php'; ?>
		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
								
							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="container overflow-auto" style="height:80vh;">
										<div class="login-header">
											<h3>Volunteer Register </h3>
										</div>

										
										<!-- Register Form -->
										<form action="" method="post">

											<input type="hidden" name="vid" id="vid" value="<?php echo md5(time().date('ymd')); ?>">
											<div class="form-group form-focus">
												<input type="text" name="name" class="form-control floating" required>
												<label class="focus-label">Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" name="phno" class="form-control floating" required>
												<label class="focus-label">Mobile Number</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" name="email" class="form-control floating" required>
												<label class="focus-label">E-Mail</label>
											</div>
											
											<div class="form-group form-focus">
												<input type="password" name="pass" class="form-control floating" required>
												<label class="focus-label">Create Password</label>
											</div>
											
											<div class="form-group form-focus">
												<input type="text" name="pincode" id="pin" onkeyup="loadXMLDoc()" class="form-control floating" required>
												<label class="focus-label">Pin Code</label>
											</div>


											<div class="form-group">
												<label for="exampleInputPassword1">Select State</label>
												<select id="state" name="state" class="form-control disabled">
												</select>
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Select District</label>
												<select id="district"  name="dist" class="form-control disabled">
										
												</select>
											</div>
											<div class="form-group ">
												
												<label class="">Select City/Town/Village</label>
												<select id="poid"  name="place" class="form-control">
										
												</select>
											</div>
											
											
											
											
											<div class="form-group">
												<label> <h4> Volunteer Available resources </h4></label>
												
												<fieldset class="form-group">
													
													<legend class="col-form-label">Donor</legend>
													<div class="col-sm-10">
														<div class="form-check">
														<input class="form-check-input" name="food" type="checkbox"  id="gridRadios111" value="1" >
														<label class="form-check-label" for="gridRadios111">
															Food & Daily Essentials
														</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" name="plasma" type="checkbox"  id="gridRadios112" value="1">
															<label class="form-check-label" for="gridRadios112">
																Plasma Donor
															</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" name="blood" type="checkbox"  id="gridRadios113" value="1">
															<label class="form-check-label" for="gridRadios114">
																BLood Donor
															</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" name="o2" type="checkbox"  id="gridRadios115" value="1">
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
															<input class="form-check-input" type="checkbox" name="med" id="gridRadios1" value="1">
															<label class="form-check-label" for="gridRadios1">
																Medicinces	
															</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="me" id="gridRadios2" value="1">
															<label class="form-check-label" for="gridRadios2">
																Medical Equipments
															</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="oc" id="gridRadios3" value="1">
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
															<input class="form-check-input" type="checkbox" name="beds" id="gridRadios4" value="1">
															<label class="form-check-label" for="gridRadios4">
																Beds
															</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="beds_o2" id="gridRadios5" value="1">
															<label class="form-check-label" for="gridRadios5">
																Beds With Oxygen Supply	
															</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="beds_ven" id="gridRadios6" value="1">
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
															<input class="form-check-input" type="checkbox" name="doc" id="gridRadios7" value="1">
															<label class="form-check-label" for="gridRadios7">
																Doctor
															</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="med_i" id="gridRadios8" value="1">
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
															<input class="form-check-input" type="checkbox" name="2_w" id="gridRadios9" value="1">
															<label class="form-check-label" for="gridRadios9">
																Two Wheeler
															</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="4_w" id="gridRadios10" value="1">
															<label class="form-check-label" for="gridRadios10">
																Four Wheeler	
															</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="amb" id="gridRadios11" value="1">
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
															<input class="form-check-input" type="checkbox" name="guid" id="gridRadios12" value="1">
															<label class="form-check-label" for="gridRadios12">
															Will you Guide people for Vaccination
															</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="ess" id="gridRadios13" value="1">
															<label class="form-check-label" for="gridRadios13">
																Daily Essentials Distribution	
															</label>
														</div>
													</div>
													
												</fieldset>
												
											</div>
											<!--///////////////////////////-->

											

											<div class="form-group">
												<label for="exampleFormControlTextarea1">Service Description</label>
												<textarea name="ser" style="margin-top: 0px; margin-bottom: 0px; height: 223px;" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
											  </div>

											 



											<div class="text-right">
												<a class="forgot-link" href="login.php">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
											
										</form>
									</div>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Register Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
			</div>
			<!-- /Page Wrapper -->
 
			<?php include 'footer.php'; ?> 
		</div>
		<!-- /Main Wrapper -->
	  
		
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>


		




		
<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  var village="";
  var state="";
  var district="";
  //var country="";
  var pincode=document.getElementById("pin").value;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	var obj = JSON.parse(this.responseText);
        var count_text=obj[0]['Message'];
        var str = count_text;
        var pos = str.search(":");
        var res = str.substring(pos+1,str.length);
        var count=parseInt(res);
        var obj2=obj[0]['PostOffice'];

       
      for(i=0;i<count;i++)
      {
        village+="<option value="+obj2[i]['Name']+">"+obj2[i]['Name']+"</option>";
       


      }
	  // country+="<option value="+obj2[i]['Country']+">"+obj2[i]['Country']+"</option>";
	  district+="<option value="+obj2[0]['District']+">"+obj2[0]['District']+"</option>";
        state+="<option value="+obj2[0]['State']+">"+obj2[0]['State']+"</option>";
      document.getElementById("poid").innerHTML=village;
      document.getElementById("state").innerHTML=state;
      document.getElementById("district").innerHTML=district;
      //document.getElementById("country").innerHTML=country;
    }
  };
  xhttp.open("GET", "https://api.postalpincode.in/pincode/"+pincode+"", true);
  xhttp.send();
}
</script>



<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		// btn.onclick = function() {
		// modal.style.display = "block";
		// }

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
		}
		
		</script>
	</body>


</html>