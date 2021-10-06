@extends('mobile.layout.index',['footer'=>false])
@section('content')
<div class="container">
    <div class="section">
        <div class="row ">
            <div class="col s12 pad-0">
                <h5 class="bot-20 sec-tit">Pilih Slot Boking</h5>
                <div class="collection">
                    @foreach($slot as $s)
                        <a href="/m/boking-lantai/{{$s->lantai}}" class="collection-item">Lantai {{$s->lantai}}
                            <span class="new badge red lighten-2" data-badge-caption="Slot Tersedia">{{$s->slot}}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('css')
    <style>
        .setting-box {
	        background-color: #ffffff;
            border-radius: 2px;
            padding: 5px;
            margin-bottom: 15px;
        }
    </style>
@endpush
