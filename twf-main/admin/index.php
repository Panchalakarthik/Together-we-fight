<?php include 'user_auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Volunteer Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
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
							<div class="col-sm-12">
								<h3 class="page-title">Welcome <?php echo $_SESSION['name']; ?></h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<?php 
					require ('db.php');
					$v=$_SESSION['vol_id'];
				$q="SELECT * FROM posts WHERE vol_id='$v' ORDER BY date desc";
				$res=mysqli_query($con,$q);
				if($res)
				{
				while($row=mysqli_fetch_array($res))
				{				
				?>
				<div class="container mt-3 mb-3 float-left">
					<div class="d-flex justify-content-center row">
						<div class="col-md-9">
							<div class="feed p-2">
								<div class=" bg-info-light mt-2"  style="border-radius:5px 5px 5px 5px;">
									<div>
										<div class="d-flex flex-row justify-content-between align-items-center p-2 border-bottom">
											<div class="d-flex flex-row align-items-center feed-text px-2">
											<div class="d-flex flex-column flex-wrap ml-2"><span class="font-weight-bold"><?php echo $row['name']; ?></span><span class="text-black-50"><?php echo $row['adderss']; ?></span></div>
											</div>
											<div class="feed-icon px-2">
												<i class="fa fa-ellipsis-v text-black-50 float-right mt-2"></i><br>
												<?php echo tago(strtotime($row['date'])); ?></div>
										</div>
									</div>
									<div class="p-2 px-3">
										<h3><?php echo $row['title']; ?></h3>
										<br>
										<span><?php echo $row['des']; ?></span>
									</div>
									
										
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<?php  }}
					else{
						echo '';
					}
					?>
				</div>
				
					














					

				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<script src="assets/plugins/raphael/raphael.min.js"></script>    
		<script src="assets/plugins/morris/morris.min.js"></script>  
		<script src="assets/js/chart.morris.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>