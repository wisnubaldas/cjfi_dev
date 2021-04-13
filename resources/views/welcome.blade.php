@extends('layout.index')
@section('content')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="http://cjfi.co.id/images/home/slide/L9k3DIubDYeqgX2slYqAR7wLSyy4eOjz.jpeg" alt="..." width="100%">
        <div class="carousel-caption">
            <h3>PAPILLON</h3>
            <p>Glossy Decorative Wall Tile <br>
                PICASSO 25x40 cm
            </p>
        </div>
      </div>
      <div class="item">
        <img src="http://cjfi.co.id/images/home/slide/GLACIER_Int.jpg" alt="..." width="100%">
        <div class="carousel-caption">
            <h3>PAPILLON</h3>
            <p>Glossy Decorative Wall Tile <br>
                PICASSO 25x40 cm
            </p>
        </div>
      </div>
      <div class="item">
        <img src="http://cjfi.co.id/images/home/slide/hGj2sybZNCJBHLoE8Z5Hon2t5fnMqI9G.jpeg" alt="..." width="100%">
        <div class="carousel-caption">
            <h3>PAPILLON</h3>
            <p>Glossy Decorative Wall Tile <br>
                PICASSO 25x40 cm
            </p>
        </div>
      </div>
    </div>
  
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div> <!-- Carousel -->

  {{-- bloon --}}
  <div class="col-md-4">
    <div class="box">
      <a href="#">
        <img src="http://cjfi.co.id/images/home/ESCADA_MB_KATALOG.jpg" class="thumb">
        <h5>Inspirasi Desain</h5>
        <p>Temukan Koleksi keramik yang menginspirasi anda dan keluarga....</p>
       
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="box">
      <a href="#">
        <img src="http://cjfi.co.id/images/home/ESCADA_MB_KATALOG.jpg" class="thumb">
        <h5>Prolduk Baru</h5>
        <p>Temukan Koleksi keramik yang menginspirasi anda dan keluarga....</p>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="box">
      <a href="#">
        <img src="http://cjfi.co.id/images/home/ESCADA_MB_KATALOG.jpg" class="thumb">
        <h5>Produksi Ramah Lingkungan</h5>
        <p>Temukan Koleksi keramik yang menginspirasi anda dan keluarga....</p>
      </a>
    </div>
  </div>

@endsection

@push('script')
    <script>
        $('.carousel').carousel({
            interval: 3000
          })
    </script>
@endpush

@push('css')
    
@endpush