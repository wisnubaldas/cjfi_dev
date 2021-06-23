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
	@stack('css')
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
    @yield('content')
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../src/js/e-commerce/app.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	@stack('scripts')
</body>
</html>