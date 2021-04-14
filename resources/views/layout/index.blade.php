<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>| CJFI | Home</title>
    <meta name="description" content="CJFI Atena Picasso Kita Keramik Granit" />
    <meta name="keywords"
        content="atena, picasso, kita, keramik lantai, keramik dinding, ubin keramik, interior, tile, granit, keramik, ceramic" />
    <meta name="author" content="chang jui fang">
    <meta name="robots" content="index, follow" />
    <link href="{{url('assets/img/icon.png')}}" rel="shortcut icon" />
    @include('layout.header')
</head>

<body>
    <div id="" class="container">
        <div class="col-md-12">
            <a href="#">
                <img src="{{url('assets/img/header-logo2.jpg')}}" width="100%" class="img-responsive" >
            </a>
        </div>
        <div class="col-md-12">
            <div class="btn-group btn-group-toggle btn-group-sm float-right">
                <a class="btn btn-light {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route('localization.switch', 'en') }}">English</a>
                <a class="btn btn-light {{ app()->getLocale() == 'id' ? 'active' : '' }}" href="{{ route('localization.switch', 'id') }}">Indonesia</a>
            </div>
        </div>
        <div class="col-md-12">
            @include('layout.navbar')
        </div>
        <div class="col-md-12">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="footer hidden-xs hidden-sm">
        @include('layout.footer')
    </div>
</body>

</html>
