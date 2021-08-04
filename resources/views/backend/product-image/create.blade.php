@extends('backend.layouts.default',['sidebarTransparent' => true,'sidebarSearch'=>true])

@section('title', 'Create Brand')
@push('css')
<link href="/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<link href="/assets/plugins/blueimp-gallery/css/blueimp-gallery.min.css" rel="stylesheet" />
<link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet" />
<link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" />
@endpush
@push('scripts')
<script src="/assets/plugins/select2/dist/js/select2.min.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
	<script src="/assets/plugins/blueimp-tmpl/js/tmpl.js"></script>
	<script src="/assets/plugins/blueimp-load-image/js/load-image.all.min.js"></script>
	<script src="/assets/plugins/blueimp-canvas-to-blob/js/canvas-to-blob.js"></script>
	<script src="/assets/plugins/blueimp-gallery/js/jquery.blueimp-gallery.min.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-process.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-image.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-audio.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-video.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-validate.js"></script>
	<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-ui.js"></script>
	<!--[if (gte IE 8)&(lt IE 10)]>
		<script src="/assets/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"></script>
	<![endif]-->
	<script src="/assets/js/demo/form-multiple-upload.demo.js"></script>
<script>
	$(document).ready(function() {
		/* ANCHOR Select2 get motif and product via ajax */
		$('.js-example-basic-multiple').select2(
			{
				placeholder: "Select a state",
				delay: 250,
				ajax: {
					url: '/product-image/get_motif',
					dataType: 'json',
					processResults: function (data) {
						if(data.data.length == 0)
						{
							return 'end of page';
						}
							return {
										results: data.data,
										pagination: {
											more: true
										}
									};
					},
					data: function (params) {
						var query = {
							search: params.term,
							page: params.page || 1
						};
						return query;
					}
				}
			});
	});

		/* ANCHOR On select event trigger*/
		$('.js-example-basic-multiple').on('select2:select', function (e) { 
			const id = $(this).val();
				$.ajax({
					url: '/product-image/get-product-by-motif/'+id, 
					success: function(result){
						
						if(!result)
						{
							const tmpl = `<div class="note note-warning note-with-right-icon">
									<div class="note-icon"><i class="fa fa-lightbulb"></i></div>
									<div class="note-content text-right">
										<h4>Error: <b>500</b></h4>
										<p>Product tidak di tenukan...!!! Product id: <b>${id}</b></p>
									</div>
									</div>`;
							$('#result-product').html(tmpl);
							$('#multiple-upload-image').addClass('d-none');
						}else{
							
							const tmpl = `<div class="note note-success note-with-right-icon">
									<div class="note-icon"><i class="fa fa-lightbulb"></i></div>
									<div class="note-content text-right">
										<h4>Product Code <b>${result.code}</b></h4>
										<p>${result.surface} <b>${result.name}</b></p>
									</div>
									</div>`;
							$('#result-product').html(tmpl);
							$('#multiple-upload-image').removeClass('d-none');
						}
					},
					error:function(xhr){
						alert("An error occured: " + xhr.status + " " + xhr.statusText);
					}
				});
		});

</script>
@endpush
@section('content')
<!-- ANCHOR begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    @foreach ($breadchrum as $item)
        @if ($loop->last)
            <li class="breadcrumb-item active">{{$item['name']}}</li>
        @else
            <li class="breadcrumb-item"><a href="{{$item['link']}}">{{$item['name']}}</a></li>
        @endif
    @endforeach
</ol>
<!-- ANCHOR end breadcrumb -->
<!-- ANCHOR begin page-header -->
<h1 class="page-header">Form Create Product Image <small>{{url()->current()}}</small></h1>
<!-- ANCHOR end page-header -->

<div class="row">
	<!-- NOTE form select motif  -->
	<div class="col-xl-12">
			<div class="panel panel-inverse">
				<div class="panel-heading">Cari Produk Berdasarkan Motif Yang Ingin Diassign Image</div>
				<div class="panel-body bg-gray-800 text-white">
					<select class="js-example-basic-multiple" name="nama" style="width: 100%">
					
					</select>
				</div>
			</div>
	</div>
	<!-- NOTE result produk  -->
	<div class="col-xl-4">
		<div id="result-product">

		</div>
	</div>
	<!-- NOTE form upload image  -->
	<div class="col-xl-8">
		<x-multiple-upload-image hidden="d-none" form-action="/product-image/upload-image"/>
	</div>
</div>
@endsection