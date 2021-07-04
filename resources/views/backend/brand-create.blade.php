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
		<div class="col-xl-6">
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
				<!-- begin panel-body -->
				<div class="panel-body">
					<form>
						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-3">Nama</label>
							<div class="col-md-9">
								<input type="text" class="form-control m-b-5" />
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-3">Example select</label>
							<div class="col-md-9">
								<select class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
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