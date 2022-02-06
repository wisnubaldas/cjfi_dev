@extends('layout.index')
@section('content')
<div class="col-md-12">
    <div class="content">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($slide as $item)
                <div class="carousel-item {{($loop->index == 0)?'active':''}}">
                    <img class="d-block w-100 rounded img-fluid img-thumbnail"
                        src="{{url('/img/slider/'.$item->image)}}"
                        alt="First slide">
                    <div class="carousel-caption">
                        <h3>{{$item->name}}</h3>
                        <p>{{$item->desc}}<br>
                            {{$item->brand}} {{$item->size}}
                        </p>
                    </div>
                </div>
                @endforeach
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
        <div class="row">
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
        </div>
        

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
