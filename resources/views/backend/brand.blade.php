@extends('backend.layouts.default')

@section('title', 'Create Brand')

@push('css')
	<link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />

@endpush

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="/home">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Brand</a></li>
		<li class="breadcrumb-item active">Create</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">brand <small>header small text goes here...</small></h1>
	<!-- end page-header -->
	<!-- begin panel -->
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<h4 class="panel-title">Create brand</h4>
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			</div>
		</div>

		<div class="panel-body row">
			<div class="col-md-6">
				<form action="{{route('merek.store')}}" method="POST">
					<div class="form-group">
							@csrf
							<label>Brand</label>
							<select class="form-control form-control-sm" name="brand">
									<option value=0 selected>select brand</option>
									@foreach ($brand_logo as $item)
											<option value="{{$item->id}}">{{$item->nama}}</option>	
									@endforeach
							</select>
							<label>Nama</label>
							<input class="form-control form-control-sm text-uppercase" type="text" name="nama" id="nama"/>
							<label>Description</label>
							<input class="form-control form-control-sm text-capitalize" type="text" name="desc"/>
							<label for="">Tipe</label>
							<select class="form-control form-control-sm" name="tipe">
									@foreach ($tipe as $item)
											<option value="{{$item->id}}">{{strtoupper($item->nama)}}</option>	
									@endforeach
							</select>
							<label for="">Ukuran</label>
							<select class="form-control form-control-sm" name="ukuran">
									<option value=0 selected>select ukuran</option>
									@foreach ($size as $item)
											<option value="{{$item->id}}">{{$item->nama}}</option>	
									@endforeach
							</select>
							<label for="">Motif</label>
							<input class="form-control form-control-sm text-uppercase" type="text" name="motif"/>
							<div id="id-images"></div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<label for="" class="text-danger f-s-16 f-w-500">Upload 
					<a href="#modal-message" class="btn btn-xs btn-blue" data-backdrop="static" data-toggle="modal">
						<span class="ion-md-add-circle"></span>	Image
					</a>
					dahulu baru submit form nya.... </label>
					<div class="col-md-12" id="show-img"></div>

				<!-- #modal-message -->
				<div class="modal modal-message fade" id="modal-message">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Add Image </h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<div class="modal-body">
									<div class="form-group">
										<label>Name Image</label>
										<input class="form-control form-control-sm text-uppercase" id="img-name" type="text" name="name"/>
									</div>
									<div class="form-group">
										<label>Description</label>
										<input id="img-desc" class="form-control form-control-sm" type="text" name="desc"/>
									</div>
									<label>Type Image</label>
									<div class="form-group">
											<div class="radio radio-css radio-inline">
												<input type="radio" name="radio_css_inline" id="inlineCssRadio1" value="foto" checked />
												<label for="inlineCssRadio1">Foto Slide Dekorasi</label>
											</div>
											<div class="radio radio-css radio-inline">
												<input type="radio" name="radio_css_inline" id="inlineCssRadio2" value="tiles"/>
												<label for="inlineCssRadio2">Foto Keramik</label>
											</div>
											<div class="radio radio-css radio-inline">
												<input type="radio" name="radio_css_inline" id="inlineCssRadio3" value="foto_tiles" 
												data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" />
												<label for="inlineCssRadio3">Foto Dekorasi Keramik</label>
											</div>
									</div>
									<div class="form-group row collapse" id="collapseExample">
										<div class="col-lg-12">
											<label for="">Parent Keramik</label>
											<select class="default-select2 form-control" name="parent_id" type='text'>
												
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="">Image</label>
										<div class="custom-file">
											<input type="file" class="custom-file-input form-control form-control-sm" id="customFile" name="image">
											<label class="custom-file-label" for="customFile">Pilih Image</label>
										</div>
									</div>
							</div>
							<div class="modal-footer">
								<a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
								<a href="javascript:;" class="btn btn-primary" id="save-image">Save Changes</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- end panel -->
	
@endsection 

@push('scripts')
<script src="/assets/plugins/select2/dist/js/select2.min.js"></script>
	<script src="/assets/js/demo/ui-modal-notification.demo.js"></script>
	<script>
		$('input:radio[name="radio_css_inline"]').change(
    function(){
        if ($(this).is(':checked') && $(this).val() !== 'foto_tiles') {
            // append goes here
						// alert($(this).val())
						$('#collapseExample').removeClass('show')
						$('.default-select2').val(null).trigger('change');
        }
    });

		
		jQuery(function(){
			const url_img = "{{route('merek.save_image')}}";
			let tmplAddImg = function(d){
								return `<div class="widget-img widget-img-xl rounded bg-inverse pull-left m-r-5 m-b-5" style="background-image: url(/img/item/small/${d.name})"></div>`;
						}
						
			$(".custom-file-input").on("change", function() {
				var fileName = $(this).val().split("\\").pop();
				$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
			});
	
			$('#save-image').on('click',function(){
					const img_name = $('#img-name').val();
					const img_desc = $('#img-desc').val();
					const img_tipe = $("input[name='radio_css_inline']:checked").val();
					const parent_id = $(".default-select2").val();
					var file_data = $('#customFile').prop('files')[0];   
					var form_data = new FormData();     
					form_data.append('file', file_data);
					form_data.append('parent_id', parent_id);
					form_data.append('name', img_name);
					form_data.append('desc', img_desc);
					form_data.append('type', img_tipe);
					// console.log(form_data);                             
					$.ajax({
							url: url_img, // point to server-side PHP script 
							dataType: 'json',  // what to expect back from the PHP script, if anything
							cache: false,
							contentType: false,
							processData: false,
							data: form_data,                         
							type: 'post',
							success: function(r){
									$('#modal-message').modal('hide');
									$('#show-img').append(tmplAddImg(r))
									$('#id-images').append(`<input type="text" name="id_images[]" value="${r.id}" hidden>`)
									// console.log(r); // display response from the PHP script, if any
							},
							error:function(xhr){
								alert(xhr.statusText)
								console.log(xhr.responseJSON.message)
							}
					});
			})
			const parent_uri = "{{route('merek.parent_image')}}";
						$(".default-select2").select2({
							minimumInputLength: 4,
							ajax: {
								method:'GET',
								url: parent_uri,
								dataType: 'json',
								data: function (params) {
												var query = {
													search: params.term,
													type: 'public'
												}
												return query;
											}
							}
						});
		});
		
	</script>
	
@endpush