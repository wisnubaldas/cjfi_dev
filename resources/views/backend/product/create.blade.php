@extends('backend.layouts.default',['sidebarTransparent' => true,'sidebarSearch'=>true])

@section('title', 'Create Brand')
@push('css')
@endpush
@push('scripts')
@endpush
@section('content')
<!-- begin breadcrumb -->
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
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Form Create Brand <small>{{url()->current()}}</small></h1>
<!-- end page-header -->

<div class="row">
    <!-- begin col-6 -->
		<div class="col-xl-12">
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
				<!-- begin panel-body -->
				<div class="panel-body">
					<form>
						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-3">Nama</label>
							<div class="col-md-9">
								<input type="text" class="form-control m-b-5" name="name"/>
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-3">Code</label>
							<div class="col-md-9">
								<input type="text" class="form-control m-b-5" name="code"/>
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-3">Logo</label>
							<div class="col-md-9">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="customFile">
									<label class="custom-file-label" for="customFile">Choose logo image</label>
								</div>
							</div>
							
						</div>
						<div class="form-group m-b-15 float-right">
							<button class="btn btn-primary " type="submit">Save</button>
						</div>
					</form>
				</div>
				<!-- end panel-body -->
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
</div>
@endsection