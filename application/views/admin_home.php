<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome Repository</title>

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
                            <p><i class="fa fa-phone-square"></i> +6285692414524</p>
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
                    <a class="navbar-brand" href="index.html"><img src="" alt=""></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="<?php echo base_url("Project/index"); ?>">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url("About/index");?>">Visi Dan Misi</a></li>
                                <li><a href="<?php echo base_url("About/strukturorganisasi");?>">Struktur dan Organisasi</a></li>
                                <li><a href="<?php echo base_url("Browse/division");?>">Sarana Dan Prasana</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url("Browse/year");?>">Browse By Year</a></li>
                                <li><a href="<?php echo base_url("Browse/subject");?>">Browse By Subject</a></li>
                                <li><a href="<?php echo base_url("Browse/division");?>">Browse By Division</a></li>
                                <li><a href="<?php echo base_url("Browse/Author");?>">Browse By Author</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url("C_admin/logout");?>">Logout</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->
    <!--/#main-slider-->
<section id="partner">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Welcome To UTY Open Access ADMIN</h2>
                 <a href="#" class="btn btn-primary">Click here to start customising this repository</a>
            </div>
        </div>
        <!--/.container-->
    </section>
    <section id="feature">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Latest Addition</h2>
                <p class="lead">View items added to the repository in the past week.</p>
            </div>
            <div class="clearfix text-center">
                <br>
                <br>
                <a href="#" class="btn btn-primary">Show More</a>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->

    <section id="recent-works">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Search repository</h2>
                <p class="lead">Search the repository using a full range of fields. Use the search field at the top of the page for a quick search.</p>
            </div>

            
            <!--/.row-->
            <div class="clearfix text-center">
                <br>
                <br>
                <a href="#" class="btn btn-primary">Show More</a>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#recent-works-->

    <section id="services" class="service-item">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Browse Repository</h2>
                <p class="lead">Browse the items in the repository by subject.</p>
            </div>
            <div class="clearfix text-center">
                <br>
                <br>
                <a href="#" class="btn btn-primary">Show More</a>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <section id="services" class="service-item">
        <div class="container">
            <div class="center fadeInDown">
                <h2>About This Repository</h2>
                <p class="lead">More Information about this site</p>
            </div>
            <div class="clearfix text-center">
                <br>
                <br>
                <a href="#" class="btn btn-primary">Show More</a>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <section id="services" class="service-item">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Repository Policies</h2>
                <p class="lead">Policy for use of material in this repository</p>
            </div>
            <div class="clearfix text-center">
                <br>
                <br>
                <a href="#" class="btn btn-primary">Show More</a>
            </div>
            <!--/.row-->
        </div>s
        <!--/.container-->
    </section>

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy;  <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">CV Kreasi Teknologi Nusantara</a>.
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
