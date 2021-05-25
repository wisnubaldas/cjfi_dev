@extends('backend.layouts.default',['sidebarTransparent' => true,])

@section('title', 'Desain Inspirasi')


@push('css')
	<link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="/home">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Desain</a></li>
		<li class="breadcrumb-item active">Create</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Produk Baru </h1>
	<!-- end page-header -->
	<!-- begin panel -->
	<div class="panel panel-success">
		<div class="panel-heading">
			<h4 class="panel-title">Produk Baru</h4>
		</div>
		<div class="panel-body">
			<div class="row">
					<div class="col-md-3">
						<form action="{{url('/produk_baru/create')}}" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								@csrf
								<label>Name</label>
								<input class="form-control form-control-sm" type="text" name="name"/>
                                <label>Status Image</label>
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
					<div class="col-md-9">
							<table id="tabel-slide" class="table table-striped table-bordered table-td-valign-middle">
								<thead>
									<tr>
										<th width="1%"></th>
										<th class="text-nowrap">Nama</th>
										<th class="text-nowrap">Image</th>
										<th class="text-nowrap">Status</th>
										<th class="text-nowrap">Create</th>
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
		const data = @json($data);
		jQuery(function(){
			$(".custom-file-input").on("change", function() {
				var fileName = $(this).val().split("\\").pop();
				$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
			});
			$('#tabel-slide').DataTable({
					responsive: true,
					processing: true,
					// serverSide: true,
					// ajax: '/slider/getBasicData',
					data:data,
					columns: [
						{ data: 'id', name: 'id' },
						{ data: 'name', name: 'name' },
						{ data: 'image', name: 'image' },   
						{ data: 'status', name: 'status' },
						{ data: 'created_at', name: 'created_at' },
					]
			});
		});
	</script>
@endpush