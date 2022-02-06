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
            <div class="col-md-9 col-xs-12 col-sm-12">
                <div class="container bootstrap snippets bootdey">
                    <div class="row">
                        <div class="col-md-12">
                        <!-- Block Default - More info over block -->
                        <div class="wp-block inverse ">
                            <div class="figure figure-head">
                                <img src="/img/desain_inspirasi/cRE7CLpYl2puxfV.jpeg" class="rounded border img-thumbnail  border-light">
                                <div class="wp-block-info-over left">
                                    <h2>
                                        <span class="pull-left text-uppercase">
                                            <a href="#">My favorite sport</a>
                                        </span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                    <!-- Page Content -->
                    <div class="container">
                        <div class="row text-center text-lg-left">
                            @foreach ($data as $i)
                                <div class="col-lg-3 col-md-4 col-6">
                                    <a href="javascript:;" class="d-block mb-4 h-100 inspirasi_id" data-id="{{$i->id}}">
                                        <figure class="figure">
                                            <img src="{{$i->image}}" class="figure-img img-fluid rounded img-thumbnail" alt=" ">
                                            <figcaption class="figure-caption text-uppercase">{{strtoupper($i->name)}}</figcaption>
                                        </figure>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <hr class="mt-2 mb-5">
                    </div>
                    <!-- /.container -->
                    
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
                url:'/koleksi/inspirasi/get_id/'+id,
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
        .wp-block {
        margin: 0 0 15px 0;
        -webkit-transition: all .3s linear;
        transition: all .3s linear;
        position: relative;
        cursor: default;
        border-radius: 2px;
        }
        a:hover{
            text-decoration:none;
        }

        .no-margin {
        margin: 0 !important;
        }

        .wp-block.inverse .figure {
        position: relative;
        }

        .wp-block.inverse .figure img {
        width: 100%;
        }

        .wp-block-info-over.left {
                background: transparent;
                border: 0;
                padding: 0;
                position: absolute;
                bottom: 55px;
                left: 0;
        }

        .wp-block-info-over {
        width: 100%;
        padding: 10px;
        background: #9cd70e;
        border-top: 1px solid #e0eded;
        }

        .wp-block-info-over.left h2 {
        font-size: 13px;
        font-weight: normal;
        }

        .wp-block.inverse h2, .wp-block.inverse .title {
            margin: 0;
            padding: 10px 13px 0 0;
            font-weight: 500;
            font-size: 16px;
            color: rgba(20, 19, 19, 0.507);
            text-transform: none;
            opacity: 0.8;
        }

        .wp-block-info-over.left h2 a {
        padding: 10px 15px 20px 15px;
        margin: 0;
        font-size: 16px;
        text-transform: capitalize;
        font-weight: 600;
        background: rgba(51,51,51,0.8);
        background: #2c3e50;
        color: #fff;
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
        }

        .wp-block-info-over.left h2 .label {
        position: absolute;
        bottom: -30px;
        left: 15px;
        padding: .5em .6em .5em;
        }

        .wp-block.inverse h2, .wp-block.inverse .title {
        margin: 0;
        padding: 12px 15px 0 0;
        font-weight: 500;
        font-size: 16px;
        color: #333;
        text-transform: none;
        }

        .label {
        border-radius: 0;
        }

    </style>
@endpush