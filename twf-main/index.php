<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <title>TWF</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets1/img/favicon.png" rel="icon">
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets1/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets1/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">

<style>
@font-face {
  font-family:"para";
  src: url('assets12/fonts/karthik_fonts/AvertaDemo-Regular.otf');
  
}

@font-face {
  font-family: "head";
  src: url("assets12/fonts/karthik_fonts/Helvetica-Condensed-Black.otf");
  


}
.foot{
  background-color: #009688 !important;
}
.twf-font-head{
  font-family: 'head';
}

.twf-font-para{
  font-family:'para';
}


@media(min-width: 700px) {
    
  .twf-bgimage {
    background-image:url('assets/img/search-bg.png') ;
    background-size:cover;
    width:100%;
    height: 50vh; 
    margin-top: 1.5%;
    background-position: center; 
    background-repeat: no-repeat;
  }
}
@media (max-width: 699px) {
    
    .twf-bgimage {
      background-image:url('assets/img/banner-small.jpg') ;
      background-size:cover;
      width: 100%;
      height:40vh;
      padding:0 0 !important;
      /* margin:0 0 !important; */
      margin-top: 5% !important;
      background-position: center; 
      background-repeat: no-repeat;
    }
  }

</style>


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color:#00796B !important;">
    <div class="container d-flex align-items-center" style="height:50px !important;">

  
      <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" style="width:18% !important;;" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul class="">
          <li class="active" style="color: #fff !important;"><a href="index.php" style="color: #fff !important;">Home</a></li>
          <li><a href="services.php" style="color: #fff !important;">Services</a></li>
          <li><a href="register.php" style="color: #fff !important;">Register</a></li>
          <li><a href="posts.php" style="color: #fff !important;">Get Help</a></li>
          
          <?php @session_start(); echo (isset($_SESSION['name']))?'<li><a  href="admin"  style="color:white;"> '.$_SESSION['name'].'</a></li><li> <a style="color:white;" href="admin/logout.php" >Logout</a> </li>':'<li><a style="color:white;" href="admin" >Sign In</a></li>'; ?>
								<script>
									function logout_ask()
									{
										
										if (confirm("Click Yes To Logout")) 
										{
											window.location.href = "admin/logout.php";
										} else {
											//window.location.href = "index.php";
										}
									}
								</script>
        

        </ul>
      </nav>
      
      <!-- .nav-menu -->
 
    </div>
  </header><!-- End Header -->

  
  <section><div class="twf-bgimage container-fluid"></div></section>
  <!-- ======= Hero Section ======= -->
  <!-- <section class="d-flex align-items-center">
    <div class="position-relative" data-aos="fade-up" data-aos-delay="100">
       -->

      <!-- <div class="row icon-boxes">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="ri-stack-line"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="ri-palette-line"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="ri-command-line"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-fingerprint-line"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

      </div> -->
    <!-- </div>
  </section>End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
          <h2 class="twf-font-head">We are in this <span style="color:#fc6600;font-size:40px !important;">TOGETHER</span>  And we all will  get through this <span style="color:#fc6600;font-size:40px !important;">TOGETHER</span></h2>
          <p style="font-size:25px;color:#2d3337">Compassion leads to TOGETHERNESS which strengthens a society  </p>
        </div>

        <div class="row content">
          <div class="col">
            <p class=" twf-font-para text-center">
            In this prevailing COVID-19 pandemic situation, we all know about the harsh challenges being faced by the people, front liners, and the government. We will only be able to successfully shoulder these challenges if we act together now. The virus is real and it’s dangerous, but together we can slow the spread and protect the most vulnerable, the frontliners and those we love
            </p>
            
              <p style="font-size:20px;" class="text-center" > Our Mission is clear. Our challenge is great. Together we can FIGHT covid-19. </li>
              </p>
          </div>
          <!-- <div class="col-lg-6 pt-4 pt-lg-0">
            <img src="assets1/img/video-call.jpg" width="80%" alt="">
          </div> -->
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row justify-content-end">

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">65</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">85</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">12</span>
              <p>Years of experience</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">15</span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section>End Counts Section -->

    <hr>
    <section id="about-video" class="about-video">
      <div class="container" data-aos="fade-up">

        <div class="row" >
 
          <div class="col-lg-6 pt-3 pt-lg-c content mt-4" data-aos="fade-left" data-aos-delay="100">
            
              
                <h2  class="twf-font-para mt-5"> In the present situation, the availability of various services and resources is not readily 
                    accessible to the people/patients who need them and it's crucial to make sure every citizen 
                    of our country who call for help needs to be served.</h2>
          
          </div>
          <div  class="col-lg-6 video-box align-self-baseline " data-aos="fade-right" data-aos-delay="100">
            <img src="assets1/img/s3.png" class="img-fluid" width="100%" alt="">
            
          </div>

        </div>

      </div>
    </section><!-- End About Video Section -->
    <hr>
    <section id="about-video" class="about-video">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
            <img src="assets1/img/sp.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content mt-4 " data-aos="fade-left" data-aos-delay="100">
          <br><br>
            <h2 class="twf-font-para mt-5 ml-5" style="margin-top: 5%;">TWF works as a centralized environment where all the services required in this crisis are publicized and direct 
                contact establishes between service seeker and provider to ensure no delay in saving a life.</h2>
            
          </div>

        </div>

      </div>
    </section>
    <hr>
    <section id="about-video" class="about-video">
      <div class="container" data-aos="fade-up">

        <div class="row">

          

          <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h2 style="font-family: para" class="mt-5 mr-4">We identified some key services and resources which must be available to all in this hour of need. And we request everyone to join us in forming a VOLUNTEER SYSTEM that provides all the necessary services to people in need to fight against COVID-19.</h2>
            
          </div>
          <div class="col-lg-6 video-box align-self-baseline mt-2" data-aos="fade-right" data-aos-delay="100">
            <img src="assets1/img/gif1.gif" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End About Video Section -->









    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mt-1" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="fa fa-laptop-medical"></i>
              </div>
              <h4><a href="">Medical Services</a></h4>
              <p>Supply of Medicinces and Medical Equipments . <br> Blood Donation</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6  mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i> <img src="assets1/img/oxygen-mask.svg" width="56%" style="z-index:3;" class="text-center ml-3" alt=""> </i>
              </div>
              <h4><a href="">Oxygen Supply</a></h4>
              <p>Supply of Oxygen Cylinders <br> Refill Services</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6  mt-4 mt-lg-0"  data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="fa fa-hospital"></i>
              </div>
              <h4><a href="">Hospital  Services</a></h4>
              <p>Hospitals help people with BED availabilty. <br>
                  (Normal beds, Beds with Oxygen, Ventilator)</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6  mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="fa fa-ambulance"></i>
              </div>
              <h4><a href="">Transport Services </a></h4>
              <p>Ambulance Providers Digitalize their Availabilty. <br> Travel Facilitators help People who got Stuck in Other places to reach their Destination.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6  mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="fa fa-clinic-medical"></i>
              </div>
              <h4><a href="">Home Treatment Services </a></h4>
              <p>Doctors and medical interns help people with Home treatment of COVID and other health suggestions</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6  mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i> <img src="assets1/img/groceries.svg" width="56%" style="z-index:3;" class="text-center ml-3" alt=""> </i>
              </div>
              <h4><a href="">Food & Essential Services</a></h4>
              <p>Distribution Or Donation of Food and Daily Essentials. <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
            </div>
          </div>

        </div>

      </div>

      <center><p  style=" margin-top:20px;font-weight:bolder;" >(*Services include both commercial and free providers)</p></center>
    </section><!-- End Sevices Section -->

   

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        <h2  style="text-align:center; font-size:25px;">Serving every citizen in need is the Fight We gonna battle here</h2>
          <div class="twf-font-para" style="text-align:start; color:#545454; font-size:20px;">Together, Forward in this fight against COVID-19, we request all the mentioned service providers to REGISTER here as TWF VOLUNTEER.</div><hr>
          <div class="twf-font-para" style="text-align:start; color:#545454; font-size:20px;">The Volunteers may be of the following,</div>
    
      </div>
      <ul style="font-size: 18px;" class="twf-font-para">
      <li >Oxygen suppliers</li>
      <li>Medical suppliers</li>
      <li>Health equipment Suppliers</li>
      <li>Doctors</li>
      <li>Medical Interns</li>
      <li>Plasma Donors</li>
      <li>Hospital Administrators</li>
      <li>Food And Essentials Suppliers</li>
      <li>Travel Facilitators</li>
      </ul>


      </div>
    </section><!-- End Frequently Asked Questions Section -->

     <!-- ======= Cta Section ======= -->
     <section id="cta" class="cta" style="background-color:#009688 !important;">
      <div class="container" data-aos="zoom-in">
        <div class="text-center">
          <h3>Call To Action</h3>
          <p>Let's Join Together In This Fight Aganist COVID-19. <br> To Become A TWF Volunteer</p>
          <a class="cta-btn" href="register.php">Register</a>
        </div>
      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mb-4">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>User Notice </h2>
        </div>

        <div class="row content">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <h4> <p class=" twf-font-para text-start">
            We request Every Citizen seeking any service to visit the GET SERVICES
             page and Click on the relevant services to get the details of the available providers to you.<br/>
             <br/>USERS can also post emergency help requests in the HELP tab so that available volunteers can respond to help you at the earliest possible<br/>
         
            </p></h4>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6  col-12 pt-4 pt-lg-0 row ">
            <div class="col-lg-6 col-6">
                <img src="assets1/img/gif2.gif" width="95%" alt="">
            </div>
            <div class="col-lg-6 col-6">
                <img src="assets1/img/gif4.gif" width="95%" alt="">
            </div>
          </div>
        </div>
         <br/>
         <h5 class="twf-font-para">
         During this PANDEMIC, which is affecting the lives of many, the safety of every citizen of the country and abroad is of top priority.
          We build hope and strength together, as <span style="color:#fc6600;">WE ARE IN THIS TOGETHER AND WE ALL WILL GET THROUGH THIS TOGETHER</span>.

          <br>We are thankful to all the frontliners for their tireless efforts and selfless service who are putting our safety before their own.
          <br><span style="font-size:25px !important;font-weight:bold;color:#fc6600;">TOGETHER WE FIGHT</span>.
        </h5>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
                <div class="footer-logo">
                <h3> <strong> Team Twf </strong></h3>
									</div>
									<div class="footer-about-content">
										<p>We are in This Together- And We will get Through This Together</p>
                </div>
            <!-- 
            <p>
              GVP College Of Engineering <br>
              Madhurawada 535022<br>
              Visakhapatnam <br><br>
              <strong>Phone:</strong> +916302632025<br>
              <strong>Email:</strong> twf_team@gvpce.ac.in<br>
            </p> -->
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>I Need Help</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="beds.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="posts.php">Help</a></li>
      
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>I Will Help</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="register.php">Register</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="admin">Login</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="posts.php">Respond</a></li>
             
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
							
              <!-- Footer Widget -->
              <div class="footer-widget footer-contact">
                <h2 class="footer-title">Contact Us</h2>
                <div class="footer-contact-info">
                  <div class="footer-address">
                    <span><i class="fas fa-map-marker-alt"></i></span>
                    <p> Team TWF,<br> GVP College Of Engineering, Madhurawada 530048 </p>
                  </div>
                  <p>
                    <i class="fas fa-phone-alt"></i>
                    +91xxxxxxx205
                  </p>
                  <p class="mb-0">
                    <i class="fas fa-envelope"></i>
                    team_twf@gvpce.ac.in
                  </p>
                </div>
              </div>
              <!-- /Footer Widget -->
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Team TWF</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
         
          Designed by <a href="#">Team TWF</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter foot"><i class="bx bxl-twitter foot"></i></a>
        <a href="#" class="facebook foot"  ><i class="bx bxl-facebook foot"></i></a>
        <a href="#" class="instagram foot"><i class="bx bxl-instagram foot" ></i></a>
        <a href="#" class="google-plus foot"><i class="bx bxl-skype foot"></i></a>
        <a href="#" class="linkedin foot"><i class="bx bxl-linkedin foot"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top foot"><i class="ri-arrow-up-line foot"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets1/vendor/jquery/jquery.min.js"></script>
  <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets1/vendor/php-email-form/validate.js"></script>
  <script src="assets1/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets1/vendor/counterup/counterup.min.js"></script>
  <script src="assets1/vendor/venobox/venobox.min.js"></script>
  <script src="assets1/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets1/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets1/js/main.js"></script>
  
  
  <script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slick JS -->
		<script src="assets/js/slick.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>


</body>

</html>