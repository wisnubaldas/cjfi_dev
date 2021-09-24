@extends('backend.layouts.default',['sidebarTransparent' => true,'sidebarSearch'=>true])

@section('title', 'Create Brand')
@push('css')
<link href="/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<link href="/assets/plugins/blueimp-gallery/css/blueimp-gallery.min.css" rel="stylesheet" />
<link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet" />
<link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" />
<link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />

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
	<script src="/assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
	<script src="/assets/js/product-image.js"></script>

<script>
	$(document).ready(function() {
		/* ANCHOR Select2 get motif and product via ajax */
		const elSel = $('.js-example-basic-multiple');
		
		selectMotif(elSel);
		/* ANCHOR On select event trigger*/
		trigerMotif(elSel);
	});
</script>
@endpush

@section('content')
<!-- #modal  -->
<div class="modal" id="mysmodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-group">
					<select class="form-control" id="warna-option" onchange="setWarna(this)">
						<option selected >### Select Warna ###</option>
					</select>
				</div>
				<div class="form-group">
					<select class="form-control" id="warna-option" onchange="setTipe(this)">
						<option selected >### Select Tipe Gambar ###</option>
						<option value="1">Gambar Sample</option>
						<option value="2">Gambar Item Keramik</option>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<a href="javascript:;" class="btn btn-white" data-dismiss="modal" id="btn-model">Close</a>
			</div>
		</div>
	</div>
</div>
<!-- #modal-message -->

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
		<x-multiple-upload-image hidden="d-none" form-action="/product-image/upload-image">
			<x-slot name="addInput">
				
			</x-slot>
		</x-multiple-upload-image>
	</div>
</div>
@endsection