@extends('layout.index')
@section('content')
    <div class="k-inspirasi container p-2 text-dark mt-3">
        <div class="row">
            <div class="col-md-3 col-xs-12 col-sm-12">
                <div class="left-xxx">
                    <div class="text-center pt-2 text-muted font-weight-bold">
                        <h6>@lang('pages.produk_baru')</h6>
                    </div>
                    <div class="list-group list-group-flush">
                        <img src="/asset/img/btn_produk.png" width="180px" class="rounded mx-auto d-block">
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
    
@endpush