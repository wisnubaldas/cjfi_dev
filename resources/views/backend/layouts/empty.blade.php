<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('backend.includes.head')
</head>
@php
	$bodyClass = (!empty($boxedLayout)) ? 'boxed-layout ' : '';
	$bodyClass .= (!empty($paceTop)) ? 'pace-top ' : '';
	$bodyClass .= (!empty($bodyExtraClass)) ? $bodyExtraClass . ' ' : '';
@endphp
<body class="{{ $bodyClass }}">
	@include('backend.includes.component.page-loader')
	
	@yield('content')
			
	@include('backend.includes.page-js')
</body>
</html>
