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

	
	<!-- Start List Area -->
	<section class="relative ftco-section" id="home">
				<div class="container">
					<div class="row fullscreen align-items-center">
							<div class="row">
								<div style="margin-top :150px;">
									<h3 class="text-uppercase" style="font-weight : 700; color :#03a678">Proyek Tersedia</h3> <br/>
								</div>
							</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="container">
								<div class="card">
                                    <?php foreach($proyeks as $b =>  $row){?>
									<div class="card-body"> <!-- Item 1 -->
										<div class="col"> 
											<div class="container">
												<h5 class="card-title" style="display:inline-block"><?=$row->nama_proyek;?></h5>
												<a href="<?php echo site_url('Mahasiswa/Home_mahasiswa/detailProyek')?>" class="btn btn-danger float-right">Apply</a>
											</div>	
													<div class="container">
														<h6 class="card-subtitle"><?=$row->universitas;?></h6>
													</div>
											</div>
										</div>
                                        <?php }?>


									</div>
					
									</div>
								</div>
							</div>

							<div class="col-md-12 align-items-center">
								<nav>
									<ul class="pagination" style="justify-content:center">
										<li class="page-item"><a class="page-link" href="#">Sebelumnya</a></li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
									</ul>
								</nav>
							</div>
						</div>
					
	</section>

<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Maiproyek</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/linearicons.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/font-awesome.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/themify-icons.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/bootstrap.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/owl.carousel.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/nice-select.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/nouislider.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/ion.rangeSlider.css'?>"/>
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/ion.rangeSlider.skinFlat.css'?>"/>
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/magnific-popup.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/main.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/open-iconic-bootstrap.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/ionicons.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'css/flaticon.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'css/icomoon.css'?>">


