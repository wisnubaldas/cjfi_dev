@extends('layout.index')
@section('content')
    <div class="k-inspirasi container p-2 text-dark mt-3 rounded">
        <div class="row">
            <div class="col-md-3 col-xs-12 col-sm-12">
                <div class="left-xxx">
                    <div class="text-center pt-2 text-muted font-weight-bold">
                        <h6>@lang('pages.berita')</h6>
                    </div>
                    <div class="list-group list-group-flush no-gutters">
                        <a href="#" class="list-group-item list-group-item-action list-group-item-light no-gutters">Artikel Terbaru</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-light no-gutters">Arsip</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-xs-12 col-sm-12">
                <div class="container bootstrap snippets bootdey">
                    <div class="row">
                        <div class="col-md-12">
                        <!-- Block Default - More info over block -->
                        <div class="wp-block inverse ">
                            <div class="figure figure-head">

                                <div class="wp-block-info-over left">
                                    <h2>
                                        <span class="pull-left text-uppercase">
                                            <a href="#">berita</a>
                                        </span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-2 mb-5">
            </div>
        </div>
    </div>
@endsection

@push('script')
<script>
        $('.inspirasi_id').on('click',function(a){
            const id = $(this).data('id');
            $.ajax({
                method:'GET',
                url:'/koleksi/produk/'+id,
                success:function(a){
                    const tpl = `
                    <img src="${a.image}" class="rounded border img-thumbnail  border-light">
                    <div class="wp-block-info-over left">
                        <h2>
                            <span class="pull-left ">
                                <a href="#" class="text-uppercase">${a.name}</a>
                            </span>
                        </h2>
                    </div>
                    `;
                    $('.figure-head').html(tpl)
                },
                error:function(a){
                    console.log(a)
                }
            })
        })
</script>
@endpush

@push('css')
    <style>
        .list-group-item {
                font-size: 15px;
                font-weight: bold;
                position: relative;
                display: block;
                padding: .30rem 1.0rem;
                margin-bottom: -1px;
                background-color: #fff;
                border: 1px solid rgba(0,0,0,.125);
            }
    </style>
@endpush