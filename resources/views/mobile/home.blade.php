@extends('mobile.layout.index')
@section('content')
<!-- Slide -->
<div class="carousel carousel-fullscreen carousel-slider home_carousel">
    <div class="carousel-item" href="#one!">
        <div class="bg" style="background-image: url('/mobile/images/slider-1.jpg')"></div>
        <div class="item-content center-align white-text">
            <div class="spacer-large"></div>
            <h3>Arcade Pinus Wood MCC</h3>
            <h5 class="light white-text">40x40cm, --RGB,CYMK,CRB</h5>
        </div>
    </div>
    <div class="carousel-item" href="#two!">
        <div class="bg" style="background-image: url('/mobile/images/slider-4.jpg')"></div>
        <div class="item-content left-align white-text">
            <div class="spacer-large"></div>
            <h3>Kitchen Moscow </h3>
            <h5 class="light white-text">40x40cm, --RGB,CYMK,CRB</h5>
        </div>
    </div>
    <div class="carousel-item" href="#three!">
        <div class="bg" style="background-image: url('/mobile/images/slider-2.jpg')"></div>
        <div class="item-content center-align white-text">
            <div class="spacer-large"></div>
            <h3>Bathroom Anastasia</h3>
            <h5 class="light white-text">40x40cm, --RGB,CYMK,CRB</h5>
        </div>
    </div>
    <div class="carousel-item" href="#four!">
        <div class="bg" style="background-image: url('/mobile/images/slider-3.jpg')"></div>
        <div class="item-content right-align white-text">
            <div class="spacer-large"></div>
            <h3>Living Room Spain Wood</h3>
            <h5 class="light white-text">40x40cm, --RGB,CYMK,CRB</h5>
        </div>
    </div>
</div>
<!-- end Slide -->
<div class="container">
    <div class="section">
        <div class="row ">
            <div class="col s12 pad-0">
                <h5 class="bot-20 sec-tit center ">Brands</h5>
                <div class="row settings-row">
                    <div class="col s6">
                        <div class="setting-box z-depth-2 center indigo lighten-5">
                            <a href="/">
                                <img src="/mobile/images/logo-1.png" alt="" srcset="" width="100%">
                            </a>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="setting-box z-depth-2 center indigo lighten-5">
                            <a href="/">
                                <img src="/mobile/images/logo-2.png" alt="" srcset="" width="100%">
                            </a>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="setting-box z-depth-2 center indigo lighten-5">
                            <a href="/">
                                <img src="/mobile/images/logo-3.png" alt="" srcset="" width="100%">
                            </a>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="setting-box z-depth-2 center indigo lighten-5">
                            <a href="/">
                                <img src="/mobile/images/logo-4.png" alt="" srcset="" width="100%">
                            </a>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="setting-box z-depth-2 center indigo lighten-5">
                            <a href="/">
                                <img src="/mobile/images/logo-5.png" alt="" srcset="" width="100%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="row primary-bg">
    <div class="spacer"></div>
    <h5 class="center sec-tit">Our Motif</h5>
    <div class="carousel carousel-fullscreen carousel-slider home_carousel">
        <div class="carousel-item" href="#one!">
            <div class="bg" style="background-image: url('/mobile/images/m-slider-1.png')"></div>
            <div class="item-content right-align white-text">
                <div class="spacer-large"></div>
                <h3>PERLA</h3>
                <h5 class="light white-text">40x40cm, Wall and Floor</h5>
                <a class="waves-effect waves-light btn-large pulse indigo" href="/mobile/item-detail">
                    Detail
                </a>
            </div>
        </div>
        <div class="carousel-item" href="#two!">
            <div class="bg" style="background-image: url('/mobile/images/m-slider-4.png')"></div>
            <div class="item-content right-align white-text">
                <div class="spacer-large"></div>
                <h3>Kitchen Moscow </h3>
                <h5 class="light white-text">40x40cm, --RGB,CYMK,CRB</h5>
                <a class="waves-effect waves-light btn-large pulse indigo" href="/mobile/item-detail">
                    Detail
                </a>
            </div>
        </div>
        <div class="carousel-item" href="#three!">
            <div class="bg" style="background-image: url('/mobile/images/m-slider-2.png')"></div>
            <div class="item-content right-align white-text">
                <div class="spacer-large"></div>
                <h3>Bathroom Anastasia</h3>
                <h5 class="light white-text">40x40cm, --RGB,CYMK,CRB</h5>
                <a class="waves-effect waves-light btn-large pulse indigo" href="/mobile/item-detail">
                    Detail
                </a>
            </div>
        </div>
        <div class="carousel-item" href="#four!">
            <div class="bg" style="background-image: url('/mobile/images/m-slider-3.png')"></div>
            <div class="item-content right-align white-text">
                <div class="spacer-large"></div>
                <h3>Living Room Spain Wood</h3>
                <h5 class="light white-text">40x40cm, --RGB,CYMK,CRB</h5>
                <a class="waves-effect waves-light btn-large pulse indigo" href="/mobile/item-detail">
                    Detail
                </a>
            </div>
        </div>
    </div>
        <!-- end slide customer -->
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