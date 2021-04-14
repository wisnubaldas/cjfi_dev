@extends('layout.index')
@section('content')
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 rounded img-fluid img-thumbnail" src="http://cjfi.co.id/images/home/slide/L9k3DIubDYeqgX2slYqAR7wLSyy4eOjz.jpeg" alt="First slide">
      <div class="carousel-caption">
        <h3>PAPILLON</h3>
        <p>Glossy Decorative Wall Tile <br>
            PICASSO 25x40 cm
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 rounded img-fluid img-thumbnail" src="http://cjfi.co.id/images/home/slide/GLACIER_Int.jpg" alt="Second slide">
      <div class="carousel-caption">
        <h3>PAPILLON</h3>
        <p>Glossy Decorative Wall Tile <br>
            PICASSO 25x40 cm
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 rounded img-fluid img-thumbnail" src="http://cjfi.co.id/images/home/slide/hGj2sybZNCJBHLoE8Z5Hon2t5fnMqI9G.jpeg" alt="Third slide">
      <div class="carousel-caption">
        <h3>PAPILLON</h3>
        <p>Glossy Decorative Wall Tile <br>
            PICASSO 25x40 cm
        </p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  {{-- bloon --}}
  <div class="col-md-4">
    <div class="box">
      <a href="#">
        <img src="http://cjfi.co.id/images/home/ESCADA_MB_KATALOG.jpg" class="thumb">
        <h5>Inspirasi Desain</h5>
        <p>Temukan Koleksi keramik yang menginspirasi anda dan keluarga....</p>
       
      </a>
    </div>
  </>
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