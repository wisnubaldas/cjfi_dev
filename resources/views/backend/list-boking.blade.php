@extends('backend.layouts.default',['sidebarTransparent' => true,])

@section('title', 'Slot Parkir Kosong')


@push('css')
<link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
<link href="/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />
<link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
<link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" />
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
<div class="row">
    <div class="form-group">
        <label class="col-form-label page-header ">Status Boking</label>
        <input type="text" class="form-control" id="datepicker-autoClose" placeholder="Select Date" />
    </div>
</div>
<!-- end page-header -->
<div class="row">
    <div class="panel">
        <!-- begin panel-body -->
        <div class="panel-body">
            <!-- begin table-responsive -->
            <div class="table-responsive">
                <table class="table table-hover m-b-0 text-inverse">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tanggal Boking</th>
                            <th>Masuk</th>
                            <th>QR</th>
                            <th>Nama</th>
                            <th>NoPol</th>
                            <th>Kontak</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody class="body-tbl">
                        @foreach($boking as $b)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$b->date_boking}}</td>
                            <td>{{$b->masuk}}</td>
                            <td>{{$b->qr}}</td>
                            <td>{{$b->user->name}}</td>
                            <td>{{strtoupper($b->user->no_kendaraan)}}</td>
                            <td>{{$b->user->no_hp}}</td>
                            <td><a class="btn btn-danger btn-xs" href="/home/delete/{{$b->id}}">Hapus</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- end table-responsive -->
        </div>
        <!-- end panel-body -->
    </div>

</div>

<!-- @dump($parkiran) -->
@endsection

@push('scripts')
<script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="/assets/plugins/moment/moment.js"></script>
<script src="/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
<script>
let tmplTbl = function(a) {
    let b = [];
    let idx = 1;
    a.forEach(el => {
        b.push(`
        <tr>
        <td>${idx++}</td>
        <td>${el.date_boking}</td>
        <td>${el.masuk}</td>
        <td>${el.qr}</td>
        <td>${el.user.name}</td>
        <td>${el.user.no_kendaraan.toUpperCase()}</td>
        <td>${el.user.no_hp}</td>
        <td><a class="btn btn-danger btn-xs" href="/home/delete/${el.id}">Hapus</a></td>
        </tr>
        `);
    });
    return b.join('');
};

$(document).ready(function() {
    $('#datepicker-autoClose').datepicker({
        todayHighlight: true,
        autoclose: true
    }).on('changeDate', function(ev) {
        $.ajax({
            url: '/home/status-boking',
            method: 'GET',
            data: {
                tanggal: ev.format('yyyy-mm-dd')
            }
        }).done(function(a) {
            $('.body-tbl').html(tmplTbl(a));
        }).fail(function(a) {
            console.log(a);
        })
    });

})
</script>
@endpush