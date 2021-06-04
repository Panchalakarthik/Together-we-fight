<div class="col-md-6 col-lg-4 col-xl-3 col-sm-12 col-12" style="height:60vh;">
					<div class="profile-widget " style="height:57vh;color:#8cedb0;">
						<div class="doc-img" style="height:24vh;">
								<img class=" img-fluid fit-image" style="height:24vh;" alt="User Image"  src="assets\cpic\<?php echo  $row['vol_id'].'.jpg'; ?>"   onerror="this.onerror=null;this.src='assets/def.png';">
							
							<a href="javascript:void(0)" class="fav-btn">
								<i class="far fa-bookmark"></i>
							</a>
						</div>
						<div class="pro-content" style="height:23vh;">
							<h3 class="title">
								<a href="doctor-profile.html"><?php echo $row['name'] ; ?></a> 
								<i class="fas fa-check-circle verified"></i>
							</h3>
							<p class="speciality">Phone <span><?php echo $row['Phone']; ?></p>
							<!-- <div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<span class="d-inline-block average-rating">(17)</span>
							</div> -->
							
							<ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> <?php echo $row['city'].','.$row['zipcode']; ?>
                                </li>
                                <li>
                                    <i class="far fa-comment"></i> <?php echo  substr($row['des'],0,120).'<a href="view_profile.php?vol_id='.$row['vol_id'].'" >.......</a>'; ?>
                                </li>
                                
                            </ul>
                            
						</div>
						<div class="row row-sm">
                                
                                    <a href="view_profile.php?vol_id=<?php echo $row['vol_id']; ?>" class="btn form-control book-btn">View Profile</a>
                                
                            </div>
					</div>
				
			</div>