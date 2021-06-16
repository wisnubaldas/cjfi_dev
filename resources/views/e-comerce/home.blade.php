<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Chang Jui Fang Indonesia | {{ $title ?? 'Official Site' }}</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../src/css/e-commerce/app.min.css" rel="stylesheet" />
	<link href="../src/css/e-commerce/style.css" rel="stylesheet" />

	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
	<!-- BEGIN #page-container -->
	<div id="page-container" class="fade show">
		<!-- BEGIN #top-nav -->
		@include('e-comerce.layout.top-nav')
		<!-- END #top-nav -->
		<!-- BEGIN #header -->
		@include('e-comerce.layout.header')
		<!-- END #header -->
		
		<!-- BEGIN #slider -->
		@include('e-comerce.layout.slider')
		<!-- END #slider -->
		
		<!-- BEGIN #promotions -->
		@include('e-comerce.layout.promotions')
		<!-- END #promotions -->
		
		<!-- BEGIN #trending-items -->
		@include('e-comerce.layout.trending-items')
		<!-- END #trending-items -->
		
		<!-- BEGIN #mobile-list -->
		@include('e-comerce.layout.mobile-list')
		<!-- END #mobile-list -->
		
		<!-- BEGIN #tablet-list -->
		@include('e-comerce.layout.tablet-list')
		<!-- END #tablet-list -->
		
		<!-- BEGIN #policy -->
		@include('e-comerce.layout.policy')
		<!-- END #policy -->
		
		<!-- BEGIN #subscribe -->
		@include('e-comerce.layout.subscribe')
		<!-- END #subscribe -->
		
		<!-- BEGIN #footer -->
		@include('e-comerce.layout.footer')
		<!-- END #footer -->
		
		<!-- BEGIN #footer-copyright -->
		@include('e-comerce.layout.footer-copyright')
		<!-- END #footer-copyright -->
	</div>
	<!-- END #page-container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../src/js/e-commerce/app.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</body>
</html>