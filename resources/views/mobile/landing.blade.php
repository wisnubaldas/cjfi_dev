<!DOCTYPE html>
<html class=" ">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Boking Parkir </title>
    <meta content="Zak Mobile App" name="description" />
    <meta content="themepassion" name="author" />

    <!-- App Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="mobile/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="mobile/images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="mobile/images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="mobile/images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="mobile/images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="mobile/images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="mobile/images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="mobile/images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="mobile/images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="mobile/images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="mobile/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="mobile/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="mobile/images/icons/favicon-16x16.png">
    <link rel="manifest" href="mobile/images/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="mobile/images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!-- CORE CSS FRAMEWORK - START -->
    <link href="mobile/css/preloader.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="mobile/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="mobile/fonts/mdi/materialdesignicons.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="mobile/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="mobile/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" id="main-style" />
    <!-- CORE CSS TEMPLATE - END -->
    @stack('css')
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->


<body class="isfullscreen html" data-header="light" data-footer="dark" data-header_align="center"
        data-menu_type="left" data-menu="light" data-menu_icons="on" data-footer_type="left" data-site_mode="light"
    data-footer_menu="show" data-footer_menu_style="light">

    <div class="preloader-background">
        <div class="preloader-wrapper">
            <div id="preloader"></div>
        </div>
    </div>

    <h1 class="white-text center welcome-logo index-welcome">
        <img src="/mobile/images/pngegg.png" alt="" width="300em" >
    </h1>
    {{-- <img src="/mobile/images/logo.png" alt=""> --}}
    <div class="fullfixed index-carousel">
        <div class="carousel carousel-fullscreen carousel-slider">
            <div class="carousel-item" href="#five!">
                <div class="bg" style="background-image: url('https://c8.alamy.com/comp/2GCEWNG/empty-intercept-metro-parking-lot-with-a-sign-for-the-nearest-subway-station-2GCEWNG.jpg')"></div>
                <div class="item-content right-align white-text">
                    <div class="spacer-xlarge"></div>
                    <div class="spacer-xlarge"></div>
                    {{-- <h3>Produksi Ramah Lingkungan</h3> --}}
                    {{-- <h5 class="light white-text">Bagaimana CJFI melestarikan lingkungan...</h5> --}}
                </div>
            </div>
            <div class="carousel-item" href="#one!">
                <div class="bg" style="background-image: url('https://image.shutterstock.com/shutterstock/photos/1802695636/display_1500/stock-vector-underground-car-parking-vector-illustration-d-interior-design-with-automobile-cars-parked-indoor-1802695636.jpg')"></div>
                <div class="item-content center-align white-text">
                    <div class="spacer-xlarge"></div>
                    <div class="spacer-xlarge"></div>
                    <h3>Boking Parkir</h3>
                    <h5 class="light white-text">Ceramic Manufacturer, Importer & Distributor</h5>
                </div>
            </div>
            <div class="carousel-item" href="#two!">
                <div class="bg" style="background-image: url('https://image.shutterstock.com/shutterstock/photos/1931330360/display_1500/stock-vector-panoramic-view-of-urban-underground-car-park-full-of-parked-autos-basement-garage-interior-with-1931330360.jpg')"></div>
                <div class="item-content left-align white-text">
                    <div class="spacer-xlarge"></div>
                    <div class="spacer-xlarge"></div>
                    <h3>Lokasi Aman</h3>
                    <h5 class="light white-text">Temukan koleksi keramik yang akan menginspirasi anda...</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="center index-start">
        <a href="/m/home" class='waves-effect waves-light btn green lighten-2 btn-large bg-primary'> Get Started</a>
    </div>

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
    <script src="mobile/js/jquery-2.2.4.min.js"></script>
    <script src="mobile/js/materialize.js"></script>
    <script src="mobile/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- CORE JS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script type="text/javascript">
        $(document).ready(function () {

            $(".carousel-fullscreen.carousel-slider").carousel({
                fullWidth: true,
                indicators: true,
            }).css("height", $(window).height());
            setTimeout(autoplay, 3500);

            function autoplay() {
                $(".carousel-fullscreen.carousel-slider").carousel("next");
                setTimeout(autoplay, 3500);
            }

        });

    </script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


    <!-- CORE TEMPLATE JS - START -->
    <script src="mobile/js/init.js"></script>
    <script src="mobile/js/settings.js"></script>
    <script src="mobile/js/scripts.js"></script>

    <!-- END CORE TEMPLATE JS - END -->

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            $('.preloader-background').delay(10).fadeOut('slow');
        });

    </script>
</body>

</html>
