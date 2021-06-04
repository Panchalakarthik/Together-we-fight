
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Help</title>
		
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

		<link href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
		<style>
			body {
				background-color: #fff;
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
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
		
		<!--//////////////////////////-->
		<!-- Header -->
		
		<?php include 'head_res.php'; 
		include 'db.php';?>

		<?php 
		if(isset($_POST['name']))
		{
			$id=$_REQUEST['pid'];
			$name=mysqli_real_escape_string($con,$_REQUEST['name']);
			$title=mysqli_real_escape_string($con, $_REQUEST['title']);
			$des=mysqli_real_escape_string($con, $_REQUEST['des']);
			$addres=mysqli_real_escape_string($con,$_REQUEST['address']);
			$phno=$_REQUEST['phone'];

			$post_q="INSERT INTO `posts`(`post_id`, `name`, `title`, `adderss`, `des`, `phone`, `date`) VALUES ('$id','$name','$title','$addres','$des','$phno',now())";
			
			$msg="
			[".$title."]
			Name    : ".$name."
			Problem : ".$des."
			Addres  : ".$addres."
			Phone   : ".$phno."
			Link    : https://msivaji.in/twf/get_post.php?id=".$id."
			";
			
			//$url="https://api.telegram.org/bot1836503539:AAHMPJVUkVG_p4iA08pDDtBu8szny2cjHYg/sendMessage?chat_id=-571558132&text=".urlencode($msg);
			//$tres=file_get_contents($url,false,stream_context_create($arrContextOptions));
			$post_res=mysqli_query($con,$post_q);
			
			if($post_res)
			{
				echo '<script>

				function loadXMLDoc() {
				 var msg="'.urlencode($msg).'";
				  var xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						var obj = JSON.parse(this.responseText);
					}
				  };
				  xhttp.open("GET", "https://api.telegram.org/bot1836503539:AAHMPJVUkVG_p4iA08pDDtBu8szny2cjHYg/sendMessage?chat_id=-571558132&text="+msg+"", true);
				  xhttp.send();
				}
				loadXMLDoc();
				</script>';

				echo '<script>alert("Posted Sucessfully")</script>';
			}
			else{
				echo '<script>alert("Error While Posting...'.mysqli_error($con).' ")</script>';
			}



		}
		
		
		?>
        <div class="row">
			
			<div class="col-md-2 col-lg-2 col-sm-0 col-0  d-none d-sm-none d-md-inline d-lg-inline" style="height: 80vh;">
				<div class="d-sm-none d-md-inline d-lg-inline">
					<img src="icons/gig3.gif" class="ml-3 d-none d-sm-none d-md-inline d-lg-inline"  width="150%" height="600px">
				</div>
			</div>
			<div class="col-md-12 col-lg-10 col-sm-12 col-12 overflow-auto" style="height: 300vh;">
				
				<div class="container  mb-3 float-left" >
					
					<div class="d-flex justify-content-center row">
						<div class="col-md-10" >
							<div class="feed p-2">
								<div class="bg-white mt-2 shadow ">
									<div>
										<div class="d-flex flex-row justify-content-between align-items-center p-2">
											<div class="d-flex flex-row feed-text px-2"><img class="rounded-circle" src="assets/def.png" width="45">
												<div class="d-flex flex-column text-center flex-wrap ml-2"><h3 class="font-weight-bold">Add Post For Help</h3></div>
											</div>
										</div>
									</div>
									<div class="p-4 px-3 d-flex flex-row-reverse">
										<button type="button" class="btn btn-primary" style="background-color:#009688 !important;" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Create Post</button>

										<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Create Posts</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<form action="" method="post" >
															<div class="card card-primary">
																<input type="hidden" id="pid" name="pid" value="<?php echo md5(time().date('ymd')); ?>">
																<!-- /.card-header -->
																<!-- form start -->
																<div class="card-body">
																	<div class="form-group">
																	<label for="exampleInputEmail1">Name</label>
																	<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder=" Name">
																	
																	</div>
																	<div class="form-group">
																		<label for="exampleInputEmail1">Title</label>
																		<input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title">
																	</div>
																	<div class="form-group">
																		<label for="exampleInputEmail1">Address</label>
																		<input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Address">
																	</div>
																	<div class="form-group">
																		<label for="exampleInputEmail1">Description of Post</label>
																		<textarea type="text" name="des" class="form-control" id="exampleInputEmail1"></textarea>
																	</div>
																	<div class="form-group">
																	<label for="exampleInputPassword1">Phone number</label>
																	<input type="number" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Phone number">
																	</div>
																	<div class="form-group">
																	<label for="exampleInputFile">Upload Post Attachment</label>
																	<div  class="" id="fileuploader" ></div> 
																	
																	</div>

																	<div class="form-group">
																	<label for="exampleInputFile">Upload Profile Photo</label>
																	<div  class="" id="fileuploader2" ></div> 
																	
																	</div>
																</div>
																<!-- /.card-body -->
																
															</div>
															
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														<input type="submit" value="Send message" class="btn btn-primary">
													</div>
													</form>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php 
				$q="SELECT * FROM posts ORDER BY date desc";
				$res=mysqli_query($con,$q);
				while($row=mysqli_fetch_array($res))
				{				
				?>
				<div class="container mt-3 mb-3 float-left">
					<div class="d-flex justify-content-center row">
						<div class="col-md-9">
							<div class="feed p-2 shadow ">
								<div class="bg-white mt-2"  style="border-radius:5px 5px 5px 5px;">
									<div>
										<div class="d-flex flex-row justify-content-between align-items-center p-2 border-bottom">
											<div class="d-flex flex-row align-items-center feed-text px-2"><img class="rounded-circle" src="assets/user_profile_pic/postp_<?php echo $row['post_id'].'.jpg'; ?>" width="45" onerror="this.onerror=null;this.src='assets/def.png';">
												<div class="d-flex flex-column flex-wrap ml-2"><span class="font-weight-bold"><?php echo $row['name']; ?></span><span class="text-black-50"><?php echo $row['adderss']; ?></span></div>
											</div>
											<div class="feed-icon px-2">
												<i class="fa fa-ellipsis-v text-black-50 float-right mt-2"></i><br>
												<?php echo tago(strtotime( $row['date'])); ?></div>
										</div>
									</div>
									<div class="p-2 px-3">
										<h3><?php echo $row['title']; ?></h3>
										<br>
										<span><?php echo $row['des']; ?></span>
									</div>
									<div class="bg-white">
										<div>
											<button onclick="show_post('<?php echo $row['post_id']; ?>')" class="btn btn-control  bg-white text-white ml-5 mt-4 mb-4"><img style="width:100px;height:100px" src="assets/user_profile_pic/post_<?php echo $row['post_id'].'.jpg'; ?>" onerror="this.onerror=null;this.src='assets/post.png';this.style.display = 'none';"></img></button>
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
				<?php  } ?>
				
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



		<?php echo'
		<script>
				$(document).ready(function()
					{
					var id=document.getElementById("pid").value;
					var uploadObj=$("#fileuploader").uploadFile({
						url:"file_upload.php",
						fileName:"myfile",
						maxFileCount:1,
						multiple:false,
						
						acceptFiles:"image/*",
						showDone:false,
						formData: {"filename_id":'."'post_'+id".'},
						afterUploadAll:function(obj)
						{
							alert("Document Uploaded..");
							
						}
						});
					});


					$(document).ready(function()
					{
					var id=document.getElementById("pid").value;
					var uploadObj=$("#fileuploader2").uploadFile({
						url:"file_upload.php",
						fileName:"myfile",
						maxFileCount:1,
						multiple:false,
						
						acceptFiles:"image/*",
						showDone:false,
						formData: {"filename_id":'."'postp_'+id".'},
						afterUploadAll:function(obj)
						{
							alert("Profile Photo Uploaded..");
							
						}
						});
					});
					
		</script>';
		?>
		<script>
          function show_post(id) {
			  var url="assets/user_profile_pic/post_"+id+".jpg";
               window.open(url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=1000,width=400,height=400");
                          
						  }
</script>
</body>
</html>	<!-- /Header -->
    