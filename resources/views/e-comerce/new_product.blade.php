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
		

        <!-- Kontent nya -->
		@include('e-comerce.layout.products',['prod_title'=>'asddsa'])
        <!-- End Kontent nya -->		
		
        <!-- BEGIN #subscribe -->
		{{-- @include('e-comerce.layout.subscribe') --}}
		<!-- END #subscribe -->
		
		<!-- BEGIN #footer -->
		@include('e-comerce.layout.footer')
		<!-- END #footer -->
		
	</div>
	<!-- END #page-container -->
@endsection

@push('css')
	
@endpush
@push('scripts')
	
@endpush