<div class="col-md-12 border border-1 rounded row " style="box-shadow: 1px 1px 4px 2px #888888;">
    @if($data->tiles->count() != 0)
        @foreach ($data->tiles as $items)
            <div class="col-md-12 mt-2 bg-light">
                {{$items[0]->ukuran->nama}}
            </div>
            @foreach ($items as $item)
                {{-- @dump($item->id) --}}
                @foreach ($item->image_asset->where('status','tiles') as $img)
                    @if ($loop->first)
                        <a class="card m-1 p-1 crot text-secondary" style="width: 7rem; text-decoration:none" href="/koleksi/detail/{{$item->id}}">
                            <img class="card-img-top " src="{{url('img/item/small/'.$img->image_small)}}" alt="{{$img->name}}">
                            <div class="card-body p-1 text-center small">
                            <p class="card-text">{{$img->name}}</p>
                            </div>
                        </a>
                    @endif
                @endforeach
            @endforeach
        @endforeach
    @else
        <div class="alert alert-info mt-2 col-md-12" role="alert">
            <h4 class="alert-heading"><i class="fa fa-spinner fa-pulse fa-2x fa-fw" aria-hidden="true"> </i>
                 Data tidak di temukan !</h4>
            <p>Coba cari berdasarkan tipe atau ukuran yang tepat......</p>
        </div>
    @endif
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