@extends('mobile.layout.index')
@section('content')
<div class="container">
    <div class="section">
        <div class="row ">
            <div class="col s12 pad-0">
                <h5 class="bot-20 sec-tit  ">FLOW GREEN</h5> 
                <a class="img-wrap" href="/mobile/images/media-lightbox-1.png" data-fancybox="gallery" data-caption="Youth and Fashion">
                    <img class="z-depth-1" style="width: 100%;" src="/mobile/images/media-lightbox-1.png">
                </a>
                <div class="hidden">
                    <a class="img-wrap" href="/mobile/images/media-lightbox-2.png" data-fancybox="gallery" data-caption="Youth and Fashion">
                        <img class="z-depth-1" style="width: 100%;" src="/mobile/images/media-lightbox-2.png">
                    </a>
                    <a class="img-wrap" href="/mobile/images/media-lightbox-3.png" data-fancybox="gallery" data-caption="Youth and Fashion">
                        <img class="z-depth-1" style="width: 100%;" src="/mobile/images/media-lightbox-3.png">
                    </a>
                    <a class="img-wrap" href="/mobile/images/media-lightbox-4.png" data-fancybox="gallery" data-caption="Youth and Fashion">
                        <img class="z-depth-1" style="width: 100%;" src="/mobile/images/media-lightbox-4.png">
                    </a>
                </div>
                    <div class="card-content">
                        <h4>Code G60TJP.MBR</h4>
                        The FLOW GREEN™ tile is inspired by traditional majolica pottery. The rustic feel is created using innovative technology, 
                        with each piece fired at a specific temperature and a slower speed. This mimics the characteristic high gloss finish of classic majolica. 
                        The ultra glossy glaze doesn't quite reach the edges of the tiles, giving them a handcrafted appearance, as well as a natural variation in colour 
                        and texture. This exclusive tile has a rich bronze colour, reminiscent of 18th century Spanish pottery.
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</div>


@endsection

@push('css')
<link href="/mobile/plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet" type="text/css" media="screen"/> 
<style type="text/css">
    .hidden {
      display: none;
    }
</style>
@endpush
@push('scripts')
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
<script src="/mobile/plugins/fancybox/jquery.fancybox.min.js" type="text/javascript"></script>
<script type="text/javaScript">
    $("[data-fancybox=gallery]").fancybox({
            buttons : [ 
                "slideShow",
                "share",
                "zoom",
                "fullScreen",
                "close",
                "thumbs"
            ],
            thumbs : {
                autoStart : false
            }
    });

</script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
@endpush