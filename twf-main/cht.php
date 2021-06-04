<?php include('ser_h1.php');?>
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">

									<?php 
									require('db.php'); 
									if(isset($_POST['pid']))
									{
										$rvol_id=$_REQUEST['rvol_id'];
										$pid=$_REQUEST['pid'];
										$name=mysqli_real_escape_string($con,$_REQUEST['name']);
										$title=mysqli_real_escape_string($con, $_REQUEST['title']);
										$des=mysqli_real_escape_string($con, $_REQUEST['des']);
										$addres=mysqli_real_escape_string($con,$_REQUEST['address']);
										$phno=$_REQUEST['phone'];
										$q="INSERT INTO `posts`(`post_id`, `name`, `title`, `adderss`, `des`, `phone`, `date`, `pt`, `vol_id`) VALUES ('$pid','$name','$title','$addres','$des','$phno',now(),1,'$rvol_id')";
										$res=mysqli_query($con,$q);
										if($res)
										{
											echo'<script>alert("Posted Sucessfully...")</script>';
										}
									}

									
									
									
									
									?>
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>ID</th>
													<th>Doctor Name</th>
													<th>Locations</th>
													<!-- <th>Speciality</th> -->
													<!-- <th>Account Status</th> -->
													<th>Action</th>
													
												</tr>
											</thead>
											<tbody>



											<div class="modal fade" id="model521235" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="ModalLabel">Make Request</h5>
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
                                                                                <label for="InputEmail1">Auto Genrated Id </label>
                                                                                
                                                                                <input class="form-control" type="text" id="rvol_id" name="rvol_id" value="" readonly>
                                                                                </div>
																				
																				<div class="form-group">
                                                                                <label for="InputEmail1">Name</label>
                                                                                <input type="text" name="name" class="form-control" id="InputEmail1" placeholder=" Name" required>
                                                                                
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="InputEmail1">Title</label>
                                                                                    <input type="text" name="title" class="form-control" id="InputEmail1" placeholder="Title" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="InputEmail1">Address</label>
                                                                                    <input type="text" name="address" class="form-control" id="InputEmail1" placeholder="Address" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="InputEmail1">Description of Post</label>
                                                                                    <textarea type="text" name="des" class="form-control" id="InputEmail1"></textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                <label for="InputPassword1">Phone number</label>
                                                                                <input type="number" name="phone" class="form-control" id="InputPassword1" placeholder="Phone number" required>
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


























											<?php 
											
											$q="SELECT * FROM volunteer,address,services,medical WHERE volunteer.address_id=address.address_id and volunteer.service_id=services.service_id and services.medical_id=medical.medical_id and medical.doc=1";
											if(isset($_GET['city']))
											{
												$q=$q." and city='".$_GET['city']."'";
											}
											$count=1;
											$res=mysqli_query($con,$q);
											while($row=mysqli_fetch_array($res))
											{
											?>
											



											

















												<tr>
												<td><?php echo $count;$count++; ?></td>
													<td>
														<h2 class="table-avatar">
															<a href="#" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets\cpic\<?php echo  $row['vol_id'].'.jpg'; ?>"   onerror="this.onerror=null;this.src='assets/def.png';" alt="Docter Image"></a>
															<a href="#"><?php echo $row['name'] ?></a>
														</h2>
													</td>
													<td><?php echo $row['city'].",".$row['district'].",".$row['State']."-".$row['zipcode']; ?></td>
							
													<td><button class="btn btn-danger" onclick="post_req_data('<?php echo $row['vol_id']; ?>')" data-toggle="modal" data-target="#model521235" data-whatever="@mdo">Make Request</button>
                                                    
                                                </div>

                                                    </td>
                                                    

                                                  
												</tr>































												


											

										<?php } ?>







													<script>
													function post_req_data(rvol_id)
													{
														var ipid=document.getElementById("rvol_id").value=rvol_id;

													}
													</script>
										</tbody>





										</table>
									</div>






									

								</div>
							</div>
						</div>			
					</div>
					
				</div>	


			<?php include("ser_h2.php"); ?>