</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img style="width:140px; height: 45px;" src="<?php echo base_url().'asset/img/logo.png'?>"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
							
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url('Login/logout')?>">Logout</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Cari Proyek">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- Start List Area -->
    <section class="ftco-section bg-light">
			<br> <br/>
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4"><span>Proyek</span> Tersedia</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h4">Pembuatan Aplikasi Absensi</h2>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><a href="#">Telkom University</a></div>
                  <div><span>Android Development</span></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="<?php echo site_url('Mahasiswa/Home_mahasiswa/detailProyek')?>" class="btn btn-primary py-2 mr-1">Apply</a>
              </div>
            </div>
          </div><!-- end -->

          <div class="col-md-12 ftco-animate">
						<div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

						  <div class="mb-4 mb-md-0 mr-5">
						   <div class="job-post-item-header d-flex align-items-center">
						     <h2 class="mr-3 text-black h4">Penelitian Dampak Buruk Internet</h2>
						   </div>
						   <div class="job-post-item-body d-block d-md-flex">
						     <div class="mr-3"><a href="#">Telkom University</a></div>
						     <div><span>Penelitian</span></div>
						   </div>
						  </div>

						  <div class="ml-auto d-flex">
						  	<a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply</a>
              </div>

						</div>
          </div> <!-- end -->
          <div class="col-md-12">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Pengabdian Masyarakat Sekitar Telkom University</h2>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><a href="#">Telkom University</a></div>
                 <div><span>Pengabdian Masyarakat</span></div>
               </div>
              </div>
              
              <div class="ml-auto d-flex">
                <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply</a>
              </div>
           </div>
         </div> <!-- end -->
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Aplikasi Disabilitas</h2>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"> <a href="#">Telkom University.</a></div>
                 <div> <span>Android Development</span></div>
               </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply</a>
                </a>
              </div>
           </div>
         </div> <!-- end -->
         <div class="col-md-12">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Pengembangan Web Fakultas</h2>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"> <a href="#">Telkom University</a></div>
                 <div><span>Web Development</span></div>
               </div>
              </div>
              
              <div class="ml-auto d-flex">
                <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply</a>
              </div>
           </div>
         </div> <!-- end -->
         <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h4">Penelitian UI/UX aplikasi Go-Jek</h2>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"> <a href="#">Telkom University</a></div>
                  <div><span>Penelitian</span></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply</a>
              </div>
            </div>
          </div><!-- end -->

          <div class="col-md-12 ftco-animate">
						<div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

						  <div class="mb-4 mb-md-0 mr-5">
						   <div class="job-post-item-header d-flex align-items-center">
						     <h2 class="mr-3 text-black h4">Penelitian Pola Hidup Mahasiswa Telkom University</h2>
						   </div>
						   <div class="job-post-item-body d-block d-md-flex">
						     <div class="mr-3"><a href="#">Telkom University</a></div>
						     <div><span>Penelitian</span></div>
						   </div>
						  </div>

						  <div class="ml-auto d-flex">
                <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply</a>
              </div>
						</div>
          </div> <!-- end -->
          <div class="col-md-12 ftco-animate">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Pengembangan Aplikasi Pembelajaran di Kelas</h2>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><a href="#">Telkom University</a></div>
                 <div><span>Web Development</span></div>
               </div>
              </div>
              
              <div class="ml-auto d-flex">
                <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply</a>
              </div>
           </div>
         </div> <!-- end -->
         <div class="col-md-12 ftco-animate">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Pengembangan Web Jurusan</h2>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><a href="#">Telkom University</a></div>
                 <div><span>Web Development</span></div>
               </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply</a>
              </div>
           </div>
         </div> <!-- end -->
         <div class="col-md-12 ftco-animate">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Penelitian Tentang Hubungan Dosen dan Mahasiswa</h2>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><a href="#">Telkom University</a></div>
                 <div><span>Penelitian</span></div>
               </div>
              </div>
              
              <div class="ml-auto d-flex">
                <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply</a>
              </div>
           </div>
         </div> <!-- end -->
				</div>
		<div class="col-md-12 align-items-center">
          <div class="text-center">
            <div class="pagination">
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#">&lt;</a></li>
                <li class="active list-inline-item"><span>1</span></li>
                <li class="list-inline-item"><a href="#">2</a></li>
                <li class="list-inline-item"><a href="#">3</a></li>
                <li class="list-inline-item"><a href="#">4</a></li>
                <li class="list-inline-item"><a href="#">5</a></li>
                <li class="list-inline-item"><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
			</div>
		</section>
	<!-- End List Area -->


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

						<div class="col-sm">
							<div class="single-footer-widget">
								<h4 class="text-white">Newsletter</h4>
								<p style="color:#fff">You can trust us. we only send  offers, not a single spam.</p>
								<div class="d-flex flex-row" id="mc_embed_signup">


									  <form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									    <div class="input-group add-on">
									      	<input class="form-control" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
									      <div class="input-group-btn">
									        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
									      </div>
									    </div>
									      <div class="info mt-20"></div>									    
									  </form>

								</div>
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


	<script src="<?php echo base_url().'asset/js/vendor/jquery-2.2.4.min.js'?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="<?php echo base_url().'asset/js/vendor/bootstrap.min.js'?>"></script>
	<script src="<?php echo base_url().'asset/js/jquery.ajaxchimp.min.js'?>"></script>
	<script src="<?php echo base_url().'asset/js/jquery.nice-select.min.js'?>"></script>
	<script src="<?php echo base_url().'asset/js/jquery.sticky.js'?>"></script>
	<script src="<?php echo base_url().'asset/js/nouislider.min.js'?>"></script>
	<script src="<?php echo base_url().'asset/js/countdown.js'?>"></script>
	<script src="<?php echo base_url().'asset/js/jquery.magnific-popup.min.js'?>"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?php echo base_url().'asset/js/gmaps.min.js'?>"></script>
	<script src="<?php echo base_url().'asset/js/main.js'?>"></script>

</body>

</html>