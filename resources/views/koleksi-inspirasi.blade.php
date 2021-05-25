@extends('layout.index')
@section('content')
    <div class="k-inspirasi container p-2 text-dark mt-3">
        <div class="row">
            <div class="col-md-3 col-xs-12 col-sm-12">
                <div class="left-xxx">
                    <div class="text-center pt-2 text-muted font-weight-bold">
                        <h6>@lang('pages.desain_inspirasi')</h6>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="/koleksi/inspirasi/interior" class="list-group-item list-group-item-action list-group-item-light">Interior</a>
                        <a href="/koleksi/inspirasi/exterior" class="list-group-item list-group-item-action list-group-item-light">Exterior</a>
                    </div>
                </div>

            </div>
            <div class="col-md-9 col-xs-12 col-sm-12 bg-danger">
                @dump($data)
            </div>
        </div>
    </div>
@endsection