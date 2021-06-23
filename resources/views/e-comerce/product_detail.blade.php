@extends('e-comerce.layout.index',['title'=>'Produk Detail'])

@section('content')
    <!-- BEGIN #page-container -->
	<div id="page-container" class="fade show">
		<!-- BEGIN #top-nav -->
		@include('e-comerce.layout.top-nav')
		<!-- END #top-nav -->
		<!-- BEGIN #header -->
		@include('e-comerce.layout.header')
		<!-- END #header -->
		
		@include('e-comerce.layout.product-detail')
        
		<!-- BEGIN #footer -->
		@include('e-comerce.layout.footer')
		<!-- END #footer -->
		
		<!-- BEGIN #footer-copyright -->
		@include('e-comerce.layout.footer-copyright')
		<!-- END #footer-copyright -->
	</div>
	<!-- END #page-container -->
@endsection

@push('css')
    <link href="/assets/plugins/lightbox2/dist/css/lightbox.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="/assets/plugins/lightbox2/dist/js/lightbox.min.js"></script>
<script>
    lightbox.option({
      'resizeDuration': 300
    })
</script>
@endpush
