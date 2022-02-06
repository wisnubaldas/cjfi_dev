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
    <link href="{{url('asset/img/icon.png')}}" rel="shortcut icon" />
    @include('layout.header')
</head>

<body>
    <div id="" class="container">
        <div class="col-md-12">
            <a href="#">
                <img src="{{url('asset/img/header-logo2.jpg')}}" width="100%" class="img-responsive" >
            </a>
        </div>
        <div class="col-md-12">
            <div class="float-right">
                <a class="btn btn-sm btn-light {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route('localization.switch', 'en') }}">English</a>
                <a class="btn btn-sm btn-light {{ app()->getLocale() == 'id' ? 'active' : '' }}" href="{{ route('localization.switch', 'id') }}">Indonesia</a>
            </div>
        </div>
        <div class="col-md-12">
            @include('layout.navbar')
        </div>
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>
    <div class="footer hidden-xs hidden-sm" style="padding-top: 10px">
        @include('layout.footer')
    </div>

<script src="{{asset('asset/js/jquery-3.3.1.js')}}" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@stack('script')
<script>
    function updatemenu() {
        if (document.getElementById('responsive-menu').checked == true) {
            document.getElementById('menu').style.borderBottomRightRadius = '0';
            document.getElementById('menu').style.borderBottomLeftRadius = '0';
        }else{
            document.getElementById('menu').style.borderRadius = '4px';
        }
    }
  </script>
</body>
</html>
