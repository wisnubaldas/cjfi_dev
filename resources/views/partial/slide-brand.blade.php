<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
      @php($active = 0)
      @foreach ($data->brand_logo->brands as $item)
          @php($active++)
          @php($image = $item->image_asset->where('status','foto')->first())
            @if ($image)
            <div class="carousel-item {{$active == 1?'active':''}}">
                <img class="d-block w-100 rounded img-fluid img-thumbnail"
                    src="/img/item/original/{{$image->image}}"
                    alt="{{$image->name}}">
                <div class="carousel-caption">
                    <h3>{{Str::upper($item->nama)}}</h3>
                    <p>{{Str::title($item->desc)}} <br>
                        {{Str::title($item->motif->nama)}}, {{$item->ukuran->nama}}
                    </p>
                </div>
            </div>
            @endif
      @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
  </a>
</div>