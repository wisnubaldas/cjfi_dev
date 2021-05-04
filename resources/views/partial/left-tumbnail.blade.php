<div class="col-xs-12 col-md-4 col-sm-4 col-lg-2">
    {{-- @dump(session('option')) --}}
    @if (isset($data->brand_logo['nama']))
        <div class="detail-merek">
            <div class="box-brand">
                <a href="{{url('koleksi/merek/'.$data->brand_logo->id.'/0/0/0')}}">
                    <img src="{{ url($data->brand_logo->url) }}" class="img-responsive">
                </a>
            </div>
            <a class="btn btn-outline-secondary btn-sm btn-block" href="{{url('koleksi/merek/'.$data->brand_logo->id.'/1/'.$opt['ukuran'].'/'.$opt['motif'])}}">{{__('pages.btn_floor')}}</a>
            <a class="btn btn-outline-secondary btn-sm btn-block" href="{{url('koleksi/merek/'.$data->brand_logo->id.'/2/'.$opt['ukuran'].'/'.$opt['motif'])}}">{{__('pages.btn_wall')}}</a>
            <div class="input-group input-group-sm">
                <select class="custom-select" id="ukuran" onchange="location = this.value;">
                    <option value="0" >{{__('pages.size')}}</option>
                    <option value="{{'/koleksi/merek/'.$data->brand_logo->id.'/'.$opt['type'].'/0/'.$opt['motif']}}">
                        All ukuran
                    </option>
                    @foreach ($data->ukuran as $uk)
                        <option {{$uk->id == $opt['ukuran']?'selected':''}} value="{{'/koleksi/merek/'.$data->brand_logo->id.'/'.$opt['type'].'/'.$uk->id.'/'.$opt['motif']}}">
                            {{$uk->nama}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="input-group input-group-sm">
                <select class="custom-select" id="motif" onchange="location = this.value;">
                    <option value="0"  >{{__('pages.motive')}}</option>
                    <option value="{{'/koleksi/merek/'.$data->brand_logo->id.'/'.$opt['type'].'/'.$opt['ukuran'].'/0'}}">
                        All Motif
                    </option>
                    @foreach ($data->brand_logo->motifs as $mo)
                    <option {{$mo->id == $opt['motif']?'selected':''}} value="{{'/koleksi/merek/'.$data->brand_logo->id.'/'.$opt['type'].'/'.$opt['ukuran'].'/'.$mo->id}}">{{$mo->nama}}</option>
                    @endforeach
                </select>
            </div>
            <a class="btn btn-outline-primary btn-sm btn-block" href="{{url('koleksi/merek/')}}">{{__('pages.back')}}</a>
        </div>
    @else 
        @foreach ($data->brand_logo as $item)
            <div class="box-brand">
                <a href="{{url('koleksi/merek/'.$item->id)}}">
                    <img src="{{ url($item->url) }}" class="img-responsive">
                </a>
            </div>
        @endforeach
    @endif
</div>