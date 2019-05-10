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
{details}
                <div style="margin-top :150px;">
                    <h3 class="text-uppercase" style="font-weight : 700; color :#03a678"><?php echo $details->nama_proyek; ?></h3> <br/> <!-- Judul Proyek -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
<!--                --><?php //foreach($details as $b =>  $row){?>
                <div class="container">
                    <div class="card">

                        <div class="card-body"> <h5>Deskripsi </h5>
                            <p> <br><?php echo $details->deskripsi; ?></p> <!--Deskripsi Proyek -->
                        </div>

                    </div>



                    <div class="card">
                        <div class="card-body"> <h6>Jurusan</h6>
                            <h7> <?php echo $details->jurusan; ?> </h7> <!-- Tawaran -->
                        </div>
                        <div class="card-body"> <h6>Fakultas</h6>
                            <h7> <?php echo $details->fakultas; ?> </h7> <!-- Tawaran -->
                        </div>
                        <div class="card-body"> <h6>Bidang</h6>
                            <h7> <?php echo $details->bidang; ?> </h7> <!-- Tawaran -->
                        </div>
                        <div class="card-body"> <h6>Keahlian</h6>
                            <h7> <?php echo $details->keahlian; ?> </h7> <!-- Tawaran -->
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body"> <h5>Tentang Dosen </h5>
                            <p> <br> Ahmad Mustofa </p> <!-- Tentang Dosen -->
                        </div>
                    </div>


                </div>
            </div>

<!--        --><?php //}?>


            <div class="col col-lg-4">
                <div class ="card">
                    <div class="card-body" style="text-align:center"> <h5>Tertarik?</h5>

                        <h6 style="margin:5px">Tawaran mulai Rp.<?php echo $details->tawaran_min; ?> sampai Rp.<?php echo $details->tawaran_max; ?></h6>
                        <p style="margin:5px">Bisa melakukan nego</p>
                        <a href="#" class="btn btn-danger btn-lg-primary btn-block" >Tawar</a>

                        <h6 style="margin:5px">Jumlah yang dibutuhkan : </h6>
                        <h2 style="color:#03a678 "><?php echo $details->jum_mahasiswa; ?></h2>

                    </div>
                </div>

                <div class="card">
                    <div class="card-body"> <h5>Join Proyek</h5>
                        <p style="margin:5px">Jika Anda telah menyetujui tawaran harga anda bisa klik tombol dibawah ini!</p>
                        <a href="#" class="btn btn-danger btn-lg-primary btn-block" >JOIN</a>

                    </div>
                </div>

                <div class="card">
                    <div class="card-body"> <h5>Proyek Lainnya</h5>

                        <a href="#"><?php echo $recommendations->nama_proyek; ?><a> <br/>



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
</html>