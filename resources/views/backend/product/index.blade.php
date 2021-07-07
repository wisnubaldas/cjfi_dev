@extends('backend.layouts.default',['sidebarTransparent' => true,'sidebarSearch'=>true])

@section('title', 'Brand')
@push('css')
<link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
@endpush
@push('scripts')
    <script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
	<script src="/assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        jQuery(function(){
            $('#data-table-default').DataTable({
                    responsive: true,
                    processing: true,
                    serverSide: true,
                    ajax: '/product',
                    columns: [
                                {data: 'id', name: 'id'},
                                {data: 'brand_id', name: 'brand_id'},
                                {data: 'motif_id', name: 'motif_id'},
                                {data: 'tipe_id', name: 'tipe_id'},
                                {data: 'warna_id', name:'warna_id'},
                                {data: 'surface', name:'surface'},
                                {data: 'depth', name:'depth'},
                                {data: 'weight', name:'weight'},
                                {data: 'desc', name:'desc'},
                                {data: 'name', name:'name'},
                                {data: 'code', name:'code'},
                                {data: 'action', name:'action'}
                    ],
                    drawCallback: function( settings ) {
                            $('.delete-data').on('click',function(a) {
                                const data = $(this).data('link');
                                swal({
                                        title: 'Are you sure to Delete?',
                                        text: 'Data akan di hapus secara permanent...!!!',
                                        icon: 'error',
                                        buttons: {
                                            cancel: {
                                                text: 'Cancel',
                                                value: null,
                                                visible: true,
                                                className: 'btn btn-default',
                                                closeModal: true,
                                            },
                                            confirm: {
                                                text: 'Delete',
                                                value: true,
                                                visible: true,
                                                className: 'btn btn-danger',
                                                closeModal: true
                                            }
                                        }
                                    }).then((willDelete) => {
                                        if (willDelete) {
                                            return window.location = data
                                        }
                                    });
                            });
                    }
            });
        });
            
    </script>
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
    <h1 class="page-header">Brand <small>{{url()->current()}}</small></h1>
    <!-- end page-header -->
    <div class="row">
        <div class="col-xl-11">
            <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                <thead>
                    <tr>
                        <th width="1%">ID</th>
                        <th>Nama</th>
                        <th class="text-nowrap">Code</th>
                        <th class="text-nowrap">Image</th>
                        <th width="5%">#</th>
                        <th width="5%">#</th>
                        <th width="5%">#</th>
                        <th width="5%">#</th>
                        <th width="5%">#</th>
                        <th width="5%">#</th>
                        <th width="5%">#</th>
                        <th width="5%">#</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection