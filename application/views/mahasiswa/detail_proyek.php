<!DOCTYPE html>

	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="icon" href="<?php echo base_url().'asset/img/icon.png'?>">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Maiproyek</title>

		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo base_url().'home/css/linearicons.css'?>">
			<link rel="stylesheet" href="<?php echo base_url().'home/css/font-awesome.min.css'?>">
			<link rel="stylesheet" href="<?php echo base_url().'home/css/magnific-popup.css'?>">
			<link rel="stylesheet" href="<?php echo base_url().'home/css/nice-select.css'?>">					
			<link rel="stylesheet" href="<?php echo base_url().'home/css/animate.min.css'?>">
			<link rel="stylesheet" href="<?php echo base_url().'home/css/owl.carousel.css'?>">
      <link rel="stylesheet" href="<?php echo base_url().'home/css/main.css'?>">
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="<?php echo base_url().'home/css/bootstrap.css'?>">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

            <!-- Popper JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script> 
        </head>
        <style>
            body{
                font-family : 'Montserrat', 'sans-serif';
            }
						.card {
							margin-bottom : 20px;
						}
        </style>
		<body class="bg-light">
					
		<header id="header" id="home">
			    <div class="container" class="shadow p-3 mb-5 bg-white rounded">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="<?php echo site_url('Mahasiswa/Home_mahasiswa/index')?>"><img style="width:140px; height: 45px;" src="<?php echo base_url().'home/img/logo.png '?>" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
                  <li class="nav-item active"><a class="nav-link" href="<?php echo site_url('Mahasiswa/Home_mahasiswa/index')?>">Home</a></li>
									<li class="dropdown">
        						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Akun
        						<span class="caret"></span></a>
        						<ul class="dropdown-menu">
         							<li><a href="<?php echo site_url('Mahasiswa/Home_mahasiswa/profilMahasiswa')?>">Profil</a></li>
          						<li><a href="<?php echo site_url('Login/logout')?>">Logout</a></li>
       						 </ul>
      						</li>
									
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
						</div>
					</div>
		</header><!-- #header -->

			<section class="relative ftco-section" id="home">
				<div class="container">
					<div class="row fullscreen align-items-center">
							<div class="row">
								<div style="margin-top :150px;">
									<h3 class="text-uppercase" style="font-weight : 700; color :#03a678">Judul Proyek</h3> <br/> <!-- Judul Proyek -->
								</div>
							</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="container">
								<div class="card">
									<div class="card-body"> <h5>Deskripsi </h5> 
										<p> <br>Lorem ipsum dolor sit amet </p> <!--Deskripsi Proyek -->
									</div> 
								</div>

								<div class="card">
									<div class="card-body"> <h5>Tentang Dosen </h5> 
										<p> <br> Ahmad Mustofa </p> <!-- Tentang Dosen -->
									</div>
								</div>

								<div class="card">
									<div class="card-body"> <h5>Tawaran</h5> 
										<h6> <br> Ahmad Mustofa </h6> <!-- Tawaran -->
										<p> "Saya siap untuk membantu anda mengerjakan proyek anda" </p>
									</div>
									<div class="card-body">
										<h6> <br> Ahmad Mustofa </h6> <!-- Tawaran -->
										<p> "Saya siap untuk membantu anda mengerjakan proyek anda" </p>
										<div class="text-center line"></div>
									</div>
								</div>


							</div>
						</div>
					

						<div class="col col-lg-4">
							<div class ="card">
								<div class="card-body" style="text-align:center"> <h5>Tertarik?</h5>
									
									<h6 style="margin:5px">Tawaran mulai Rp.400.000</h6>
									<p style="margin:5px">Bisa melakukan nego</p>
									<a href="#" class="btn btn-danger btn-lg-primary btn-block" >Tawar</a>
									
									<h6 style="margin:5px">Jumlah yang dibutuhkan : </h6>
									<h2 style="color:#03a678 ">3</h2>
									<p>Tersisa 1 orang lagi</p>
								</div>
							</div>

							<div class="card">
								<div class="card-body"> <h5>Proyek Lainnya</h5>
									<a href="#">Pembuatan Aplikasi Kebersihan<a> <br/>
									<a href="#">Pembuatan Aplikasi Kebersihan<a> <br/>
									<a href="#">Pembuatan Aplikasi Kebersihan<a> <br/>
									<a href="#">Pembuatan Aplikasi Kebersihan<a> <br/>

								</div>
					</div>
			</section>

		<!-- start footer Area -->		
	<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-sm">
							<div class="single-footer-widget">
								<h4 class="text-white">About Us</h4>
								<p style="color:#fff">
								MaiProyek adalah platform untuk mempertemukan dosen dan mahasiswa untuk bisa mengerjakan proyek atau penelitian bersama
								</p>
							</div>
						</div>
						<div class="col-sm">
							<div class="single-footer-widget">
								<h4 class="text-white">Contact Us</h4>
								<p class="number" style="color : #ffffff">
									 cs@maiproyek.com<br>
									 021-6532-568-9746
								</p>
							</div>
						</div>						
										
					</div>
					<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
						<div class="footer-social d-flex align-items-center">
							<a href="https://www.instagram.com/maiproyek/"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
						</div>
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->
		</body>

<html lang="en">
  <head>
    <title>Detail Proyek</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href=#><img style="width:140px; height: 45px;" src="images/logo_white.png"></a> <!--Masukkan logo disini-->
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-color: #03A678" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
                      </div>
                      
			          <div class="col-md-12 tab-wrap">
                          <h1>Pembuatan Aplikasi Untuk Kelas</h1><br>
                          <h3 style="color :white">Aminarti Nurdin | Telkom University </h3> <br>
                          <h3 style="color :white"> Mobile Developer | Mobile App, UI/UX Design </h3>
			          </div>
			              

			              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
			              	<form action="#" class="search-job">
			              		<div class="row">

			              			
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

		<section class="ftco-section bg-light">

			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4"><span>Detail</span> Proyek</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-lg-12 ftco-animate">
                    <div class="job-post-item bg-white p-4 d-block">
                        <h5> Deskripsi Proyek</h5> <br>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
					</div>
					</div>
				</div>
                
                
            <div class="job-post-item bg-white p-4 d-block">
                <h5> Tentang Dosen</h5> <br>
                <h6>Lorem ipsum dolor sit amet </h6>
                <p>Dosen Biasa</p>
            </div>
            
            
            <div class="job-post-item bg-white p-4 d-block col-lg-4">
                    <h5> Penawaran</h5> <br>
                    <h6>Penawaran dibuka mulai Rp.300.000</h6>
                    <button class="btn btn-primary btn-lg">Tawar</button>
                </div>

            <div class="job-post-item bg-white p-4 d-block">
            <h5>Tawaran</h5>
                <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                          <h2 class="mr-3 text-black h4">Kenny Chandra</h2>
                          <div class="badge-wrap">
                          </div>
                        </div>
                        
                        <div class=" d-md-flex">
                          <div>Menawar Rp.400.000</div><span></span> </br/>
                          <p>Saya suka mengembangkan aplikasi mobile, saya yakin saya dapat menyelesaikan proyek ini</p> <br>

                        </div>
                       </div>
						</div>
						</div>
						
		</section>

  <!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="<?php echo base_url().'asset/img/i1.jpg" alt=""'?>></li>
							<li><img src="<?php echo base_url().'asset/img/i2.jpg" alt=""'?>></li>
							<li><img src="<?php echo base_url().'asset/img/i3.jpg" alt=""'?>></li>
							<li><img src="<?php echo base_url().'asset/img/i4.jpg" alt=""'?>></li>
							<li><img src="<?php echo base_url().'asset/img/i5.jpg" alt=""'?>></li>
							<li><img src="<?php echo base_url().'asset/img/i6.jpg" alt=""'?>></li>
							<li><img src="<?php echo base_url().'asset/img/i7.jpg" alt=""'?>></li>
							<li><img src="<?php echo base_url().'asset/img/i8.jpg" alt=""'?>></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>

</html>