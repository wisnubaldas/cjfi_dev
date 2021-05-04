@extends('backend.layouts.default')

@section('title', 'Create Slide')

@push('css')
	<link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="/home">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Slider</a></li>
		<li class="breadcrumb-item active">Create</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Slider <small>header small text goes here...</small></h1>
	<!-- end page-header -->
	<!-- begin panel -->
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<h4 class="panel-title">Create Slider</h4>
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			</div>
		</div>
		<div class="panel-body">
			<div class="row">
					<div class="col-md-6">
						<form action="{{route('slider.save')}}" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								@csrf
								<label>Name Item</label>
								<input class="form-control form-control-sm" type="text" name="name"/>
								<label>Description</label>
								<input class="form-control form-control-sm" type="text" name="desc"/>
								<label for="">Ukuran</label>
								<select class="form-control form-control-sm" name="ukuran">
										<option value=0 selected>select ukuran</option>
										@foreach ($size as $item)
												<option value="{{$item->id}}">{{$item->nama}}</option>	
										@endforeach
								</select>
								<label>Brand</label>
								<input class="form-control form-control-sm" type="text" name="brand"/>
								<label>Link</label>
								<input class="form-control form-control-sm" type="text" name="link"/>
								<label for="">Image</label>
								<div class="custom-file">
									<input type="file" class="custom-file-input form-control form-control-sm" id="customFile" name="image">
									<label class="custom-file-label" for="customFile">Pilih Image</label>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
							</div>
						</form>
					</div>
					<div class="col-md-6">
							<table id="tabel-slide" class="table table-striped table-bordered table-td-valign-middle">
								<thead>
									<tr>
										<th width="1%"></th>
										<th class="text-nowrap">Nama</th>
										<th class="text-nowrap">Desc</th>
										<th class="text-nowrap">Size</th>
										<th class="text-nowrap">Brand</th>
										<th class="text-nowrap">Link</th>
										<th class="text-nowrap">Image</th>

									</tr>
								</thead>
								<tbody>
									
								</tbody>
							</table>
					</div>
			</div>
		</div>
	</div>
	<!-- end panel -->
@endsection 

@push('scripts')
<script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
	<script>
		jQuery(function(){
			$(".custom-file-input").on("change", function() {
				var fileName = $(this).val().split("\\").pop();
				$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
			});
			$('#tabel-slide').DataTable({
					responsive: true,
					processing: true,
					serverSide: true,
					ajax: '/slider/getBasicData',
					columns: [
						{ data: 'id', name: 'id' },
						{ data: 'name', name: 'name' },
						{ data: 'desc', name: 'desc' },
						{ data: 'size', name: 'size' },
						{ data: 'brand', name: 'brand' },
						{ data: 'link', name: 'link' },
						{ data: 'image', name: 'image' }
					]
			});
		});
	</script>
@endpush