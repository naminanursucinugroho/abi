@extends('layouts.user')

@section('navbar')
			<!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
              <ul class="nav navbar-nav">
                <li><a href="{{url('/')}}">Beranda</a></li>
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown">Sekolah <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('/profil')}}">Profil Umum</a></li>
                    <li><a href="{{url('/kejuruan')}}">Kejuruan</a></li>
                    <li class="active"><a href="{{url('/fasilitas')}}">Fasilitas</a></li>
                    <li><a href="{{url('/ekstrakurikuler')}}">Ekstrakurikuler</a></li>
                    <li><a href="{{url('/prestasi')}}">Prestasi</a></li>
                  </ul>
                </li>
                <li><a href="{{url('/berita')}}">Berita</a></li>
                <li><a href="{{url('/kontak')}}">Kontak</a></li>
                
              </ul>
            </div>
            <!-- /.navbar-collapse -->
@endsection

@section('content')

    
        
    <!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
    <br>
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="section-heading">
                    <h2 class="h-bold">Fasilitas SMK Assalaam Bandung</h2>
                    <h2>Ruangan Praktik TKR TSM RPL</h2>
                    </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div id="owl-works" class="owl-carousel">
                        <div class="item"><a href="{{ asset('Frontend/Medicio/img/photo/tkr.jpg') }}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/tkr@2x.jpg"><img src="{{ asset('Frontend/Medicio/img/photo/tkr.jpg') }}" class="img-responsive" alt="img"></a></div>
                        <div class="item"><a href="{{ asset('Frontend/Medicio/img/photo/rt.jpg') }}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/rt@2x.jpg"><img src="{{ asset('Frontend/Medicio/img/photo/rt.jpg') }}" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="{{ asset('Frontend/Medicio/img/photo/t.jpg') }}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/t@2x.jpg"><img src="{{ asset('Frontend/Medicio/img/photo/t.jpg') }}" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="{{ asset('Frontend/Medicio/img/photo/s.jpg') }}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/s@2x.jpg"><img src="{{ asset('Frontend/Medicio/img/photo/s.jpg') }}" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="{{ asset('Frontend/Medicio/img/photo/rpl.jpg') }}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/rpl@2x.jpg"><img src="{{ asset('Frontend/Medicio/img/photo/rpl.jpg') }}" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="{{ asset('Frontend/Medicio/img/photo/l.jpg') }}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/l@2x.jpg"><img src="{{ asset('Frontend/Medicio/img/photo/l.jpg') }}" class="img-responsive " alt="img"></a></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /Section: works -->
@endsection