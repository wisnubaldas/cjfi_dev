<!DOCTYPE html>
<html class=" ">

<head>
    <!--
         * @Package: Zak mobile App
         * @Author: themepassion
         * @Version: 1.0
        -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Zak Mobile App : Home Page</title>
    <meta content="Zak Mobile App" name="description" />
    <meta content="themepassion" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- App Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/mobile/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/mobile/images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/mobile/images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/mobile/images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/mobile/images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/mobile/images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/mobile/images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/mobile/images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/mobile/images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/mobile/images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/mobile/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/mobile/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/mobile/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/mobile/images/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/mobile/images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="/mobile/css/preloader.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <link href="/mobile/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="/mobile/fonts/mdi/materialdesignicons.min.css" type="text/css" rel="stylesheet"
        media="screen,projection" />
    <link href="/mobile/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
        media="screen,projection" />


    <!-- CORE CSS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    @stack('css')
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="/mobile/css/style-red.css" type="text/css" rel="stylesheet" media="screen,projection"
        id="main-style" />
    <!-- CORE CSS TEMPLATE - END -->
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="html"
    data-header="colored"
    data-footer="dark" data-header_align="app"
    data-menu_type="left"
    data-menu="colored"
    data-menu_icons="on"
    data-site_mode="dark"
    data-footer_menu_style="dark">
    <div class="preloader-background">
        <div class="preloader-wrapper">
            <div id="preloader"></div>
        </div>
    </div>
    <!-- START navigation -->
    @include('mobile.layout.nav')
    @include('mobile.layout.sidebar')
    @yield('content')
    @if ($footer)
        @include('mobile.layout.footer')
    @else
    <footer class="page-footer">
        <div class="footer-copyright">
          <div class="container">
          © Copyright <a class="" href="https://themeforest.net/user/themepassion/portfolio">Themepassion</a>. All rights reserved.
          </div>
        </div>
      </footer>
    @endif

    <div class="backtotop">
        <a class="btn-floating btn primary-bg">
            <i class="mdi mdi-chevron-up"></i>
        </a>
    </div>
    @include('mobile.layout.footer-menu')
    <!-- PWA Service Worker Code -->

    <script type="text/javascript">
        // This is the "Offline copy of pages" service worker

        // Add this below content to your HTML page, or add the js file to your page at the very top to register service worker

        // Check compatibility for the browser we're running this in
        if ("serviceWorker" in navigator) {
            if (navigator.serviceWorker.controller) {
                console.log("[PWA Builder] active service worker found, no need to register");
            } else {
                // Register the service worker
                navigator.serviceWorker
                    .register("pwabuilder-sw.js", {
                        scope: "./"
                    })
                    .then(function (reg) {
                        console.log("[PWA Builder] Service worker has been registered for scope: " + reg.scope);
                    });
            }
        }
    </script>


    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

    <!-- CORE JS FRAMEWORK - START -->
    <script src="/mobile/js/jquery-2.2.4.min.js"></script>
    <script src="/mobile/js/materialize.js"></script>
    <script src="/mobile/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- CORE JS FRAMEWORK - END -->


    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script type="text/javascript">

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".carousel-fullscreen.carousel-slider").carousel({
                fullWidth: true,
                indicators: true
            });
            setTimeout(autoplay, 3500);

            function autoplay() {
                $(".carousel").carousel("next");
                setTimeout(autoplay, 3500);
            }
            $(".slider3").slider({
                indicators: false,
                height: 200,
            });

        });
    </script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    @stack('scripts')
    <!-- CORE TEMPLATE JS - START -->
    <script src="/mobile/js/init.js"></script>
    <script src="/mobile/js/settings.js"></script>
    <script src="/mobile/js/scripts.js"></script>

    <!-- END CORE TEMPLATE JS - END -->
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            $('.preloader-background').delay(10).fadeOut('slow');
        });
    </script>
</body>

</html>
