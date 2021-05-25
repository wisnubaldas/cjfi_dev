@extends('layout.index')
@section('content')
@php($opt = session('option'))
<br>
<div class="row">
    @include('partial.left-tumbnail')
     {{-- @dump($opt) --}}
    <div class="col-md-10 col-xs-12">
        @if ($data->tiles)
            {{-- @dump($data->tiles) --}}
            @include('partial.list-tiles') 
        @else
            @if ($opt['brand'])
                @include('partial.slide-brand')
            @else
                @include('partial.slide')
            @endif
        @endif
    </div>
</div>
@endsection

@push('script')
    <script>
        window.scrollTo(160, 210);

        $('.carousel').carousel({
            interval: 3000
          })
    </script>
@endpush

@push('css')
    
@endpush