
<!DOCTYPE html>
<html lang="en" class="menu-opened">
    
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Services</title>

		<link rel="stylesheet" href="assets/iconpkg/packages/webfont-medical-icons/css/wfmi-style.css">
		<script src="jq.js"></script>
		<script src="hayageek.js"></script>
		
		<link href="assets/css/upload.css" rel="stylesheet">
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="admin/assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style2.css">
		<link rel="stylesheet" href="assets/css/style_sb_nav.css">
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<style>
			 .fit-image{
				width: 100%;
				object-fit: cover;
				height:min-content;
				} 


				@font-face {
  font-family:"para";
  src: url('assets12/fonts/karthik_fonts/AvertaDemo-Regular.otf');
  
}

@font-face {
  font-family: "head";
  src: url("assets12/fonts/karthik_fonts/Helvetica-Condensed-Black.otf");
  


}
.twf-font-head{
  font-family: 'head';
}

.twf-font-para{
  font-family:'para';
}

			</style>
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper slide-nav">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.php" class="logo">
						<img src="assets/img/logo.png" alt="Logo">
					</a>
					<a href="index.php" class="logo logo-small">
						<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				
				<!-- <div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div> -->
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>	
            </div>
			<!-- /Header -->
			<?php include "sidebar.php"; ?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content">
				
					<!-- Page Header -->
					<?php if(basename($_SERVER['PHP_SELF'])!='services.php'){ ?>
					<div class="page-header">
						<form action="" method="POST">
							<div class="row">
							<?php
							 $base=basename($_SERVER['PHP_SELF']);
							 $ser_domain="";
							 $ser_name="";
							switch($base)
							{
								case "as.php" :
									$ser_domain="Transport services";
									$ser_name="Ambulance Services";
								break;

								case "beds.php" :
									$ser_domain="Hospital admission services";
									$ser_name="Beds Available";
								break;

								case "beds_o2.php" :
									$ser_domain="Hospital admission services";
									$ser_name="Available Beds with Oxygen";
								break;

								case "beds_v.php" :
									$ser_domain="Hospital admission services";
									$ser_name="Ventilator Beds Available";
								break;

								case "ms.php" :
									$ser_domain="Medical services";
									$ser_name="Suppliers Of Medicine";
								break;

								case "me.php" :
									$ser_domain="Medical services";
									$ser_name="Medical Equipment Suppliers";
								break;

								case "os.php" :
									$ser_domain="Medical services";
									$ser_name="Oxygen Suppliers";
								break;

								case "cht.php" :
									$ser_domain="Treatment services";
									$ser_name="List Of Doctors Available";
								break;

								case "hs.php" :
									$ser_domain="Treatment services";
									$ser_name="Suggestioners";
								break;

								

								case "tf.php" :
									$ser_domain="Transport services";
									$ser_name="Travel Facilitators";
								break;

								case "fs.php" :
									$ser_domain="General services";
									$ser_name="Food Donor & Suppliers";
								break;

								case "de.php" :
									$ser_domain="General services";
									$ser_name="Essentials Suppliers";
								break;

								case "bd.php" :
									$ser_domain="General services";
									$ser_name="Blood Donors";
								break;

						

								default:
								    $ser_domain="Other services";
								     $ser_name="Other";
								break;				

									


							}
						
							
							?>
								<div class="col-sm-12 col-lg-12 col-md-12 col-12">
									<h3 class="page-title">List of <?php echo $ser_name; ?></h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item">Dashboard</li>
										<li class="breadcrumb-item"><?php echo $ser_domain; ?></li>
										<li class="breadcrumb-item active"><?php echo $ser_name; ?></li>
									</ul>
								</div>




								<br><br><br>
								<div class="col-12">
									<h4 class="d-flex  justify-content-center">Filter By: </h4>
								</div>
								<div class="col-sm-12 col-lg-12 col-md-12 col-12 form-group d-flex  mt-2 justify-content-center">
									
									<div class="row">
									<div class="col">
											<label class="">Pincode</label>
											<input class="form-control inline" onkeyup="loadXMLDoc()" type="number" id="pin">
											
										</div>	
									<div class="col">
											<label>State</label>
											<select name="state" id="state" class="form-control inline" id="state">
												
											</select>
										</div>
										<div class="col">
											<label>District</label>
											<select name="state" id="district" class="form-control inline" id="District">
												
											</select>
										</div>
										<div class="col">
											<label>City</label>
											<select name="City" id="poid" class="form-control inline" id="City">
												
											</select>
										</div>
									</div>
								</div>
								<div class="col-12 d-flex justify-content-center">
									<button onclick="filter_card()" class="btn book-btn  mt-4">Search</button>
								</div>
							</div>
						</form>
					</div>
					<?php }?>
					<!-- /Page Header -->
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

function filter_card()
{
	var x=document.getElementById("poid").value;
	var loc=window.location.href+"?city="+x;
	window.open(loc);
	//window.location.href=loc;
	//location.replace(loc);	
}
</script>
		
		



<div id="show_ser" class="">

<div class="row">
	


	
	<div class="col-12" >
	<!-- <h1>Acess Services From Sidebar</h1> -->
	</div>

	
	


</div>	

<div class="row">
	<div class="col-12">	
	     <a style="color:white !important; font-size:x-large; margin: 5px;" class="mobile_btn btn form-control book-btn hidden-lg" id="mobile_btn">Show Services</a>	
    </div>
</div>
</div>
		
<script type="text/javascript">
		var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
		var element = document.getElementById('show_ser');
		if (isMobile) {
			element.style.display="block";
		} else {
			element.innerHTML='<center class="twf-font-para" style="font-size:2.5em;">Select the required services to view  available providers to you. <br>Use filter for better results</center>';
			
		}
	</script>
<?php include 'ser_h2.php'; ?>