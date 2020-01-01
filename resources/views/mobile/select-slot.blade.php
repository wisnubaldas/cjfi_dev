@extends('mobile.layout.index',['footer'=>false])
@section('content')
<div class="container">
    <div class="section">
        <div class="row ">
            <div class="col s12 pad-0">
                <h5 class="bot-20 sec-tit">Pilih Slot Boking</h5>
                @if(Session::has('error'))
                <blockquote class="primary-bg-light">
                    {{ Session::get('error') }}....!!!
                </blockquote>
                @endif
            </div>
        </div>
    </div>
</div>

<ul class="collapsible transparent z-depth-0">
    @foreach($slot as $s)
        <li>
            <div class="collapsible-header" data-slot="{{$s->id}}">
                <i class="mdi mdi-square-edit-outline"></i>Lantai {{$s->lantai}} - Tanggal Boking Slot {{$s->slot}}</div>
            <div class="collapsible-body">
                <div class="row ">
                    <div class="card darken-1">
                        <div class="card-content">
                            <div class="row">
                                <div class="content-{{$s->id}} col s6">
                                
                                </div>
                                <div class="col s6 paging-{{$s->id}}">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="card-action">
                            <form action="/m/boking-slot/{{$s->id}}" method="get">
                            <div class="input-field col s12">
                                <i class="mdi mdi-clock-outline prefix"></i>
                                <input type="text" name="masuk" id="datepicker-input2" class="datepicker datepicker2">
                            </div>
                            <button type="submit" class="waves-effect waves-light btn indigo lighten-2 btn-block">
                                Boking Slot Parkir
                            </button>
                            </form>
                        </div>
                      </div>
                </div>
            </div>
        </li>
    @endforeach
</ul>
<div class="section">
    {{ $slot->links('vendor.pagination.bootstrap-4') }}
</div>

@endsection

@push('css')
    <style>

    </style>
@endpush
@push('scripts')
<script type="text/javascript">
    let x = function(a){
        let aMap = a.map(function(e){
            return `<blockquote style="padding-bottom: 0px; margin:0px;" class="primary-bg-light">
                ${e.date_boking}
            </blockquote>`;
        });
        return aMap.join('');
    };

    let xx = function(a,b,c,d,lantai)
    {
        return `<p class="flow-text">Total ${a}</p>
                <p class="flow-text">Halaman ${b}</p>
                <a onclick="pagging('${d}','${lantai}')" class="pages waves-effect waves-light btn deep-purple lighten-2 ${(!d)?'disabled':''}" href="javascript:;">
                    <i class="mdi mdi-arrow-left-bold-circle left"></i>
                    Prev
                </a>
                <a onclick="pagging('${c}','${lantai}')" class="pages waves-effect waves-light btn deep-purple lighten-2 ${(!c)?'disabled':''}" href="javascript:;">
                    <i class="mdi mdi-arrow-right-bold-circle right"></i>Next
                </a>`
    };
    let pagging = function(a,lantai){
        $.get(a,function(d){
            $('.content-'+lantai).html(x(d.data));
            $('.paging-'+lantai).html(xx(d.total,
                                        d.current_page,
                                        d.next_page_url,
                                        d.prev_page_url,lantai));
        });
    };

    $('.collapsible-header').on('click', function() {
        const p = $(this).parent('.active').length;
        if(!p) {
            const d = $(this).data('slot');
            $.ajax({
                method: 'get',
                url: '/m/boking-list-user/'+d,
            }).done(function(data) {
                 $('.content-'+d).html(x(data.data));
                 $('.paging-'+d).html(xx(data.total,
                                        data.current_page,
                                        data.next_page_url,
                                        data.prev_page_url,d));

            }).fail(function(data) {});
        }
    });

    $(".datepicker.datepicker2").datepicker({
            format: "dd mmmm yyyy",
            autoClose: true
    });
    if ($(".collapsible").length) {
        $(".collapsible").collapsible();
    }
    if ($(".collapsible.expandable").length) {
        $(".collapsible.expandable").collapsible({
            accordion: false
        });
    }
</script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endpush
