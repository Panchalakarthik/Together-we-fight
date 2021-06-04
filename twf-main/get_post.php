
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Get Post</title>
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style_m.css">

		<script src="jq.js"></script>
		<script src="hayageek.js"></script>
		<link href="assets/css/upload.css" rel="stylesheet">



		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="admin/assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="admin/assets/css/feathericon.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="admin/assets/plugins/datatables/datatables.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		<link href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
		
		<!-- Fancybox CSS -->
		<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
		
		<style>
			body {
				background-color: #050A24;
			}
			
			.time {
				font-size: 9px !important
			}
			
			.socials i {
				margin-right: 14px;
				font-size: 17px;
				color: #161515;
				cursor: pointer
			}
			
			.feed-image img {
				width: 100%;
				height: auto
			}
		</style>
		
		
    </head>
    <body>

		<?php include 'head_res.php';
		include 'db.php';
		?>

        <div class="row">
				<?php 
                if(isset($_GET['id']))
                {
                $post_id=$_GET['id'];
				$q="SELECT * FROM posts WHERE post_id='$post_id'";
				$res=mysqli_query($con,$q);
				while($row=mysqli_fetch_array($res))
				{				
				?>
				<div class="container mt-3 mb-3 float-left">
					<div class="d-flex justify-content-center row">
						<div class="col-md-9">
							<div class="feed p-2">
								<div class="bg-white mt-2"  style="border-radius:5px 5px 5px 5px;">
									<div>
										<div class="d-flex flex-row justify-content-between align-items-center p-2 border-bottom">
											<div class="d-flex flex-row align-items-center feed-text px-2"><img class="rounded-circle" src="assets/user_profile_pic/postp_<?php echo $row['post_id'].'.jpg'; ?>" width="45">
												<div class="d-flex flex-column flex-wrap ml-2"><span class="font-weight-bold"><?php echo $row['name']; ?></span><span class="text-black-50"><?php echo $row['adderss']; ?></span></div>
											</div>
											<div class="feed-icon px-2">
												<i class="fa fa-ellipsis-v text-black-50 float-right mt-2"></i><br>
												<?php echo $row['date']; ?></div>
										</div>
									</div>
									<div class="p-2 px-3">
										<h3><?php echo $row['title']; ?></h3>
										<br>
										<span><?php echo $row['des']; ?></span>
									</div>
									<div class="bg-white">
										<div>
											<button onclick="show_post('<?php echo $row['post_id']; ?>')" class="btn btn-control  bg-white text-white ml-5 mt-4 mb-4"><img style="width:100px;height:100px" src="assets/user_profile_pic/post_<?php echo $row['post_id'].'.jpg'; ?>"></img></button>
											<div class="float-right socials p-2 py-3">
												<i class="fa fa-thumbs-up"></i>
												<i class="fa fa-comments-o"></i>
												<i class="fa fa-share"></i></div>
										</div>
										
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<?php  }}
                else{

                    echo '<h1>NO POST FOUND....</h1>';
                }
                
                ?>
				
        </div>
		
		</div>
		<?php include 'footer.php'; ?> 
    
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slick JS -->
		<script src="assets/js/slick.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>



		
		<script>
          function show_post(id) {
			  var url="assets/user_profile_pic/post_"+id+".jpg";
               window.open(url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=1000,width=400,height=400");
                          
						  }
</script>
</body>

</html>	<!-- /Header -->
    