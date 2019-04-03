<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
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
    <title>Register Maiproyek</title>

    <link rel="stylesheet" href="<?php echo base_url().'asset/css/linearicons.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'asset/css/owl.carousel.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'asset/css/themify-icons.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'asset/css/font-awesome.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'asset/css/nice-select.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'asset/css/nouislider.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'asset/css/bootstrap.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'asset/css/main.css'?>">
</head>
<style>
        .logina{
            color:green !important;
    }

        }
</style>
<body>


<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area" style="padding : 50px 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" style="padding :50px 0">
                <div class="login_box_img" style="margin-right : 20px">
                    <h3 style="text-align:center; color : #03A678"> Daftar dan temukan tim terbaik disini</h3>
                    <img style="width:100%;" class="img-fluid" src="<?php echo base_url().'asset/png/10.png'?>" alt="">

                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h1>Daftar</h1>
                    <h4>Bergabung sebagai Dosen</h4>
                    <form class="row login_form" action="<?php echo site_url('Login/addos')?>" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-12 form-group">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" >
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="username" placeholder="Username" >
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" id="name" name="email" placeholder="Email" >
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="name" name="password" placeholder="Password" >
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="name"  placeholder="Konfirmasi Password" >
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Daftar</button>
                                <a href="<?php echo base_url('Login/indexd');?>">Sudah punya akun ? <strong class="logina">Login</strong></a>
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