@extends('e-comerce.layout.index')

@section('content')
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
		{{-- @include('e-comerce.layout.trending-items') --}}
		<!-- END #trending-items -->
		
		<!-- BEGIN #mobile-list -->
		{{-- @include('e-comerce.layout.dinding-list') --}}
		<!-- END #mobile-list -->
		
		<!-- BEGIN #tablet-list -->
		{{-- @include('e-comerce.layout.lantai-list') --}}
		<!-- END #tablet-list -->
		
		<!-- BEGIN #policy -->
		{{-- @include('e-comerce.layout.policy') --}}
		<!-- END #policy -->
		<!-- BEGIN #subscribe -->
		@include('e-comerce.layout.subscribe')
		<!-- END #subscribe -->
		
		<!-- BEGIN #footer -->
		@include('e-comerce.layout.footer')
		<!-- END #footer -->
		
		<!-- BEGIN #footer-copyright -->
		{{-- @include('e-comerce.layout.footer-copyright') --}}
		<!-- END #footer-copyright -->
	</div>
	<!-- END #page-container -->
@endsection

@push('css')
	
@endpush
@push('scripts')
	
@endpush