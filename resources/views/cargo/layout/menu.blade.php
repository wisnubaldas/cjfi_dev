    <ul class="nav navbar-nav">
        @foreach($cargo_menu as $menu)
            <li class="{{$menu['status']}}"> 
                @if(isset($menu['sub-menu']))
                    <a href="{{$menu['url']}}">{{$menu['name']}}<i class="fa fa-chevron-down"></i></a>
                    @include('cargo.layout.sub_menu',['sub_menu'=>$menu['sub-menu']])
                @else
                    <a href="{{$menu['url']}}">{{$menu['name']}}</a>
                @endif
            </li>
        @endforeach
    </ul>