<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->

	<link rel="icon" href="<?php echo base_url().'asset/img/icon.png'?>">

	<link rel="shortcut icon" href="<?php echo base_url().'asset/img/fav.png'?>">

	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Login Maiproyek</title>

	<link rel="stylesheet" href="<?php echo base_url().'asset/css/linearicons.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/owl.carousel.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/themify-icons.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/font-awesome.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/nice-select.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/nouislider.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/bootstrap.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/main.css'?>">
</head>
<style>.logina{
    color:green !important;
    }
</style>
<body>


	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img style="width:100%;" class="img-fluid" src="<?php echo base_url().'asset/png/1.png'?>" alt="">

					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h1>Masuk</h1>
						<h4>Selamat datang kembali</h4>
						<?php if($this->session->flashdata('success_modul') != NULL){?>
							<div class="alert alert-success fade show" role="alert">
									<strong>Terimakasih</strong> Anda telah berhasil Register
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
							</div>
									
						<?php } ?>
						<form class="row login_form" action="<?php echo site_url('Login/ceklogin')?>" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="name" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn"name="login">Log In</button>
                                <a href="#">Forgot Password?</a>
                                <a href="<?php echo base_url('Login/register');?>">Belum punya akun ? <strong class="logina">Daftar disni</strong></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	<!-- start footer Area -->



	<script src="<?php echo base_url().'asset/js/vendor/jquery-2.2.4.min.js'?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="<?php echo base_url().'asset/js/vendor/bootstrap.min.js'?>"></script>
	<script src="<?php echo base_url().'asset/js/jquery.ajaxchimp.min.js'?>"></script>
	<script src="<?php echo base_url().'asset/js/jquery.nice-select.min.js'?>"></script>
	<script src="<?php echo base_url().'asset/js/jquery.sticky.js'?>"></script>
	<script src="<?php echo base_url().'asset/js/nouislider.min.js'?>"></script>
	<script src="<?php echo base_url().'asset/js/jquery.magnific-popup.min.js'?>"></script>
	<script src="<?php echo base_url().'asset/js/owl.carousel.min.js'?>"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?php echo base_url().'asset/js/gmaps.min.js'?>"></script>
	<script src="<?php echo base_url().'asset/js/main.js'?>"></script>
</body>

</html>