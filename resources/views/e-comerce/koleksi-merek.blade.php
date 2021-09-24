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
		
        @dump($product)
        <!-- Kontent nya -->
		@include('e-comerce.layout.products',
                        [
                            'prod_title'=>'
                                            <img src="../src/img/brand/brand-atena.png" alt="atena" /></a>
                                            <img src="../src/img/brand/brand-mustika.png" alt="mustika" class=""/></a>
                                            <img src="../src/img/brand/brand-kita.png" alt="kita" class=""/></a>
                                            <img src="../src/img/brand/brand-harmony.png" alt="harmony" class=""/></a>
                                            <img src="../src/img/brand/brand-picasso.png" alt="picasso"class="" /></a>
                                            ',
                            'bg_head'=>'bg-gradient-lime',
                            'cover_head'=>false])
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