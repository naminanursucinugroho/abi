<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SMK ASSALAAM Badung</title>

  <!-- Bootstrap Core CSS -->
  <link href="k/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!-- Fonts -->
  <link href="k/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="k/css/animate.css" rel="stylesheet" />
  <!-- Squad theme CSS -->
  <link href="k/css/style.css" rel="stylesheet">
  <link href="k/color/default.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Squadfree
    Theme URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
        <a class="navbar-brand" href="{{url ('/home')}}">
          <h1>Company</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{ url ('/') }}">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sekolah <b class="caret"></b>
            <ul class="dropdown-menu">
              <li><a href="{{url ('/profil')}}">Profil Umum</a></li>
              <li><a href="{{url ('/kejuruan')}}">Kejuruan</a></li>
              <li><a href="{{url ('/Fasilitas')}}">Fasilitas</a></li>
              <li><a href="{{url ('/ekstrakurikuler')}}">Ektrakulikuler</a></li>
            </ul>
          <li><a href="{{url ('/berita')}}">Berita</a></li>
          <li><a href="{{url ('/kontak')}}">Kontak</a></li>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- Section: intro -->
  <section id="intro" class="intro">

    <div class="text">
      <h2>WELCOME<span class="text_color">COMPANY</span> </h2>
      <p class="text-right wow bounceIn" data-wow-delay="0.4s">
      <h4>JL.Situtarate</h4>
        <a href="{{ url('/profil') }}" class="btn btn-skin btn-lg">Pelajari Selengkapnya <i class="fa fa-angle-right"></i></a>
      </p>
    </div>
  </section>
  <!-- /Section: intro -->

  <!-- Section: services -->

    <section id="service" class="home-section nopadding paddingtop-60">

        <div class="container">

        <div class="row">
            <div class="col-sm-5">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                <img src="{{ asset('img/'.$sambutan->foto) }}" class="img-responsive" alt="" />
                </div>
            </div>
            <div class="col-sm-7">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="section-heading">
                    <h2 class="h-bold">Sambutan Kepala Sekolah</h2>
                    </div>
                    <hr>
                    <p align="justify">{!!$sambutan->sambutan!!}</p>
                </div>
            </div>
            
        </div>      
        </div>
    </section>  
    <!-- /Section: services -->
<!-- Section: About -->
<section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

        <div class="carousel-reviews broun-block">
            <div class="container">
                <div class="row">
                    <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                    
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Ute Juli Kurnia</a>
                                        <p>Menjadikan Siswa Siswi SMK ASSALAAM Bandung menjadi siswa yang berbakat</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">                    
                                        <img src="{{ asset('/Frontend/Medicio/img/testimonials/ute.jpg') }}" alt="" class="person img-circle" />
                                        <a title="" href="#">Ute Juli Kurnia</a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Agung Wahyudi</a>
                                        <p>Menjadikan siswa siswi SMK ASSALAAm Bandung Menjadi Siswa yang mempunyai bakat progeming</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="{{ asset('/Frontend/Medicio/img/testimonials/agung.jpg') }}" alt="" class="person img-circle" />
                                        <a title="" href="#">Agung Wahyudi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Wildan Abdul Azis</a>
                                        <p>Menjadikan Siswa SMK ASSALAAM Bandung Menjdai berbakat dalam ilmu Android</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="{{ asset('/Frontend/Medicio/img/testimonials/wildan.jpg') }}" alt="" class="person img-circle" />
                                        <a title="" href="#">Wildan Abdul Azis</a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Salman Hadi</a>
                                        <p>Menjadikan Siswa Siswi SMK ASSALAAM Bandung menjadi bebakat dalam ilmu disainer</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="{{ asset('/Frontend/Medicio/img/testimonials/sal.jpg') }}" alt="" class="person img-circle" />
                                        <a title="" href="#">Salman Hadi</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                           
                        </div>
                        
                        <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /Section: About -->
  <!-- Core JavaScript Files -->
  <script src="k/js/jquery.min.js"></script>
  <script src="k/js/bootstrap.min.js"></script>
  <script src="k/js/jquery.easing.min.js"></script>
  <script src="k/js/jquery.scrollTo.js"></script>
  <script src="k/js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="k/js/custom.js"></script>
  <script src="k/contactform/contactform.js"></script>

</body>

</html>
