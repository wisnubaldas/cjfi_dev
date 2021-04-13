@extends('layout.index')
@section('content')
@php
 $img = [
            [
                'name'=>'/assets/img/brand/atena_tile2.png',
                'link'=>'#'
],
[
                'name'=>'/assets/img/brand/harmony2.png',
                'link'=>'#'
            ]
];
@endphp
<br>
<div class="col-md-3 col-xs-12">
    @foreach ($img as $item)
        <div class="box-brand">
            <a href="{{$item['link']}}">
                <img src="{{url($item['name'])}}" class="img-responsive">
            </a>
        </div>
    @endforeach
    
    
</div>
<div class="col-md-9">
    dadasdasdasdasdsadasdsdasd
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