<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>FTI UAJM Repository</title>

    <!-- core CSS -->
    <link href="<?php echo base_url('asset/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/animate.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/prettyPhoto.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/owl.carousel.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/icomoon.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/main.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/responsive.css');?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url('asset/images/ico/favicon.ico');?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('asset/images/ico/apple-touch-icon-144-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('asset/images/ico/apple-touch-icon-114-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('asset/images/ico/apple-touch-icon-72-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('asset/images/ico/apple-touch-icon-57-precomposed.png');?>">
</head>
<!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square"></i> Tel / Fax : 0411 - 871038 / 0411 - 870294</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url('asset/images/logo.png');?>" alt="">FTI UAJM Repository</a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="<?php echo base_url("Project/index"); ?>">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Penulisan<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url("Penulisan/tambah");?>">Form Penulisan</a></li>
                                <li><a href="<?php echo base_url("About/strukturorganisasi");?>">Lihat Data Penulisan</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mahasiswa<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url("Browse/year");?>">Form Register Mahasiswa</a></li>
                                <li><a href="<?php echo base_url("Browse/subject");?>">Lihat Data Mahasiswa</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url("Login/logout");?>">Logout</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->
    <!--/#main-slider-->
<section id="content">
        <div class="container">
            <div class="badge bg-primary text-wrap" style="width: 50rem; height: 10rem;">
  <i><h2> Halaman Data Register Mahasiswa </h2></i>
  <i><b>Untuk password mahasiswa menggunakan password HASH</b></i>
</div>
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Nama</th>
    </tr>
  </thead>
  <tbody>

                  <?php
            if($this->uri->segment(3)){
                    $no=$this->uri->segment(3);
            }
            else{
                    $no=0;
            }

                foreach ($query as $list)
                {
                    $no++;
                    ?>
    <tr>
      <td><?php echo $list->username;?></td>
      <td><?php echo $list->password;?></td>
      <td><?php echo $list->nama;?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </section>

<section id="bottom">
        <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-2">
                    <a href="#" class="footer-logo">
                        <img src="<?php echo base_url('asset/images/logo.png');?>" alt="logo">
                    </a>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>How To Find Us</h3>
                                <ul>
                                    <li><a href="#">Fakultas Teknologi Informasi</a></li>
                                    <li><a href="#">Universitas Atma Jaya Makassar</a></li>
                                    <li><a href="#">Jl. Tanjung Alang No. 23</a></li>
                                    <li><a href="#">Makassar, Sulawesi Selatan, 90134 </a></li>
                                    <li><a href="#">Tel / Fax : 0411 - 871038 / 0411 - 870294</a></li>
                                    <li><a href="#">Email: fti@uajm.ac.id</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3></h3>
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Our Location</h3>
                                <ul>
                                    <li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.5858267756885!2d119.40094421422478!3d-5.170124996248253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf1d6fa35858f1%3A0x95e8f8c520542dc3!2sUniversitas%20Atma%20Jaya%20Makassar!5e0!3m2!1sid!2sid!4v1617795831158!5m2!1sid!2sid" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->
                        <!--/.col-md-3-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy;  <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">FTI UAJM Repository</a>.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo base_url('asset/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.prettyPhoto.js');?>"></script>
    <script src="<?php echo base_url('asset/js/owl.carousel.min.js');?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.isotope.min.js');?>"></script>
    <script src="<?php echo base_url('asset/js/main.js');?>"></script>
</body>

</html>
