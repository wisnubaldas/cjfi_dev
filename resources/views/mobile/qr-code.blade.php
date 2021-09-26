@extends('mobile.layout.index',['footer'=>false])
@section('content')
<div class="container">
    <div class="section">
        <div class="row ">
            <div class="col s12 pad-0">
                <a class="img-wrap" href="https://api.qrserver.com/v1/create-qr-code/?size=500x500&data={{$qr}}" data-fancybox="images" data-caption="Amazing Photography">
                    <img class="responsive-img z-depth-1" src="https://api.qrserver.com/v1/create-qr-code/?size=500x500&data={{$qr}}">
                </a>

            </div>
        </div>
    </div>
    <div class="secction">
        <a href="/m/home" class="waves-effect waves-light btn-large teal lighten-2 ">Back</a>
    </div>
</div>
<div class="secction">
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
