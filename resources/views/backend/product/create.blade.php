@extends('backend.layouts.default',['sidebarTransparent' => true,'sidebarSearch'=>true])

@section('title', 'Create Brand')
@push('css')
<link href="/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />

@endpush
@push('scripts')
<script src="/assets/plugins/select2/dist/js/select2.min.js"></script>

<script>
	let motif = @json($motif);
	$(function(){
		$(".multiple-select2").select2({ 
			placeholder: "Select a state",
		});
		$("#jquery-autocomplete").autocomplete({
			source: Object.values(motif)
		});
		$(".select-tag").select2({ 
			placeholder: "Select a warna", 
			tags: true
		});
	});
	/* end jquery */
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
<h1 class="page-header">Form Create Product <small>{{url()->current()}}</small></h1>
<!-- ANCHOR end page-header -->

<div class="row">
	<form class="col-md-12 row" method="POST" action="/product/create">
		@csrf
    	<!-- begin col-6 -->
		<div class="col-xl-6">
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
				<!-- begin panel-body -->
				<div class="panel-body">
						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-3">Kode Barang</label>
							<div class="col-md-9">
								<input type="text" class="form-control m-b-5" name="code"/>
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-3">Brand</label>
							<div class="col-md-9">
								<select class="multiple-select2 form-control" autocomplete="off" name="brand_id">
									@foreach ($brand as $i => $it)
										<option value="{{$i}}">{{$it}}</option>
									@endforeach
								</select>								  
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-3">Motif</label>
							<div class="col-md-9">
								<select class="select-tag form-control text-uppercase" name="motif_id">
									@foreach ($motif as $i => $it)
										<option class="text-uppercase" value="{{$i}}">{{strtoupper($it)}}</option>
									@endforeach
								</select>								  
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-3">Tipe</label>
							<div class="col-md-9">
								<select class="multiple-select2 form-control text-uppercase" multiple name="tipe_id[]">
									@foreach ($tipe as $i => $it)
										<option class="text-uppercase" value="{{$i}}">{{strtoupper($it)}}</option>
									@endforeach
								</select>								  
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-3">Ukuran</label>
							<div class="col-md-9">
								<select class="multiple-select2 form-control" name="ukuran_id">
									@foreach ($ukuran as $i => $it)
										<option value="{{$i}}">{{$it}}</option>
									@endforeach
								</select>								  
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-3">Warna</label>
							<div class="col-md-9">
								<select class="select-tag form-control" multiple id="warna" name="warna_id[]">
									@foreach ($warna as $it)
										<option value="{{$it}}">{{$it}}</option>
									@endforeach
								</select>								  
							</div>
						</div>
				</div>
				<!-- end panel-body -->
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
		<!-- begin col-6 -->
		<div class="col-xl-6">
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
				<!-- begin panel-body -->
				<div class="panel-body">
					<div class="form-group row m-b-15">
						<label class="col-form-label col-md-3">SURFACE LOOK</label>
						<div class="col-md-9">
							<input type="text" class="form-control m-b-5" name="surface"/>
							<small class="form-text text-muted">
								Tipe permukaan keramik
							</small>
						</div>
					</div>
					<div class="form-group row m-b-15">
						<label class="col-form-label col-md-3">THICKNESS</label>
						<div class="col-md-9">
							<input type="text" class="form-control m-b-5" name="depth"/>
							<small class="form-text text-muted">
								Ketebalan keramik, satuan MM
							</small>
						</div>
					</div>
					<div class="form-group row m-b-15">
						<label class="col-form-label col-md-3">WEIGHT</label>
						<div class="col-md-9">
							<input type="text" class="form-control m-b-5" name="weight"/>
							<small class="form-text text-muted">
							Berat keramik per keping
							</small>
						</div>
					</div>
					<div class="form-group row m-b-15">
						<label class="col-form-label col-md-3">Description</label>
						<div class="col-md-9">
							<textarea class="form-control" rows="2" name="desc"></textarea>
							<small class="form-text text-muted">
							Berat keramik per keping
							</small>
						</div>
					</div>
				</div>
				<!-- end panel-body -->
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
		<div class="col-xl-12">
			<button type="submit" class="btn btn-primary btn-lg btn-block">
				<i class="fas fa-save fa-lg"></i> Save
			</button>
		</div>
	</form>
</div>
@endsection