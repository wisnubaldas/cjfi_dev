<!DOCTYPE html>
<html lang="en">
@include('cargo.layout.head')
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
    <!-- Header -->
@include('cargo.layout.header')
    <!-- Header END -->
    <!-- Content -->
    @yield('content')
	<!-- Content END-->
	<!-- Footer -->
@include('cargo.layout.footer')
    <!-- Footer END-->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>
@include('cargo.layout.script')
</body>
</html>