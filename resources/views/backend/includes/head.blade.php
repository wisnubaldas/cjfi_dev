<meta charset="utf-8" />
<title>CJFI | @yield('title')</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- ================== BEGIN BASE CSS STYLE ================== -->
<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" /> -->
<link href="/assets/plugins/ubuntu-fontface/ubuntu.min.css" rel="stylesheet" />
<link href="/assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
<link href="/assets/css/apple/app.min.css" rel="stylesheet" />
<!-- ================== END BASE CSS STYLE ================== -->

@stack('css')
