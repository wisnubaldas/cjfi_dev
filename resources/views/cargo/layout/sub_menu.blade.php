<ul class="sub-menu">
@foreach($sub_menu as $menu)
    @if(isset($menu['sub-menu']))
        <li><a href="{{$menu['url']}}">{{$menu['name']}}<i class="fa fa-chevron-down"></i></a>
            @include('cargo.layout.sub_menu',['sub_menu'=>$menu['sub-menu']])
        </li>
    @else
        <li>
            <a href="{{$menu['url']}}">{{$menu['name']}}<i class="fa fa-chevron-down"></i></a>
        </li>
    @endif
@endforeach
</ul>
