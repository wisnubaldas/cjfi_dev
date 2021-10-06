@extends('backend.layouts.default',['sidebarTransparent' => true,])

@section('title', 'Slot Parkir Kosong')


@push('css')
<link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
<link href="/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Slot</a></li>
    <li class="breadcrumb-item active">Parkir</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Slot Parkir Kosong</h1>
<!-- end page-header -->
<div class="row">
    <!-- begin col-12 -->
    <div class="col-xl-12">
        <!-- begin nav-tabs -->
        <ul class="nav nav-tabs">
            @foreach($parkiran as $i => $p)
            <li class="nav-item">
                <a href="#default-tab-{{$i}}" data-toggle="tab" class="nav-link {{($loop->index == 0)?'active':''}}">
                    <span class="d-sm-none">{{$i}}</span>
                    <span class="d-sm-block d-none">Lantai {{$i}}</span>
                </a>
            </li>
            @endforeach
        </ul>
        <!-- end nav-tabs -->

        <!-- begin tab-content -->
        <div class="tab-content">
            @foreach($parkiran as $i => $p)
            <!-- begin tab-pane -->
            <div class="tab-pane fade {{($loop->index == 0)?'active show':''}}" id="default-tab-{{$i}}">
                <div class="row">
                    @foreach($p as $v)
                    <div class="col-3">
                        <!-- begin card -->
                        <div
                            class="card text-black border-0 {{(count($v->user_boking)>0)?'bg-danger':'bg-success'}}  text-center m-b-10">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <h5>{{$v->lantai}} - {{$v->slot}}</h5>
                                    <i class="fas fa-lg fa-fw fa-5x text-white fa-car"></i>
                                    @if(count($v->user_boking) > 0)
                                    <h5>
                                        {{strtoupper($v->user_boking[0]->user->no_kendaraan)}}<br>
                                        {{$v->user_boking[0]->date_boking}} ({{$v->user_boking[0]->qr}})<br>
                                    </h5>
                                    @else
                                    <h5>Slot Kosong <br>
                                        Dapat diisi</h5>
                                    @endif
                                </blockquote>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    @endforeach
                </div>

            </div>
            @endforeach
            <!-- end tab-pane -->
        </div>
        <!-- end tab-content -->
    </div>
    <!-- end col-12 -->
</div>

<!-- @dump($parkiran) -->
@endsection

@push('scripts')
<script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script>

</script>
@endpush