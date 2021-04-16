@extends('layout.index')
@section('content')
@php($opt = session('option'))
<br>
<div class="row">
    @include('partial.left-tumbnail')
    <div class="col-md-10 col-xs-12">
        @if ($data->tiles)
        @json($data->tiles)
        @else
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 rounded img-fluid img-thumbnail"
                        src="http://cjfi.co.id/images/home/slide/L9k3DIubDYeqgX2slYqAR7wLSyy4eOjz.jpeg"
                        alt="First slide">
                    <div class="carousel-caption">
                        <h3>PAPILLON</h3>
                        <p>Glossy Decorative Wall Tile <br>
                            PICASSO 25x40 cm
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 rounded img-fluid img-thumbnail"
                        src="http://cjfi.co.id/images/home/slide/GLACIER_Int.jpg" alt="Second slide">
                    <div class="carousel-caption">
                        <h3>PAPILLON</h3>
                        <p>Glossy Decorative Wall Tile <br>
                            PICASSO 25x40 cm
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 rounded img-fluid img-thumbnail"
                        src="http://cjfi.co.id/images/home/slide/hGj2sybZNCJBHLoE8Z5Hon2t5fnMqI9G.jpeg"
                        alt="Third slide">
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
        @endif


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