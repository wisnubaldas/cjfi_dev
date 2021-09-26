@extends('mobile.layout.index',['footer'=>false])
@section('content')
<div class="container">
    <div class="section">
        <div class="row ">
            <div class="col s12 pad-0">
                <h5 class="bot-20 sec-tit">Status Boking</h5>
                {{ $user_boking->links('vendor.pagination.bootstrap-4') }}
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Boking Date</th>
                            <th>Lokasi</th>
                            <th>QR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user_boking as $item)
                            <tr>
                                <td>{{\Carbon\Carbon::parse($item->masuk)->format('d M Y')}}</td>
                                <td>{{$item->status_boking->lantai}}-{{$item->status_boking->slot}}</td>
                                <td><a href="/m/home/{{$item->qr}}" class="btn btn-primary btn-sm">Show</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@push('css')
    <style>
        .setting-box {
	        background-color: #ffffff;
            border-radius: 2px;
            padding: 5px;
            margin-bottom: 15px;
        }
    </style>
@endpush
