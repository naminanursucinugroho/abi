@extends('layouts.user')

@section('navbar')
			<!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
              <ul class="nav navbar-nav">
                <li><a href="{{url('/')}}">Beranda</a></li>
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown">Sekolah <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="active"><a href="{{url('/profil')}}">Profil Umum</a></li>
                    <li><a href="{{url('/kejuruan')}}">Kejuruan</a></li>
                    <li><a href="{{url('/fasilitas')}}">Fasilitas</a></li>
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
   <br><br><br><br><br>
    <section id="boxes" class="home-section paddingtop-80">
    
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            
                            <i class="fa fa-check fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Terakreditasi</h4>
                            <h3 class="h-bold">" {{$komponen->akreditasi}} "</h3>
                
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            
                            <i class="fa fa-list-alt fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Visi & Misi</h4>
                            <p>
                            {!!$profil->visi!!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Lokasi Sekolah</h4>
                            <p>
                            {{$lokasi->lokasi}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Section: boxes -->
    
    
    <section id="callaction" class="home-section paddingtop-40">    
           <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="callaction bg-gray">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="cta-text">
                                    <h3>Profil</h3>
                                    <p>SMK Assalaam merupakan sekolah kejuruan dengan kompetensi keahlian teknik kendaraan ringan (roda empat) plus sepeda motor dalam proses pendidikan pelatihan. Peka terhadap perubahan perkembangan teknologi baru dan tuntutan kebutuhan pasar kerja, agar lulusannya siap menghadapi perubahan.

SMK Assalaam dengan penuh kesadaran berani melakukan perubahan dengan berbagai inovasi dan improvisasi, mencari terobosan untuk meraih keberhasilan bagi peserta didiknya.

Tekad tersebut sebagai wujud nyata dari SMK Assalaam didukung oleh sarana praktek yang lengkap UP TO DATE, waktu praktek memadai dan praktek berstandar industri dengan pelayanan prima. </p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>  
    <!-- Section: services -->
  <section id="callaction" class="home-section paddingtop-40">    
           <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="callaction bg-gray">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="cta-text">
                                    <h3>Keunggulan</h3>
                                    <p>Program pembelajaran disusun berdasarkan standar Nasional dan dikembangkan berdasarkan kebutuhan industri serta  bekerjasama dengan DU/DI (Dunia Usaha/Dunia Industri)
Menghasilkan lulusan yang siap bekerja,memiliki mentalitas kerja yang tangguh, dan memiliki keterampilan ganda (jurusan otomotif : Mobil + Motor, jurusan  RPL : programer + teknisi)
Tenaga pendidik berasal dari lulusan perguruan-perguruan tinggi terkemuka, dan pelaku Industri
Setiap pelajaran praktek/paket keahlian dilaksanakan dengan menggunakan sistem blok, dengan 3 guru pengajar.
Ujian Kompetensi diselenggarakan secara mandiri, menggunakan kendaraan dan alat yang mutakhir .
Pengembangan karakter dibentuk atas dasar ajaran ISLAM sebagai fondasi utama dalam berbagai aktivitas siswa.
Dibukanya layanan Bursa Kerja Khusus yang menyediakan pelatihan tambahan siswa untuk siap bekerja dan penyaluran lulusan ke dunia kerja
Memiliki unit produksi SMK Assalaam yang menjadi laboratorium langsung bagi siswa dalam mengembangkan keterampilan kejuruannya.
Sarana dan prasarana pembelajaran yang lengkap dan terkini</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>  
            <div class="col-sm-3 col-md-3">
                
                <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-box">
                    <div class="service-icon">
                        <span class="fa fa-h-square fa-3x"></span> 
                    </div>
                    <div class="service-desc">
                        <h5 class="h-light">Gyn Care</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                    </div>
                </div>
                </div>
                
                <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-icon">
                        <span class="fa fa-filter fa-3x"></span> 
                    </div>
                    <div class="service-desc">
                        <h5 class="h-light">Neurology</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                    </div>
                </div>
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.3s">
                <div class="service-box">
                    <div class="service-icon">
                        <span class="fa fa-user-md fa-3x"></span> 
                    </div>
                    <div class="service-desc">
                        <h5 class="h-light">Sleep Center</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                    </div>
                </div>
                </div>

            </div>
            
        </div>      
        </div>
    </section>
    <!-- /Section: services -->
    <!-- /Section: works -->
    
    
    <!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">
        <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                    <h2>SEJARAH SINGKAT</h2>
                    </div>
                    </div>
<div class="carousel-reviews broun-block">
    <div class="container">
        <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-md-4 col-sm-6">
                            <div class="block-text rel zmin">
                                <a title="" href="#">Tahun 2009</a>
                                <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                            </div>
                            <div class="person-text rel text-light">
                                <img src="img/testimonials/4.jpg" alt="" class="person img-circle" />
                            </div>
                            <div class="person-text rel text-light">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 hidden-xs">
                            <div class="block-text rel zmin">
                                <a title="" href="#">Tahun 2013</a>
                                <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                            </div>
                            <div class="person-text rel text-light">
                                <img src="img/testimonials/4.jpg" alt="" class="person img-circle" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                            <div class="block-text rel zmin">
                                <a title="" href="#">Tahun 2014</a>
                                <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                            </div>
                            <div class="person-text rel text-light">
                                <img src="img/testimonials/4.jpg" alt="" class="person img-circle" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-6">
                            <div class="block-text rel zmin">
                                <a title="" href="#">Tahun 2016</a>
                                <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                            </div>
                            <div class="person-text rel text-light">
                                <img src="img/testimonials/4.jpg" alt="" class="person img-circle" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 hidden-xs">
                            <div class="block-text rel zmin">
                                <a title="" href="#">Tahun 2017</a>
                                <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                            </div>
                            <div class="person-text rel text-light">
                                <img src="img/testimonials/5.jpg" alt="" class="person img-circle" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                            <div class="block-text rel zmin">
                                <a title="" href="#">Tahun 2018</a>
                                <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                            </div>
                            <div class="person-text rel text-light">
                                <img src="img/testimonials/6.jpg" alt="" class="person img-circle" />
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
    <!-- /Section: testimonial -->
    

    <!-- Section: pricing -->   
    <!-- /Section: pricing -->
    
    <section id="partner" class="home-section paddingbot-60">   
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                    <h2>SMK ASSALAAM YANG TERBAIK</h2>
                    </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>
        
           <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                        <a href="#"><img src="img/dummy/partner-1.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                        <a href="#"><img src="img/dummy/partner-2.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                        <a href="#"><img src="img/dummy/partner-3.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                        <a href="#"><img src="img/dummy/partner-4.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
    </section> 
@endsection