
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
                <a href="<?php echo site_url('Dosen/Home_dosen/index')?>"><img style="width:140px; height: 45px;" src="<?php echo base_url().'home/img/logo.png '?>" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="nav-item active"><a class="nav-link" href="<?php echo site_url('Dosen/Home_dosen/index')?>">Home</a></li>
                    <li class="nav-item active"><a class="nav-link" href="<?php echo site_url('Dosen/Home_dosen/buatProyek')?>">Buat Proyek</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Akun
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('Dosen/Home_dosen/profilDosen')?>">Profil</a></li>
                            <li><a href="<?php echo site_url('Login/logout')?>">Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->

<center>

    <section class="relative ftco-section" id="home">
        <div class="container">
            <div class="row fullscreen align-items-center">
                <div class="row">
                    <div style="margin-top :150px;">
                        <h3 class="text-uppercase" style="font-weight : 700; color :#03a678">Edit Proyek</h3> <br/>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card">

                    <div class="card-body">
                        <?php echo form_open('Dosen/Buat_proyek/prosesedit','',array('id'=> $updatepro->proyek_id )); ?>
<!--                        <form action="--><?php //echo site_url('Dosen/Buat_proyek/prosesedit')?><!--" method="post" attributes="'',array('id'=> $updatepro->proyek_id )">-->
                            <div class="form-group">
                                <label for="inputNamaProyek">Nama Proyek</label>
                                <?php echo form_input('nama_proyek',$updatepro->nama_proyek,'required="required", class="form-control"')?>
                            </div>
                            <div class="form-group">
                                <label for="inputNamaUniv">Universitas</label>
                                <?php echo form_input('universitas',$updatepro->universitas,'required="required", class="form-control"')?>
                            </div>
                            <div class="form-group">
                                <label for="fakultas">Fakultas</label>
                                <select id="fakultas" name="fakultas"class="form-control">
                                    <option>-</option>
                                    <option>FTE</option>
                                    <option>FRI</option>
                                    <option>FIF</option>
                                    <option>FEB</option>
                                    <option>FKB</option>
                                    <option>FIK</option>
                                    <option>FIT</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select id="jurusan" name="jurusan"class="form-control">
                                    <option>-</option>
                                    <option>S1 Teknik Elektro</option>
                                    <option>S1 Teknik Telekomunikasi</option>
                                    <option>S1 Teknik Fisika</option>
                                    <option>S1 Sistem Komputer</option>
                                    <option>S2 Teknik Elektro</option>
                                    <option>S1 Teknik Industri</option>
                                    <option>S1 Sistem Informasi</option>
                                    <option>S2 Teknik Industri</option>
                                    <option>S1 Rekayasa Perangkat Lunak</option>
                                    <option>S1 Infromatika</option>
                                    <option>S2 Teknologi Informasi</option>
                                    <option>S2 Informatika</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Proyek</label>
                                <?php echo form_textarea('deskripsi',$updatepro->deskripsi,'required="required", class="form-control"')?>
                            </div>
                            <div class="form-group">
                                <label for="bidang">Bidang</label>
                                <?php echo form_input('bidang',$updatepro->bidang,'required="required", class="form-control"')?>
                            </div>
                            <div class="form-group">
                                <label for="keahlian">Keahlian</label>
                                <?php echo form_input('keahlian',$updatepro->keahlian,'required="required", class="form-control"')?>
                            </div>
                            <div class="form-group">
                                <label for="jum_mahasiswa">Jumlah Mahasiswa yang dibutuhkan</label>
                                <select class="form-control" id="jum_mahasiswa" name="jum_mahasiswa">
                                    <option>1</option>
                                    <option >2</option>
                                    <option >3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tawaran_min">Tawaran Minimum</label>
                                <?php echo form_input('tawaran_min',$updatepro->tawaran_min,'required="required", class="form-control",type="number"')?>
                            </div>
                            <div class="form-group">
                                <label for="tawaran_max">Tawaran Maximum</label>
                                <?php echo form_input('tawaran_max',$updatepro->tawaran_max,'required="required", class="form-control",type="number"')?>
                            </div>
                            <label for="inputTawar">Apakah dapat ditawar?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opsi_tawaran" id="RadioTawarYa" value="Yes" checked>
                                <label class="form-check-label" for="RadioTawar">Ya</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opsi_tawaran" id="RadioTawarTidak" value="No">
                                <label class="form-check-label" for="RadioTawar">Tidak</label>
                            </div> <br/>
                            <button type="edit" name="edit" class="btn btn-danger btn-md">Edit Proyek</button>
                        </form>



</div>

    </section>

</body>
</html>