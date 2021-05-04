<div class="col-md-12 border border-1 rounded row " style="box-shadow: 1px 1px 4px 2px #888888;">
    @foreach ($data->tiles->brands as $item)
        @php($image = $item->image_asset->where('status','tiles'))
        @foreach ($image as $img)
            <a class="card m-1 crot" style="width: 6rem; text-decoration:none" href="/#">
              <img class="card-img-top " src="{{url('img/item/small/'.$img->image_small)}}" alt="{{$img->name}}">
              <div class="card-body p-1 text-center small">
                <p class="card-text">{{$img->name}}<br>{{$img->desc}}</p>
              </div>
            </a>
        @endforeach
    @endforeach
</div>

@push('script')
    <script>
      $( ".crot" )
        .mouseover(function() {
            $(this).css('box-shadow','1px 1px 4px 2px #888888')
        })
        .mouseout(function() {
            $(this).css('box-shadow','none')
        }).fadeToggle(3000);
    </script>
@endpush