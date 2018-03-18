@section('content')

<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header"> 
            <!-- /.box-header -->
            <div class="box-body pad">

              @foreach($prestasis as $prestasi)
              <div class="col-sm-4" align="center">
                <a href="">
                    <div class="box box-primary">
                      <div class="box-header">
                        <h3 class="box-title">{{ $prestasi->nama }}</h3>
                        
                      </div>
                    <div class="box-body pad">
                        <img src="{{asset('img/'.$prestasi->gambar)}}" class="img-responsive img-thumbnail" alt="" style="width: 225px; height: 225px;">
                        </a>
                        <br><br><br>
                        <a href="{{ route('prestasi.edit', $prestasi->id) }}" class="btn btn-primary btn-block"><span class="fa fa-edit"></span> Ubah Detail</a>
                    </div>
                    </div>
                </div>
              @endforeach
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>

      <!-- ./row -->
    </section>