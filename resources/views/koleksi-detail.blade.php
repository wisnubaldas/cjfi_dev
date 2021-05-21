@extends('layout.index')
@section('content')
@php($opt = session('option'))
<br>
<div class="row">
    @include('partial.left-tumbnail')
    <div class="col-md-10 col-xs-12">
      <div class="row">
        <div class="col-md-12 foto-dekorasi">
            @foreach ($data->detail->image_asset as $item)
            @if($item->status == 'foto')
              <img src="/img/item/original/{{$item->image_small}}" class="rounded mx-auto d-block img-thumbnail" alt="Responsive image" width="100%" height="100px">
            @endif
            @endforeach
        </div>
        <div class="col-md-4 text-center text-secondary">
          <h5 class="font-weight-bold text-uppercase mt-5">{{$data->detail->nama}}</h5>
          <p>
            {{$data->detail->desc}} <br>
            {{$data->detail->ukuran->nama}}
          </p>
            {{-- @dump($data->detail) --}}
        </div>
        <div class="col-md-8 row">
          {{-- @dump($data->detail) --}}
          @foreach ($data->detail->image_asset->where('status','tiles') as $img)
                  <a class="card m-1 crot text-secondary show-decor position-relative" style="width: 7rem; text-decoration:none" href="javascript:void(0)" data-image_id="{{$img->id}}">
                      <img class="card-img-top p-1" src="{{url('img/item/small/'.$img->image_small)}}" alt="{{$img->name}}">
                      <div class="card-body p-1 text-center small">
                      <span class="card-text">{{$img->name}}</span>
                      </div>
                  </a>
          @endforeach
      </div>
      </div>
      
    </div>
    
</div>
@endsection

@push('script')
<script>
  const tpl_not_found = `<img src="/img/no_image.png" class="rounded mx-auto d-block img-thumbnail" alt="Responsive image" width="100%" height="100px">`
 
  jQuery(function(){
    $('.show-decor').on('click',function(){
        const d = $(this).data('image_id');
        $.ajax({
          url:"/koleksi/dekorasi_detail/"+d,
          method:'GET',
          success:function(a){
              if(a)
              {
                const tpl_found = `<img src="/img/item/original/${a.image}" class="rounded mx-auto d-block img-thumbnail" alt="Responsive image" width="100%" height="100px">`
                $('.foto-dekorasi').html(tpl_found)
              }else{
                $('.foto-dekorasi').html(tpl_not_found)
              }
          },
          error:function(xhr){
            console.log(xhr)
          }
        })
    });
    
    $( ".crot" )
      .mouseover(function() {
          $(this).css('box-shadow','1px 1px 4px 2px #888888').css('transform','scale(2)').addClass('fixed-top')
      })
      .mouseout(function() {
          $(this).css('box-shadow','none').css('transform','scale(1)').removeClass('fixed-top')
      });
  })
  
</script>
@endpush

@push('css')
   
@endpush